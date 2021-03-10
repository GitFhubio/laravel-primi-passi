<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
  <!-- se metto @ prima delle doppie graffe funge da escape per evitare confusione quando uso vue magari? -->
<h1>Ciao {{$name}} , oggi è il {{date('d-m-Y')}}, il tuo primo giorno su laravel</h1>
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
