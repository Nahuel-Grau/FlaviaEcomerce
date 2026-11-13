@extends('layouts.app')

@section('title', $title . ' | FLAVIA')

@section('content')

    <section class="catalog-page">

        <h1>{{ $title }}</h1>

        <p>
            Descubrí nuestra selección de prendas.
        </p>

        {{-- Aquí mostraremos los productos de esta sección. --}}

    </section>

@endsection