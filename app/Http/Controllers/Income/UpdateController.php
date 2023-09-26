<?php

namespace App\Http\Controllers\Income;

use App\Http\Requests\Income\UpdateRequest;
use App\Models\Income;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Income $income)
    {
        $data = $request->validated();
        $this->service->update($income, $data);

        return redirect()->route('income.show', $income->id);
    }
}
