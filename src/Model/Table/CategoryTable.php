<?php

namespace App\Model\Table;
use cake\ORM\Table;

class CategoriesTable extends Table{
    
    public function initialize (array $conf){
        
        $this->hasMany ('Products');
        
        $this->addBehavior ('Timestamps');
        
    }
    
}