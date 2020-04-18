<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionlogController extends Controller
{
    public  function index(){
        return view('pages.transactionlogsIndex');
    }
}
