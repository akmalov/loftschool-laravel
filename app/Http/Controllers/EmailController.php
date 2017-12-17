<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Email;

class EmailController extends Controller
{
    public function index()
    {
        $settings = Email::all();
        $data["settings"] =  $settings;
        return view("admin.email",$data);
    }
    public function store(Request $request)
    {
        $email = Email::first();
        $email->email = $request->input('email');
        $email->save();
        return redirect('/admin/email');
    }
}