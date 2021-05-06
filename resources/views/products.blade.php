@extends('layouts.app')

@section('title', 'PRODUCTS')
     
 
@section('content')

<div class="card-container">
    @foreach ($paste as $pasta)
    <div class="cards">
        <img src="{{$pasta['src']}}" alt="Pasta Molisana">
        <div class="layover">
            {{ $pasta['titolo']}}
        </div>
    </div>

        @endforeach
</div>
   

@endsection