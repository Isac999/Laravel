<h3> Ola, sou o(a) {{ $nome }}!</h3>
<h4> E gostaria de dizer: {{ $comentario }}</h4>
<br/>

@if ($nome == "Isac" || $nome == "isac")
    <h3> Esse usuário é brabissimo :0 </h3>
@else 
    <h3> Apenas um usuário comum :-) </h3>
@endif

{{--
@dd($nome)
@dd($comentario)
--}}