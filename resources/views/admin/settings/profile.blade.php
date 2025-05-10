<x-layouts.app>
    @section('title', 'Profile')

    <section>
        @include('admin.partials.settings-heading')

        <x-settings.layout :subheading="__('Update your name and email address')">
            <form action="" method="POST" class="mb-6 w-50">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input type="text" id="name" name="name"profile.destroy class="form-control" placeholder="John Doe" value="{{ old('name', auth()->user()->name) }}" required autofocus autocomplete="name">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <div class="input-group">
                        <input type="email" id="email" name="email" class="form-control" placeholder="email@example.com" value="{{ old('email', auth()->user()->email) }}" required autocomplete="email">
                        <span class="input-group-text">@example.com</span>
                    </div>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !auth()->user()->hasVerifiedEmail())
                        <div class="mt-3">
                            <p class="text-warning">
                                {{ __('Your email address is unverified.') }}
                                <a href="{{ route('verification.resend') }}" class="text-info">{{ __('Click here to re-send the verification email.') }}</a>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 text-success">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
                    @if (session('status') === 'profile-updated')
                        <p class="text-success me-3">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>

            <form action="" method="POST" class="mt-4">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
            </form>
        </x-settings.layout>
    </section>

</x-layouts.app>

