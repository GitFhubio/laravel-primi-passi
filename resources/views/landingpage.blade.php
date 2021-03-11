@extends('layouts.app')

@section('content')

<div style="width:100%;display:flex;justify-content:center;" class="container">

  <h1 style="color:red;">sono in landingpage</h1>
</div>
{{{-- <pre>{{$data}}</pre> --}}}
{{{-- <pre>{{dd($data)}}</pre> --}}}
@foreach ($data as $key=>$value)
<p> {{$key}} : {{$value}} </p>
 @endforeach

 {{request()->par}}

@endsection
