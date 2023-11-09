<?php

namespace App\Http\Controllers\Link;


use App\Http\Controllers\Controller;
use App\Http\Requests\Link\UpdateRequest;
use App\Models\Link;


class EditController extends Controller
{
    public function __invoke(UpdateRequest $request, Link $Link)
    {
        $data = $request->validated();
        $Link->update($Link);
        return $Link;

    }
}

