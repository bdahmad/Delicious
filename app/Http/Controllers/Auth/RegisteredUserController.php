<?php

namespace App\Http\Controllers\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Carbon\Carbon;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'username' => 'required',
        ]);

        $user = User::insertGetId([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = 'user_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(200, 200)->save('uploads/' . $imageName);

            User::where('id', $user)->update([
                'photo' => $imageName,
            ]);
        }

        if ($user) {
            $notification = array(
                'message' => 'Successfully Complete Registration.',
                'alert-type' => 'error',
            );
            return redirect(RouteServiceProvider::HOME)->with($notification);
        } else {
            $notification = array(
                'message' => 'Oops. Operation failed.',
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notification);
        }
    }
}
