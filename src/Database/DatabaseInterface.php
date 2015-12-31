<?php

namespace Database;

interface DatabaseInterface
{
    public function select();
    public function insert( $data );
    public function update( $data );
    public function remove( $id );
}