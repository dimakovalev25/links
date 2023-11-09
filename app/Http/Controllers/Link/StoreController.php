<?php

namespace App\Http\Controllers\Link;


use App\Http\Controllers\Controller;
use App\Http\Requests\Link\StoreRequest;
use App\Models\Link;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $link = Link::create($data);
        return $link;

    }
}
