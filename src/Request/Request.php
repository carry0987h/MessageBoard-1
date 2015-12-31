<?php

namespace Request;

class Request implements RequestInterface
{
    private $query;
    private $request;
    private $cookie;
    private $session;
    private $server;

    public function __construct()
    {
        self::createFromGlobal();
    }

    protected function createFromGlobal()
    {
        if( !session_id() )
            session_start();

        $this->query = $_GET;
        $this->request = $_POST;
        $this->cookie = $_COOKIE;
        $this->session = $_SESSION;
        $this->server = $_SERVER;
    }

    public function query( $item = null )
    {
        if ( is_null($item) )
            return $this->query;
        return $this->query[$item] ?? null;
    }

    public function request( $item = null )
    {
        if ( is_null($item) )
            return $this->request;
        return $this->request[$item] ?? null;
    }

    public function cookie( $item = null )
    {
        if( is_null($item) )
            return $this->cookie;
        return $this->cookie[$item] ?? null;
    }

    public function server( $item = null)
    {
        if ( is_null($item) )
            return $this->server;
        return $this->server[$item] ?? null;
    }

    public function session( $item = null )
    {
        if ( !session_id() )
            session_start();
        if ( is_null($item) )
            return $this->session;
        return $this->session[$item] ?? null;
    }

}