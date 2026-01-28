<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\PhishingLogs;

class DashboardController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::latest()->get();
        $logs = PhishingLogs::latest()->get();

        return view('phishing.dashboard', compact('campaigns', 'logs'));
    }

    public function destroyLog($id)
    {
        $log = PhishingLogs::findOrFail($id);
        $log->delete();

        return redirect()->route('dashboard')->with('success', 'Phishing log deleted successfully.');
    }
}
