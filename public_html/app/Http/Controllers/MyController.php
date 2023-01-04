<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Reqest;

    class MyController extends Controller
    {
        //
        function show(){
            $datas['name'] = "this is my controller";
            return view('my_view', $datas);
        }
    }

