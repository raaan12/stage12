<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    public function edit($employe)
    {
            $employe = User::findOrFail($employe);
            return view('employe.edit', compact('employe'));
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

    public function updateName(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->adress = $request->input('adress');
        $user->phone_number = $request->input('phone_number');

        $user->save();
    
        return redirect()->back()->with('success', 'Profile edited successfully.');
    }
    public function updatePass(Request $request)
    {
        $user = Auth::user();
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->password = Hash::make($request->input('password'));

        $user->save();
    
        return redirect()->back()->with('success', 'Profile edited successfully.');
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
