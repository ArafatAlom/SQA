<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

/**
 * ProfileController Class
 *
 * @package App\Http\Controllers
 */
class ProfileController extends Controller
{
    /**
     * Display the user's profile.
     *
     * @return \Illuminate\View\View
     */
    public function showProfile()
    {
        return view('profile.index');
    }

    /**
     * Update user's personal details.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePersonalDetails(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string',
            'user_id' => 'required|string',
            'email' => 'required|email',
            'gender' => 'required|string',
            'contact_no' => 'required|string',
            'address' => 'required|string',
        ]);

        // Get the authenticated user
        $user = auth()->user();

        // Update user's personal details
        $user->name = $request->input('name');
        $user->user_id = $request->input('user_id');
        $user->email = $request->input('email');
        $user->gender = $request->input('gender');
        $user->contact_no = $request->input('contact_no');
        $user->address = $request->input('address');

        // Save the changes
        $user->save();

        // Redirect back to the profile page with a success message
        return redirect()->route('profile.index')->with('success', 'Personal details updated successfully.');
    }

    /**
     * Change user's password.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePassword(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:8',
            'confirm_password' => 'required|string|same:new_password',
        ]);

        // Get the authenticated user
        $user = auth()->user();

        // Verify the old password
        if (!password_verify($request->input('old_password'), $user->password)) {
            return redirect()->route('profile.index')->with('error', 'Old password is incorrect.');
        }

        // Update user's password
        $user->password = bcrypt($request->input('new_password'));

        // Save the changes
        $user->save();

        // Redirect back to the profile page with a success message
        return redirect()->route('profile.index')->with('success', 'Password changed successfully.');
    }
}






