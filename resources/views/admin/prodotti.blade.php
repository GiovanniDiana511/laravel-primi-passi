@extends('layouts.admin')

@php
    $cards = config('products');
@endphp

@section('titoloAdmin')
    Prodotti
@endsection

@section('mainAdmin')
    <table>
        <thead>
            <tr>
                <th>Nome Prodotto</th>
                <th>Descrizione</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cards as $products)
                <tr>
                    <td>{{$products['titolo']}}</td>
                    <td>{!! $products['descrizione'] !!}</td>
                    <td>{{$products['tipo']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
