<?php

namespace App\Http\Controllers;

use App\Models\Label;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
//        $label = Label::find(1);
//        $labels = Label::all();
//        $labels = Label::where('state', Label::STATE_ACTIVE)->first();
        $labels = Label::where('state', Label::STATE_ACTIVE)->get();
        foreach ($labels as $label) dump($label->name);
        dump($labels);
    }

    public function create() {
        $label = [
            'name' => 'Name 3',
            'description' => 'Desc 3',
            'color' => '123000000',
        ];

        Label::create($label);
    }

    protected function update() {
        $label = Label::find(2);

        $label->update([
            'name' => 'update Name 1',
            'description' => 'update Desc 2',
            'color' => '123432000'
        ]);
    }

    protected function delete() {
        $label = Label::find(2);
//        $label = Label::withTrashed()->find(2);
//        $label->restore();

        $label->delete();
    }
}
