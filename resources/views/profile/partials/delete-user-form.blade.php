<section class="space-y-6">
    <header>
        <h2 class="text-lg font-semibold text-base-content">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-base-content/70">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button 
        class="btn btn-error" 
        onclick="document.getElementById('confirm-user-deletion').showModal()"
    >
        {{ __('Delete Account') }}
    </button>

    <dialog id="confirm-user-deletion" class="modal">
        <div class="modal-box">
            <form method="POST" action="{{ route('profile.destroy') }}" class="space-y-4">
                @csrf
                @method('delete')

                <h3 class="text-lg font-semibold text-base-content">
                    {{ __('Are you sure you want to delete your account?') }}
                </h3>

                <p class="text-sm text-base-content/70">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                </p>

                <input id="password" name="password" type="password" placeholder="{{ __('Password') }}" class="input input-bordered w-full @error('password', 'userDeletion') input-error @enderror"/>

                @error('password', 'userDeletion')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror

                <div class="flex justify-end gap-2 pt-2">
                    <button type="button" class="btn btn-ghost" onclick="document.getElementById('confirm-user-deletion').close()">
                        {{ __('Cancel') }}
                    </button>
                    <button type="submit" class="btn btn-error">
                        {{ __('Delete Account') }}
                    </button>
                </div>
            </form>
        </div>

        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
</section>