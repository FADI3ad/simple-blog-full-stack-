<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request):RedirectResponse{

        // dd($request->all());


        Subscriber::create([

        'email'=>$request->email,


        ]);


    return redirect()->back()->with('success', 'تم إرسال الرسالة بنجاح!');





    }
}
