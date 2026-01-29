@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Create New Campaign</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('campaigns.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" value="{{ old('subject') }}" required>
                            @error('subject')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email_body" class="form-label">Email Body</label>
                            <textarea name="email_body" id="email_body" class="form-control" rows="8" required>{{ old('email_body') }}</textarea>
                            @error('email_body')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phishing_link" class="form-label">Phishing Link</label>
                            <input type="text" name="phishing_link" id="phishing_link" class="form-control" value="{{ old('phishing_link') }}" required>
                            @error('phishing_link')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <a href="{{ route('campaigns.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create Campaign</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
