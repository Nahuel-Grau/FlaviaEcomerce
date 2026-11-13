<section class="categories-section">

    <div class="categories-heading">
        <span class="section-eyebrow">EXPLORÁ FLAVIA</span>
        <h2>Encontrá tu estilo</h2>
        <p>Descubrí nuestras categorías y encontrá lo que buscás.</p>
    </div>

    <div class="categories-grid">

        {{-- Mujer --}}
        <a href="{{ route('catalog.women') }}" class="category-card">
            <img
                src="{{ asset('storage/images/mujer.jpg') }}"
                alt="Colección de moda mujer"
                loading="lazy"
            >
            <div class="category-overlay">
                <h3>Mujer</h3>
                <span>DESCUBRIR COLECCIÓN</span>
            </div>
        </a>

        {{-- Hombre --}}
        <a href="{{ route('catalog.men') }}" class="category-card">
            <img
                src="{{ asset('storage/images/hombre.jpg') }}"
                alt="Colección de moda hombre"
                loading="lazy"
            >
            <div class="category-overlay">
                <h3>Hombre</h3>
                <span>DESCUBRIR COLECCIÓN</span>
            </div>
        </a>

        {{-- Accesorios --}}
        <a href="{{ route('catalog.accessories') }}" class="category-card">
            <img
                src="{{ asset('storage/images/accesorio.jpg') }}"
                alt="Colección de accesorios"
                loading="lazy"
            >
            <div class="category-overlay">
                <h3>Accesorios</h3>
                <span>DESCUBRIR COLECCIÓN</span>
            </div>
        </a>

    </div>

</section>