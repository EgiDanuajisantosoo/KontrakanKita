<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="layout-menu-fixed" data-base-url="{{url('/')}}" data-framework="laravel">
  <head>
    @include('admin.partials.head')
  </head>

  <body>

    <x-layouts.auth.split>
      {{ $slot }}
    </x-layouts.auth.split>

    <!-- Include Scripts -->
    @include('admin.partials.scripts')
    <!-- / Include Scripts -->
  </body>
</html>
