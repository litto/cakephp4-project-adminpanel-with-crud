<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

class ArticlesController extends AppController
{

	public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Paginator');
        $this->loadComponent('Flash'); // Include the FlashComponent
    }
	    public function index()
    {
        $this->viewBuilder()->setLayout('admin_main_layout');
        $this->loadComponent('Paginator');
        $articles = $this->Paginator->paginate($this->Articles->find());
        $this->set(compact('articles'));
    }

    public function view($slug = null)
{
    $article = $this->Articles->findBySlug($slug)->firstOrFail();
    $this->set(compact('article'));
}

public function add()
    {
                $this->viewBuilder()->setLayout('admin_main_layout');

        $article = $this->Articles->newEmptyEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());

            // Hardcoding the user_id is temporary, and will be removed later
            // when we build authentication out.
            $article->user_id = 1;

$attachment = $this->request->getData('txtFile');
if($attachment){
$imagename = $attachment->getClientFilename();
$type = $attachment->getClientMediaType();
$size = $attachment->getSize();
$tmpName = $attachment->getStream()->getMetadata('uri');
$error = $attachment->getError();
$targetPath= WWW_ROOT.'uploads'.DS.$imagename;
$attachment->moveTo($targetPath);

}else{
    $imagename='demo.jpg';
}

$article->image=$imagename;


            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('article', $article);
    }

    public function edit($slug)
{

$this->viewBuilder()->setLayout('admin_main_layout');

    $article = $this->Articles
        ->findById($slug)
        ->firstOrFail();

    if ($this->request->is(['post', 'put'])) {
        $this->Articles->patchEntity($article, $this->request->getData());


        if ($this->Articles->save($article)) {

$attachment = $this->request->getData('txtFile');
if($attachment){

$imagename = $attachment->getClientFilename();
$type = $attachment->getClientMediaType();
$size = $attachment->getSize();
$tmpName = $attachment->getStream()->getMetadata('uri');
$error = $attachment->getError();
$targetPath= WWW_ROOT.'uploads'.DS.$imagename;
$attachment->moveTo($targetPath);
$article->image=$imagename;
$this->Articles->save($article);

}


            $this->Flash->success(__('Your article has been updated.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update your article.'));
    }

    $this->set('article', $article);
}




public function delete($slug)
{
    $this->request->allowMethod(['post', 'delete','get']);

    $article = $this->Articles->findById($slug)->firstOrFail();
    if ($this->Articles->delete($article)) {
        $this->Flash->success(__('The {0} article has been deleted.', $article->title));
        return $this->redirect(['action' => 'index']);
    }
}


public function publish($slug)
{
    $this->request->allowMethod(['post','get']);

    $article = $this->Articles->findById($slug)->firstOrFail();
    
    $article->published=1;

    if ($this->Articles->save($article)) {

        $this->Flash->success(__('The {0} article has been published.', $article->title));
        return $this->redirect(['action' => 'index']);
    }
}

public function unpublish($slug)
{
    $this->request->allowMethod(['post','get']);

    $article = $this->Articles->findById($slug)->firstOrFail();
    
    $article->published=0;

    if ($this->Articles->save($article)) {

        $this->Flash->success(__('The {0} article has been unpublished.', $article->title));
        return $this->redirect(['action' => 'index']);
    }
}




}
