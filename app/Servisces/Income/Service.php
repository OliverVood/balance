<?php

namespace App\Servisces\Income;

use App\Models\Income;

class Service
{
    public function store($data)
    {
        Income::create($data);
    }

    public function update($income, $data)
    {
        $income->update($data);
    }
}
