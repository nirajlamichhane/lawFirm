<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\Updatecase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCaseController extends Controller
{
    public function index()
    {
        $cases = auth()->user()->cases;
        // dd('this is dumped');
        $caseupdates = auth()->user()->updatecases;
        return view('case', compact('cases', 'caseupdates'));
    }
}
