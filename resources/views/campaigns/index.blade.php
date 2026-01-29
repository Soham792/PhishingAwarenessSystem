@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <h2>Campaigns</h2>
            @if(session('success'))
                <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @endif
        </div>
        <div class="col text-end">
            <a href="{{ route('campaigns.create') }}" class="btn btn-primary">Create New Campaign</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Email Body</th>
                            <th>Phishing Link</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($campaigns as $campaign)
                            <tr>
                                <td>{{ $campaign->subject }}</td>
                                <td>{{ Str::limit(strip_tags($campaign->email_body), 50) }}</td>
                                <td>{{ $campaign->phishing_link }}</td>
                                <td>{{ $campaign->created_at->format('M j, Y g:i A') }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('campaigns.show', $campaign->id) }}" class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('campaigns.edit', $campaign->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('campaigns.destroy', $campaign->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this campaign?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No campaigns found. <a href="{{ route('campaigns.create') }}">Create one now!</a></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection