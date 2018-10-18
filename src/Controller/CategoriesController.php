<?php
use app\controller

class CategoriesController extends Appcontroller  {
    
    public function index(){
       $this->loadComponent('Paginator');
        $categories=$this->Paginator->paginate($this->Categories->find());
        $this->set(compact('categories'));
    }
    
    
}  