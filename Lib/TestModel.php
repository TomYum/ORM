<?php

namespace TY\Orm;

class TestModel extends Model{
    
     public function getFields(){
         return [
            'id' => "ID",
            'name' => "VALUE",
            'desc' => "DESCRIPTION"
        ];
     }
    
}