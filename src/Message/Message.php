<?php

namespace Message;

use Request\Request;
use Database\Database;

class Message implements MessageInterface
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function show()
    {
        return $this->database->select();
    }

    public function add(Request $r)
    {
        $isAdded = true;
        $this->database->insert((object)$r->request());
        return $isAdded;
    }

    public function update(Request $r)
    {
        $isUpdated = true;
        $this->database->update((object)$r->request());
        return $isUpdated;

    }

    public function  remove(Request $r)
    {
        $isRemoved = true;
        $this->database->remove($r->query('id'));
        return $isRemoved;
    }
}