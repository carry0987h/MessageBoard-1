<?php

namespace Request;

interface RequestInterface
{
    public function query($item);
    public function request($item);
    public function session($item);
    public function cookie($item);
    public function server($item);
}