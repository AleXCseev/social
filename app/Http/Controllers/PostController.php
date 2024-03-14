<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        return $data;
    }
}
