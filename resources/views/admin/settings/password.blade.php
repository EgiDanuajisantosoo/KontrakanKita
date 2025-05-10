<x-layouts.app :title="__('Update password')">
    {{-- @include('admin.partials.settings-header') --}}
    @section('title', 'Update password')

<section>
    @include('admin.partials.settings-heading')

    <x-settings.layout :subheading="__('Ensure your account is using a long, random password to stay secure')">
        <form action="" method="POST" class="w-50">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="current_password" class="form-label">{{ __('Current password') }}</label>
                <input type="password" id="current_password" name="current_password" class="form-control" required autocomplete="current-password" />
                @error('current_password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">{{ __('New password') }}</label>
                <input type="password" id="password" name="password" class="form-control" required autocomplete="new-password" />
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required autocomplete="new-password" />
                @error('password_confirmation')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary w-100">{{ __('Save') }}</button>
            </div>
        </form>
    </x-settings.layout>
</section>

</x-layouts.app>

