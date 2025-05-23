@extends('partials.layout')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        <div class="mb-6">
            <h2 class="text-2xl font-semibold text-base-content">
                {{ __('Profile') }}
            </h2>
        </div>
        <div class="card bg-base-100 shadow-md border border-base-300">
            <div class="card-body p-6 sm:p-8">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
        </div>
        <div class="card bg-base-100 shadow-md border border-base-300">
            <div class="card-body p-6 sm:p-8">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>
        <div class="card bg-base-100 shadow-md border border-base-300">
            <div class="card-body p-6 sm:p-8">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
