<?php

namespace TY\Orm;

class Statement 
{
    private $model;
    
    private $where;
    
    private $dictionary;
    
    
    
    public function __construct($model)
    {
        $this->model = $model;
        
    }
    
    public function get()
    {
        $fields = $model::getFields();
        $dictionary->select($fields);
        
        
    }
    
    public function where(){
        if(!$this->weher) $this->weher = new StatementWhere($this);
        return $this->weher;
    }
}