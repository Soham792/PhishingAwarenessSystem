@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Campaign Details</h4>
                    <div>
                        <a href="{{ route('campaigns.edit', $campaign->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('campaigns.destroy', $campaign->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this campaign?')">Delete</button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-3"><strong>Subject:</strong></div>
                        <div class="col-sm-9">{{ $campaign->subject }}</div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3"><strong>Email Body:</strong></div>
                        <div class="col-sm-9">
                            <div class="border p-3 bg-light">
                                {!! nl2br(e($campaign->email_body)) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3"><strong>Phishing Link:</strong></div>
                        <div class="col-sm-9">
                            <a href="{{ $campaign->phishing_link }}" target="_blank">{{ $campaign->phishing_link }}</a>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3"><strong>Created:</strong></div>
                        <div class="col-sm-9">{{ $campaign->created_at->format('M j, Y g:i A') }}</div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3"><strong>Last Updated:</strong></div>
                        <div class="col-sm-9">{{ $campaign->updated_at->format('M j, Y g:i A') }}</div>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('campaigns.index') }}" class="btn btn-secondary">Back to Campaigns</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
