<?php

namespace TY\Orm\Dictionary;

abstract class Dictionary
{
    
    abstract private function compileAnd();
    
    final public function select(array $fields)
    {
        
        return $this;
    }
    
}