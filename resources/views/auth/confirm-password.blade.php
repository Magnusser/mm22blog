@extends('partials.layout')

@section('content')
    <div class="card bg-base-100 w-full max-w-md mx-auto my-10 shadow-lg border border-base-300">
        <div class="card-body space-y-4">
            <p class="text-sm text-base-content">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </p>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Password</span>
                    </div>
                    <input type="password" name="password" placeholder="Password" class="input input-bordered w-full @error('password') input-error @enderror">
                    @error('password')
                        <div class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </div>
                    @enderror
                </label>

                <div class="flex justify-end mt-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Confirm') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection