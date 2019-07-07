<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JoinUs;

class JoinUsController extends Controller
{
    public function store(Request $request)
    {
        $joinUs = JoinUs::create($request->all());
        if($joinUs)
        {
            return redirect()->route('thankyou');
        }
    }

    public function thankyou()
    {
        return view('thankyou');
    }
}
