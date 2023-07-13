<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Get the user data using Eloquent
        $user = User::find($user->id);
        $profile = Profile::where('user_id', $user->id)->first();
        $portfolio = Portfolio::where('user_id', $user->id)->get();

        // Pass the user data to the view
        return view('profile', compact('user', 'profile', 'portfolio'));
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $userProfile = Profile::where('user_id', $user->id)->first();
        $portfolio = Portfolio::where('user_id', $user->id)->get();

        return view('profile', ['user' => $user, 'profile' => $userProfile, 'portfolio' => $portfolio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $profile = Profile::where('user_id', $user->id)->first();

        // Update the user record with the provided form data
        $user->email = $request->input('email', $user->email);
        $user->name = $request->input('name', $user->name);
        $user->address = $request->input('address', $user->address);
        $user->contact = $request->input('contact', $user->contact);
        $user->user_type = $request->input('user_type', $user->user_type);
        $user->year_experience = $request->input('year_experience', $user->year_experience);

        // Update the profile record with the provided form data
        if ($profile) {
            $profile->fee = $request->input('fee', $profile->fee);
            $profile->project_count = $request->input('project_count', $profile->project_count);
            $profile->availability = $request->input('availability', $profile->availability);
            $profile->save();
        }

        // Check if a new password is provided
        $password = $request->input('password');
        if ($password) {
            $user->password = Hash::make($password); // Hash the password before storing it
        }

        $user->save();
        return redirect()->route('setting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
