<?php

namespace App\Http\Controllers\Income;

use App\Http\Requests\Income\StoreRequest;
use App\Models\Income;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('income.index');
    }
}
