@extends('admin.index')

@section('content')
    {{ view('admin/pages/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $user)) }}

    {{ view('admin/pages/account/settings/_profile-details', array('class' => 'mb-5 mb-xl-10', 'info' => $user)) }}

    {{ view('admin/pages/account/settings/_signin-method', array('class' => 'mb-5 mb-xl-10', 'info' => $user)) }}
@endsection
