<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Check user's role and return the correct redirect path.
     *
     * @return string|null
     */
    public function role_check()
    {
        if (auth()->check()) {
            $user = auth()->user();

            if ($user->hasRole('super-admin')) {
                return '/super-admin';
            } elseif ($user->hasRole('admin')) {
                return '/admin';
            } elseif ($user->hasRole('agent')) {
                return '/agent';
            } elseif ($user->hasRole('user')) {
                return '/user';
            }
        }

        // Default redirection
        return null;
    }

    /**
     * Redirect based on user role after login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function authenticated(Request $request, $user)
    {
        // Check the user's role and redirect accordingly
        $redirectTo = $this->role_check();

        return redirect()->intended($redirectTo ?? $this->redirectTo);
    }

    /**
     * Show the login form.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function showLoginForm()
    {
        if (auth()->check()) {
            $redirect = $this->role_check();
            return redirect($redirect ?? $this->redirectTo)->with('error', 'Already logged in');
        }

        return view('auth.login');
    }

    /**
     * Log the user out and redirect to the home page.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
