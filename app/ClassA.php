<?php

namespace App;

class ClassA
{
    protected string $name = 'A';

    public function getName(): string
    {
        return $this->name;
    }
}