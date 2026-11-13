
@extends('layouts.app')

@section('title', 'Inicio | FLAVIA')

@section('content')

    {{-- Hero principal --}}
    @include('home.sections.hero')

    {{-- Presentación de la tienda --}}
    <section class="home-intro">

        <div class="home-intro-content">

            <span class="section-eyebrow">BIENVENIDOS A FLAVIA</span>

            <h2>Tu estilo, tu esencia.</h2>

            <p>
                Descubrí prendas pensadas para acompañarte
                y expresar tu personalidad en cada momento.
            </p>

            <a href="{{ route('catalog.women') }}" class="intro-button">
                DESCUBRIR COLECCIÓN
            </a>

        </div>

    </section>

    @include('home.sections.categories')

@endsection
