<?php
    namespace App\Controller;

    use App\Controller\AppController;
    use Cake\Routing\Router;

    class HomeController extends AppController
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
            $this->loadModel('Articles');

        $articles = $this->Paginator->paginate($this->Articles->find());
        $this->set(compact('articles'));
    }

    }
?>