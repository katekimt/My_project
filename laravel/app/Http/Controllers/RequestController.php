<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InformRequest;
use App\Models\Inform;

;


class RequestController extends Controller
{
    public function submit(InformRequest  $request){
        Inform::create($request->validated());
        return redirect()->route('home');
    }
}
