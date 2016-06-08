<?php

namespace TY\Orm\Statements;

interface StatementsInterface 
{
    /**
     * @return Where
     */
    public function where();
    
    /**
     * @return ..\Model
     */
    public function get();
}