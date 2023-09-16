<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Models\Income;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = \request()->validate([
            'article_id' => 'integer',
            'amount' => 'numeric'
        ]);
        Income::create($data);

        return redirect()->route('income.index');
    }
}
