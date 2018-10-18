<?php


namespace App\Model\Table;
use cake\ORM\Table;

class Product extends Entity{
    
    protected $_accessible=[
        '*'=>true,
        'id'=>false,
        'slug'=>false

    ];
    
}