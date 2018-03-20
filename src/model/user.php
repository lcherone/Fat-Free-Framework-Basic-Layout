<?php

namespace Model;

class user extends \Base\Model
{
    protected $f3;

    public function __construct(\Base $f3)
    {
        parent::__construct('user');

        $this->f3 = $f3;
    }
}
