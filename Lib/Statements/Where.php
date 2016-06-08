<?php

namespace TY\Orm\Statements;

class Where implements StatementsInterface
{
    private $statement;
    
    public function __construct(Statement $statement)
    {
        $this->statement = $statement;
    }
    
    public function andWhere($statement)
    {
        
    }
    
    public function orWhere($statement)
    {
        
    }
    
    final public function get(){
        return $this->statement->get();
    }
}