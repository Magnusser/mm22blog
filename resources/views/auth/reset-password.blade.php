@extends('partials.layout')

@section('content')
<div class="card max-w-md mx-auto my-10 bg-base-100 shadow-md border border-base-300">
    <div class="card-body space-y-4">
        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <label class="form-control w-full">
                <span class="label-text font-semibold">Email</span>
                <input type="email" name="email" value="{{ old('email', $request->email) }}" placeholder="you@example.com" class="input input-bordered w-full @error('email') input-error @enderror"/>
                @error('email')
                    <span class="label-text-alt text-error mt-1">{{ $message }}</span>
                @enderror
            </label>
            <label class="form-control w-full">
                <span class="label-text font-semibold">Password</span>
                <input type="password" name="password" placeholder="New password" class="input input-bordered w-full @error('password') input-error @enderror"/>
                @error('password')
                    <span class="label-text-alt text-error mt-1">{{ $message }}</span>
                @enderror
            </label>
            <label class="form-control w-full">
                <span class="label-text font-semibold">Confirm Password</span>
                <input type="password" name="password_confirmation" placeholder="Confirm new password" class="input input-bordered w-full @error('password_confirmation') input-error @enderror"/>
                @error('password_confirmation')
                    <span class="label-text-alt text-error mt-1">{{ $message }}</span>
                @enderror
            </label>
            <div class="flex justify-end mt-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection