@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Create Campaign</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('campaigns.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control" value="{{ old('subject') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Body</label>
                            <textarea name="email_body" class="form-control" rows="6" required>{{ old('email_body') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Landing Link</label>
                            <input type="text" name="phishing_link" class="form-control" value="{{ old('phishing_link') }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Campaigns</div>
                <div class="card-body">
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
                                        <td>{{ $campaign->created_at }}</td>
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
    </div>
</div>
@endsection