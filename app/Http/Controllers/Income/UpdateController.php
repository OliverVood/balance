<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Models\Income;

class UpdateController extends Controller
{
    public function __invoke(Income $income)
    {
        $data = \request()->validate([
            'article_id' => 'integer',
            'amount' => 'numeric'
        ]);
        $income->update($data);

        return redirect()->route('income.show', $income->id);
    }
}
