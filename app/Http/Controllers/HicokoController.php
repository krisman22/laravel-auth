<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\HicokoEmail;
use Illuminate\Support\Facades\Mail;
class HicokoController extends Controller
{
    public function index()
    {
        Mail::to("admin@hicokostudio.com")->send(new HicokoEmail());
        return "Email telah dikirim";
    }
}
