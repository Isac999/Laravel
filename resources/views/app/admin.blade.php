<h3> Admin user acess !!! </h3>
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
    <li>
        <a href="{{ route('app.sair') }}"> Sair </a>
    </li>
</ul>

{{-- Comentários blade --}}
@php 
    echo "Rodando php pelo blade";
@endphp