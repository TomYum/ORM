<?php

namespace TY\Orm;
/**
 * Abstract model
 */
 
abstract class Model
{
    
    /**
     * Create new statement object and return
     */
    public static function where($data)
    {
        return (new Statement(self::creatInstance() ) )->where($data);
    }
    
    /**
     * Get model ClassName
     */
    final public static function getClassName()
    {
        return static::class;
    }
    
    /**
     * Get new Model Instance
     */
    final public function creatInstance(){
        return new static();
    }
    
    public function find($statement)
    {
        $stmt = new Statement($this);
        $stmt->where($statement)->get();
    }
    
    abstract public function getFields();
    
    
}