<?php

namespace database;


interface PrepareStatementInterface
{
    public function prepare(string $sql): ExecuteStatementInterface;
}