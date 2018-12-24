<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 13.12.2018 г.
 * Time: 14:10 ч.
 */

namespace database;


class ExecuteStatement implements ExecuteStatementInterface
{

    private $stmt;

    public function __construct(\PDOStatement $stmt)
    {
        $this->stmt = $stmt;
    }

    public function bindParam(string $name, $value, $pdoType): ExecuteStatementInterface
    {
        $this->stmt->bindParam($name, $value, $pdoType);

        return new ExecuteStatement($this->stmt);
    }

    public function execute(array $arr = null): FetchStatementInterface
    {
        $this->stmt->execute($arr);

        return new FetchStatement($this->stmt);
    }

}