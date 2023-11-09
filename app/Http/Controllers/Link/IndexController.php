<?php

namespace App\Http\Controllers\Link;


use App\Http\Controllers\Controller;
use App\Models\Link;


class IndexController extends Controller
{
    public function __invoke()
    {
        $links = Link::all();
        return $links;

    }
}
