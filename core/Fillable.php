<?php

namespace Core;

class Fillable
{
    protected $user = ["name" => "jon"];

    public function get_user()
    {
        return $this->user;
    }
}
