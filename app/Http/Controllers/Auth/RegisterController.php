<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Image;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required','unique:users,username'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'career' => ['required', 'string'],
            'contact_number' => ['required', 'numeric', 'digits:12']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = app('request');

        $user = new User();

        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/' . $filename);
            Image::make($image)->resize(200, 200)->save($location);
            $user->picture_url = $filename;
        }

        $user->username = $data['username'];
        $user->password = $data['password'];
        $user->email = $data['email'];
        $user->firstname = $data['firstname'];
        $user->lastname = $data['lastname'];
        $user->career = $data['career'];
        $user->contact_number = $data['contact_number'];

        return User::create([
            'username' => $user->username,
            'password' => Hash::make($user->password),
            'email' => $user->email,
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
            'career' => $user->career,
            'contact_number' => $user->contact_number,
            'picture_url' => $user->picture_url,
        ]);
    }
}
