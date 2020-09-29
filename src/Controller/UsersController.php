<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

class UsersController extends AppController
{

	public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Paginator');
        $this->loadComponent('Flash'); // Include the FlashComponent
    }

public function beforeFilter(\Cake\Event\EventInterface $event)
{
    parent::beforeFilter($event);

    $this->Authentication->allowUnauthenticated(['login']);
}

    public function login()
{
    $result = $this->Authentication->getResult();

	if ($this->request->is('post') && !$result->isValid()) {
        $this->Flash->error('Invalid username or password');
    }

    // If the user is logged in send them away.
    if ($result->isValid()) {

        $target = $this->Authentication->getLoginRedirect() ?? '/home';
        return $this->redirect($target);
    }
    
}

public function logout()
{
    $this->Authentication->logout();
    return $this->redirect(['controller' => 'Users', 'action' => 'login']);
}




}