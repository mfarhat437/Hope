<?php


namespace App\Model\Table;
use cake\ORM\Table;

class Category extends Entity{
    
    protected $_accessible=[
        '*'=>true,
        'id'=>false
    ];
    
}