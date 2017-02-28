<?php

namespace Foostart\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

Class SampleController extends Controller
{

    public function index()
    {
        return view("sample::foostart");
    }

}
