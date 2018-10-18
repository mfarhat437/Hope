<?php

namespace App\Model\Table;
use cake\ORM\Table;

class ProductsTable extends Table{
    
    public function initialize (array $conf){
        
        $this->belongsTo ('Categories');

        
        $this->addBehavior ('Timestamps');
    }
    
}