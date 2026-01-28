<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::latest()->get();

        return view('campaigns.index', compact('campaigns'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'email_body' => 'required|string',
            'phishing_link' => 'required|string|max:2048',
        ]);

        Campaign::create($validated);

        return redirect()->route('campaigns.index');
    }
}
