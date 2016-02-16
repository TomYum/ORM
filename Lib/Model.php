<?php

namespace TY\Orm;

abstract class Model
{
    public static function where($data)
    {
        return (new Statement(new static::class))->where($data);
    }
    
    public function find($statement)
    {
        
    }
}