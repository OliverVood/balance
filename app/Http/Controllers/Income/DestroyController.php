<?php

namespace App\Http\Controllers\Income;

use App\Models\Income;

class DestroyController extends BaseController
{
    public function __invoke(Income $article)
    {
        $this->service->destrioy($article);

        return redirect()->route('income.index');
    }
}
