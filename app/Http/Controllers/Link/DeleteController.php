<?php

namespace App\Http\Controllers\Link;
use App\Http\Controllers\Controller;
use App\Models\Link;


class DeleteController extends Controller
{
    public function __invoke($Link)
    {
        $Link = Link::findOrFail($Link);
        $Link->delete();
        return $Link;
    }
}
