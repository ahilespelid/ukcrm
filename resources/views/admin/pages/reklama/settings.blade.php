@extends('admin.index')

@section('content')
    {{ view('admin/pages/reklama/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $items)) }}

    {{-- view('admin/pages/reklama/_profile-details', array('class' => 'mb-5 mb-xl-10', 'info' => $items)) --}}

    {{-- view('admin/pages/reklama/_signin-method', array('class' => 'mb-5 mb-xl-10', 'info' => $items)) --}}
@endsection
