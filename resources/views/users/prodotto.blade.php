@extends('layouts.layout')

@php
    $cards = config('products');
    $prodotto = $cards[$id];
@endphp

@section('titolo')
    {{$prodotto['titolo']}}
@endsection

@section('mainContent')
    <div class="container-main">
            <section>
                <div class="cards">
                    <div class="card-product">
                        <img src="{{$prodotto['src']}}" alt="">
                        <div class="text">
                            <h3>{{$prodotto['titolo']}}</h3>
                            <p><b>Tipo:</b> {{$prodotto['tipo']}}</p>
                            <p><b>Cottura:</b> {{$prodotto['cottura']}}</p>
                            <p><b>Peso:</b> {{$prodotto['peso']}}</p>
                            <p><b>Descrizione:</b> {!! $prodotto['descrizione'] !!}</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
