@extends('layouts.base')

@section('main')
<section style="margin-left: 40px; margin-right: 40px;"> 
    <h3 class="center-align"> Welcome to Homepage !!!</h3>
    <p> Bosons are the particles responsible for the interaction between fermions. Unlike them, these particles have no problem occupying the same place in space at the same time. They have integer spin, have no mass, and can have an electrical charge.
        Bosons are the particles responsible for the interaction between fermions. Unlike them, these particles have no problem occupying the same place in space at the same time. They have integer spin, have no mass, and can have an electrical charge.
        Bosons are the particles responsible for the interaction between fermions. Unlike them, these particles have no problem occupying the same place in space at the same time. They have integer spin, have no mass, and can have an electrical charge.
    </p>
    <p> Bosons are the particles responsible for the interaction between fermions. Unlike them, these particles have no problem occupying the same place in space at the same time. They have integer spin, have no mass, and can have an electrical charge.
        Bosons are the particles responsible for the interaction between fermions. Unlike them, these particles have no problem occupying the same place in space at the same time. They have integer spin, have no mass, and can have an electrical charge.
        Bosons are the particles responsible for the interaction between fermions. Unlike them, these particles have no problem occupying the same place in space at the same time. They have integer spin, have no mass, and can have an electrical charge.
        Bosons are the particles responsible for the interaction between fermions. Unlike them, these particles have no problem occupying the same place in space at the same time. They have integer spin, have no mass, and can have an electrical charge.
    </p>
    <ul class="collection with-header">
        <li class="collection-header"> 
            Click here
        </li>
        <li>
            <a class="collection-item" href="{{ route('site.index') }}"> Homepage </a>
        </li>
        <li>
            <a class="collection-item" href="{{ route('site.login') }}"> Login </a>
        </li>
        <li>
            <a class="collection-item" href="{{ route('app.admin') }}"> Admin </a>
        </li>
    </ul>
</section>
<br>
@endsection