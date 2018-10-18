<?php
use app\controller

class ProductsController extends Appcontroller  {
    
    public function index(){
       $this->loadComponent('Paginator');
        $products=$this->Paginator->paginate($this->Products->find());
        $this->set(compact('products'));
    }
    
    public function view($slug=null){
        $products=$this->Products->findBySlug($slug)->firstOrFail();
        $this->set(compact('products'));
        
    }
    
}  