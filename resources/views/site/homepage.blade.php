@extends('layouts.base')
@section('main')
    <h3> Welcome to Homepage !!!</h3>
    <ul>
        <li>
            <a href="{{ route('site.index') }}"> Homepage </a>
        </li>
        <li>
            <a href="{{ route('site.login') }}"> Login </a>
        </li>
        <li>
            <a href="{{ route('app.admin') }}"> Admin </a>
        </li>
    </ul>
@endsection