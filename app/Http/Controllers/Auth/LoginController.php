<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/kuis'; // Default redirect

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Handle a successful authentication.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user)
    {
        // Cek status pengguna dan arahkan ke halaman yang sesuai
        if ($user->status === 'Responden') {
            return redirect('/form'); // Arahkan ke /kuis
        } elseif ($user->status === 'Puskar') {
            return redirect('/aktor'); // Arahkan ke /aktor
        }elseif ($user->status === 'Prodi') {
            return redirect('/responden'); // Arahkan ke /responden
        }

        // Jika status tidak cocok, arahkan ke halaman default
        return redirect($this->redirectTo);
    }

    protected function loggedOut(Request $request)
    {
        return redirect('/'); // Halaman setelah logout
    }
}
