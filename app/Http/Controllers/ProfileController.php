<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{

    public function index()
    {
        $employe = User::orderBy('created_at', 'DESC')->get();
        return view('employe.index',compact('employe'));

    }

    public function create()
    {
        return view('employe.create');
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('employe.index')->with('success', 'employe added successfully');
    }

    public function edit($profile)
    {
            $profile = User::findOrFail($profile);
            return view('profile.profile', compact('profile'));
    }




    /**
     * Update the user's profile information.
     */

     public function update(Request $request, string $id)
     {
        $user = User::findOrFail($id);
   
         $user->update($request->all());
   
         return redirect()->route('employe.index')->with('success', 'employe updated successfully');
    }


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return Redirect::to('/');
    }
}
