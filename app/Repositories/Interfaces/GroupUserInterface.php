<?php

namespace App\Repositories\Interfaces;

interface GroupUserInterface
{
    public function getAll();

    public function getById($id);

    public function join($id);
}
