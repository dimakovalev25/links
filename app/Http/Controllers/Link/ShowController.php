<?php

namespace App\Http\Controllers\Link;
use App\Http\Controllers\Controller;
use App\Models\Link;


class ShowController extends Controller
{
    public function __invoke($link)
    {
        $link = Link::findOrFail($link);
        return $link;

    }
}
