<?php

namespace App\Models;

use App\Database\Db;
use PDO;

abstract class Model
{
    protected string $table = '';
    private Db $connector;

    public function __construct(Db $connector)
    {
        $this->connector = $connector;
    }

    public function execute(string $sql): void
    {
        $this->connector->query($sql)->execute();
    }

    public function insert(string $columns, array $params): void
    {
        $valuesString = substr(str_repeat("?,", count($params)), 0, -1);

        $conn = $this->connector->prepare("INSERT INTO {$this->table} ({$columns}) VALUES ($valuesString)");
        $conn->execute($params);
    }

    public function select(string $conditions = ''): array
    {
        $result = [];

        $pdo = $this->connector->query("SELECT * FROM {$this->table} {$conditions}");
        $pdo->setFetchMode(PDO::FETCH_ASSOC);

        while ($row = $pdo->fetch()) {
            $result[] = $row;
        }

        return $result;
    }
}