@extends('layouts.base')
@section('main')
<nav>
    <div class="nav-wrapper blue accent-4">
    <a href="#" class="brand-logo">
        <img style="max-width: 10%; max-height: 100%; margin-left: 5px; margin-top: 6px;" src="{{ asset('img/icon.png') }}"> 
    </a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html"> Sobre-nós </a></li>
        <li><a href="badges.html">Contato</a></li>
        <li><a href="collapsible.html">Login</a></li>
    </ul>
    </div>
</nav>

<section style="margin-left: 40px; margin-right: 40px;"> 
    <h3 calss="center-align"> Welcome to Homepage !!!</h3>
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

<footer class="page-footer blue accent-2">
    <div class="container">
    <div class="row">
        <div class="col l6 s12">
        <h5 class="white-text">Thank you :-) </h5>
        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
        </div>
        <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Email</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Github</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Whatsapp</a></li>
        </ul>
        </div>
    </div>
    </div>
    <div class="footer-copyright">
    <div class="container">
    © 2022 Copyright Text
    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
    </div>
</footer>
@endsection