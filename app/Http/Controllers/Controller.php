<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected $layout = 'frontend.layout.layout';

    protected function view(string $view, array $data = [], array $mergeData = [])
    {
        return view($this->layout)->with([
            'content' => view($view, $data, $mergeData)
        ]);
    }
}
