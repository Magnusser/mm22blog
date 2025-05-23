<section>
    <header>
        <h2 class="text-lg font-semibold text-base-content">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-base-content/70">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="POST" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('PUT')
        <div class="form-control w-full">
            <label for="update_password_current_password" class="label">
                <span class="label-text">{{ __('Current Password') }}</span>
            </label>
            <input id="update_password_current_password" name="current_password" type="password" class="input input-bordered w-full @error('current_password', 'updatePassword') input-error @enderror">
            @error('current_password', 'updatePassword')
                <span class="label-text-alt text-error mt-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-control w-full">
            <label for="update_password_password" class="label">
                <span class="label-text">{{ __('New Password') }}</span>
            </label>
            <input id="update_password_password" name="password" type="password" class="input input-bordered w-full @error('password', 'updatePassword') input-error @enderror">
            @error('password', 'updatePassword')
                <span class="label-text-alt text-error mt-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-control w-full">
            <label for="update_password_password_confirmation" class="label">
                <span class="label-text">{{ __('Confirm Password') }}</span>
            </label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="input input-bordered w-full @error('password_confirmation', 'updatePassword') input-error @enderror">
            @error('password_confirmation', 'updatePassword')
                <span class="label-text-alt text-error mt-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <p class="text-sm text-success">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>

