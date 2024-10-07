<?php

namespace Code\Database;

class Database {
    protected $pdo;

    //Creem constructor
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    //creem funcio per agafar els registres d'una taula de la base de dades

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM $table");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}