<?php

namespace Database;

class Database implements DatabaseInterface
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:dbname=message;host=127.0.0.1;charset=utf8mb4', 'message', 'abcdef');
    }

    public function select()
    {
        $sth = $this->pdo->query('SELECT * FROM messages WHERE 1');
        return $sth->fetchAll(\PDO::FETCH_OBJ);
    }

    public function update( $data )
    {
        $sth = $this->pdo->prepare('UPDATE message SET `name`=:n, `email`=:e, `messafe`=:m WHERE `id`=:i');
        $sth->execute([
            ':n'    => $data->name,
            ':e'    => $data->email,
            ':m'    => $data->message,
            ':i'    => $data->id
        ]);
    }

    public function insert( $data )
    {
        $sth = $this->pdo->prepare('INSERT INTO messages (`name`, `email`, `message`) VALUES (:n, :e, :m)');
        $sth->execute([
            ':n'    => $data->name,
            ':e'    => $data->email,
            ':m'    => $data->message
        ]);
    }

    public function remove( $id )
    {
        $sth = $this->pdo->prepare('DELETE FROM messages WHERE id=:i');
        $sth->execute([':i'=>$id]);
    }
}