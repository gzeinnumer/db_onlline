<?php

namespace App\Http\Controllers;

use App\Models\DbOnline;
use Illuminate\Http\Request;

class DbOnlineController extends Controller
{
    public function index()
    {
        return DbOnline::all();
    }
}
