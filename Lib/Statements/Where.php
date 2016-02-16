<?php

namespace TY\Orm\Statements;

class Where implements StatementsInterface
{
    private $statement;
    
    public function __construct(Statement $statement)
    {
        $this->statement = $statement;
    }
    
    public function get(){
        return $this->statement->get();
    }
}