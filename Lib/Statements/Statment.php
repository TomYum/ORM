<?php

namespace TY\Orm;

class Statement 
{
    private $model;
    
    private $where;
    
    public function __construct($model)
    {
        
    }
    
    public function get()
    {
        $fields = $model::getFields();
    }
    
    public function where(){
        if(!$this->weher) $this->weher = new StatementWhere($this);
        return $this->weher;
    }
}