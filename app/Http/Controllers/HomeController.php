<?php

namespace App\Http\Controllers;

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
        return view('home');
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        // Optionally, you can invalidate the session
        $request->session()->invalidate();

        // Regenerate the CSRF token to protect against CSRF attacks
        $request->session()->regenerateToken();

        return redirect('/'); // Redirect to your desired route after logout
    }
}
