<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Servisces\Income\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
