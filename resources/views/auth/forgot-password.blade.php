@extends('partials.layout')

@section('content')
<div class="card bg-base-100 w-full max-w-md shadow-md mx-auto my-12 border border-base-300">
    <div class="card-body">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text font-semibold">Email</span>
                </div>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="input input-bordered w-full @error('email') input-error @enderror"/>
                <div class="label">
                    @error('email')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
                </div>
            </label>

            <div class="flex justify-end mt-6">
                <input type="submit" class="btn btn-primary btn-sm" value="{{ __('Send Password Reset Link') }}">
            </div>
        </form>
    </div>
</div>
@endsection