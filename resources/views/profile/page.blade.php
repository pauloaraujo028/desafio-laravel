@extends('dashboard')
@section('title', 'Profile')

@section('content')
    <div class="flex w-full mt-4 justify-center items-center">
        @livewire('profile-manager')
    </div>

@endsection
