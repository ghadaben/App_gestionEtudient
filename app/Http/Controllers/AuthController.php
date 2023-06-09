use Illuminate\Support\Facades\Auth;

public function showLoginForm()
{
    return view('auth.login');
}

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}
