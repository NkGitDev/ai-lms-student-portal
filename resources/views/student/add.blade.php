@extends('layouts.app')

@section('content')
    <livewire:student-registration :course="$course" />
@endsection 



{{-- Purana Code Backup (Blade Comment):

@extends('layouts/app')

@section('content')
        @livewire('student-registration', ['course' => $course])
@endsection
--}}
