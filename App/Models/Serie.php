<?php

namespace App\Models;

use Core\App;

class Serie
{
    protected static $table = 'series';

    // Function to get all series
    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll();
    }

    // Function to find a series by id
    public static function find($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        $statement->execute(['id' => $id]);
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    // Function to create a new series
    public static function create($data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('INSERT INTO ' . static::$table . "(name, director, year, genre, synopsis) VALUES (:name, :director, :year, :genre, :synopsis)");
        $statement->bindValue(':name', $data['name']);
        $statement->bindValue(':director', $data['director']);
        $statement->bindValue(':year', $data['year']);
        $statement->bindValue(':genre', $data['genre']);
        $statement->bindValue(':synopsis', $data['synopsis']);
        $statement->execute();
    }

    // Function to update a series
    public static function update($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare("UPDATE " . static::$table . " SET name = :name, director = :director, year = :year, genre = :genre, synopsis = :synopsis WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':name', $data['name']);
        $statement->bindValue(':director', $data['director']);
        $statement->bindValue(':year', $data['year']);
        $statement->bindValue(':genre', $data['genre']);
        $statement->bindValue(':synopsis', $data['synopsis']);
        $statement->execute();
    }

    // Function to delete a series
    public static function delete($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}