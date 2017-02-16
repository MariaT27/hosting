<?php namespace App\Http\Controllers;

use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Validation\Rule;

class My extends Controller
{
    public function index()
    {
        return view($this->view);
    }

    public function password()
    {
        $has_password = !empty($this->request->user()->password);

        return view($this->view, compact('has_password'));
    }

    public function passwordPut(Hasher $hash)
    {
        $user = $this->request->user();
        $has_password = !empty($user->password);

        $this->validate($this->request, [
            'password' => $has_password ? 'required' : '',
            'new_password' => 'required|min:6',
        ]);

        if ($has_password && !$hash->check($this->request->input('password'), $user->password)) {
            return back()->withErrors(['password' => 'Неверно введен текущий пароль']);
        }

        $user->password = $this->request->input('new_password');
        $user->save();

        return redirect()->back()->with('message', trans('my.saved'));
    }

    public function profile()
    {
        return view($this->view);
    }

    public function profilePut()
    {
        $user = $this->request->user();

        $this->validate($this->request, [
            'mail' => 'empty',
            'username' => [
                'min:2',
                'max:32',
                'alpha_dash',
                Rule::unique('users', 'login')->ignore($user->id),
            ],
            'email' => [
                'required',
                'email',
                'max:125',
                Rule::unique('users')->ignore($user->id),
            ],
        ]);

        $user->login = $this->request->input('username');
        $user->email = $this->request->input('email');
        $user->save();

        return redirect()->back()->with('message', trans('my.saved'));
    }
}