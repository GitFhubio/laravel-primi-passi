@extends('layouts.master')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*{
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
.wrapper{
  width:100vw;
  height:100vh;
  max-width:100%;
  background-color: #ccc;
}
.header{
  background-color: red;
text-align: center;
}
</style>
<body>
<div class="wrapper">
  <div class="test">
  <h3>testando sass che non va</h3>
  </div>
  <!-- se metto @ prima delle doppie graffe funge da escape per evitare confusione quando uso vue magari? -->
<h1>Ciao {{$name}} , oggi è il {{date('d-m-Y')}}, il tuo primo giorno su laravel</h1>
@section('title','Titolo della pagina')
@section('footer','Piè pagina')
</div>


<?php var_dump($array) ?>

<script>
    var app = @json($array);
     console.log(app);
</script>

</body>
</html>
<!-- count sarebbe length in php -->
@if (count($array) === 1)
  <p>  I have one record! </p>
@elseif (count($array) > 1)
  <h1>I have multiple records!</h1>
@else
  <h4>I don't have any records!</h4>

@endif

@isset($array)
 <!-- $array is defined and is not null... -->
<h1>Ottavio mi ha detto di sprigionare la mia fantasia oggi!!</h1>
@endisset

@empty($array2)

<p>questa scritta esce perché l'array 2 che hai passato è vuoto</p>
<!-- $array2 is "empty"... -->
@endempty

<!-- determina l'ambiente in cui faccio girare l'app -->

<!-- @env('staging')
    // The application is running in "staging"...
@endenv

@env(['staging', 'production'])
    // The application is running in "staging" or "production"...
@endenv -->

<!-- @hasSection('navigation')
    <div class="pull-right">
        @yield('navigation')
    </div>

    <div class="clearfix"></div>
@endif -->
