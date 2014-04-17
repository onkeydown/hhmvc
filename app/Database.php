<?php

class Database{
    protected $adapter;

    public function __construct(DBInterface $adapter)
    {
        $this->adapter = $adapter;
    }
}