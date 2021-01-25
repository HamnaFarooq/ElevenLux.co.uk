<?php

namespace App\Http\Controllers;
use App\User;
use App\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::id() == 1)
        {
            $vacancies = Vacancy::get();
            $user = User::Where('id',1)->first();
            $visits = $user->visits;
            $contacted = $user->contacted;
            $applicants = $user->applicants;
            return view('home', compact('visits', 'contacted', 'applicants', 'vacancies'));
        }
        else
        {
            return 'Sorry! You are not the admin of this website!';
        }
    }
}
