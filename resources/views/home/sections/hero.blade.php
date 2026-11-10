
<section class="hero">

    @if($banner)

        <img
            src="{{ asset('storage/' . $banner->image_path) }}"
            alt="{{ $banner->title }}"
            class="hero-image"
        >

        <div class="hero-content">

            <h1>{{ $banner->title }}</h1>

            @if($banner->subtitle)
                <p>{{ $banner->subtitle }}</p>
            @endif

            @if($banner->link_url && $banner->link_url !== '0')
                <a href="{{ $banner->link_url }}" class="hero-button">
                    DESCUBRIR COLECCIÓN
                </a>
            @endif

        </div>

    @else

        <div class="hero-fallback">
            <div class="hero-content">

                <h1>Vestí tu estilo.</h1>

                <p>
                    Descubrí nuestra colección y encontrá
                    prendas que reflejen tu personalidad.
                </p>

            </div>
        </div>

    @endif

</section>
