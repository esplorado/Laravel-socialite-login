<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{

    public function adminLogin(Request $request)
    {

        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];

        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {

            if (\Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin', 'status' => '1'])) {
                return redirect()->route('home')->with('success', 'Logged in successfully');
            } else {
                return redirect()->back()->with('error', 'Please enter valid email or password.');
            }

        }
    }

    public function adminLogout()
    {

        \Auth::logout();
        return redirect('/')->with('success', 'Logged out successfully.');
    }

    // Redirect to google login page
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    // Callback from google login page
    public function handleProviderCallback()
    {        
        $user = Socialite::driver('google')->user();        
        
        $find_user = User::where(['email' => $user->email,'role' => 'admin'])->first();
        if ($find_user) {
            \Auth::login($find_user);
            
            return redirect()->route('home')->with('success', 'Logged in successfully');
        } else {
            return redirect('/')->with('error', 'Invalid credentials');
        }                
    }

    // Redirect to facebook login page
    public function facebookRedirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    // Callback from facebook login page
    public function facebookHandleProviderCallback()
    {        
        $user = Socialite::driver('facebook')->user();                
        $find_user = User::where(['email' => $user->email,'role' => 'admin'])->first();
        if ($find_user) {
            \Auth::login($find_user);
            
            return redirect()->route('home')->with('success', 'Logged in successfully');
        } else {
            return redirect('/')->with('error', 'Invalid credentials');
        }                
    }

     // Redirect to github login page
     public function githubRedirectToProvider()
     {
         return Socialite::driver('github')->redirect();
     }
 
     // Callback from github login page
     public function githubHandleProviderCallback()
     {        
         $user = Socialite::driver('github')->user();                         
         $find_user = User::where(['email' => $user->email,'role' => 'admin'])->first();
         if ($find_user) {
             \Auth::login($find_user);             
             return redirect()->route('home')->with('success', 'Logged in successfully');
         } else {
             return redirect('/')->with('error', 'Invalid credentials');
         }                
     }

     // Redirect to linkedIn login page
     public function linkedInRedirectToProvider()
     {        
         return Socialite::driver('linkedIn')->redirect();
     }
 
     // Callback from linkedIn login page
     public function linkedInHandleProviderCallback()
     {        
         $user = Socialite::driver('linkedIn')->user();                         
         $find_user = User::where(['email' => $user->email,'role' => 'admin'])->first();
         if ($find_user) {
             \Auth::login($find_user);             
             return redirect()->route('home')->with('success', 'Logged in successfully');
         } else {
             return redirect('/')->with('error', 'Invalid credentials');
         }                
     }

    // Redirect to Twitter login page
    public function twitterRedirectToProvider()
    {
        // dd("sdfds");
        return Socialite::driver('twitter')->redirect();
    }

    // Callback from Twiiter login page
    public function twitterHandleProviderCallback()
    {        
        $user = Socialite::driver('twitter')->user();                
        $find_user = User::where(['email' => $user->email,'role' => 'admin'])->first();
        if ($find_user) {
            \Auth::login($find_user);
            
            return redirect()->route('home')->with('success', 'Logged in successfully');
        } else {
            return redirect('/')->with('error', 'Invalid credentials');
        }                
    }
}
