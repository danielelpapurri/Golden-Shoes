<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold Shoes | Estilo Urbano</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <header class="main-header">
        <div class="logo-container">
          <img src="{{ asset('fotos/logo_1.png') }}" alt="Gold Shoes colección" width="194px">
        </div>
        <nav class="menu">
            <a href="{{ route('inicio') }}">Inicio</a>
            <a href="{{ route('menu') }}">Tienda</a>
            <a href="{{ route('nosotros') }}">Nosotros</a>
            <a href="#">Sucursales</a>
            <a href="{{ route('contacto') }}">Contacto</a>
        </nav>
    </header>

    <section class="bienvenida">
        <div class="container">
            <h2>Bienvenidos</h2>
            <p> En <strong>Gold Shoes</strong> cada par cuenta una historia. Diseños modernos,<br>
                cómodos y con actitud para acompañarte en cada paso de tu día.</p>
        </div>
    </section>

    <section class="productos">
        <div class="container">
            <h2>Nuestra Colección</h2>
            <div class="productos-grid">
                <div class="producto">
                    <div class="img-wrapper"><img src="{{ asset('fotos/nocta.jpg') }}" alt="Zapatillas Urbanas" width="150 px"></div>
                    <h3>AFI NOCTA</h3>
                    <p>Cómodas y modernas</p>
                    <span class="precio">$180.000 + ENVIO GRATIS ✈️</span>
                </div>
                <div class="producto">
                    <div class="img-wrapper"><img src="{{ asset('fotos/zapato1.jpg') }}" alt="Zapatos Formales"></div>
                    <h3>Formal Black</h3>
                    <p>Elegancia para eventos</p>
                    <span class="precio">$1,299</span>
                </div>
                <div class="producto">
                    <div class="img-wrapper"><img src="{{ asset('fotos/tacon1.jpg') }}" alt="Tacones"></div>
                    <h3>Night Style</h3>
                    <p>Estilo y personalidad</p>
                    <span class="precio">$799</span>
                </div>
                <div class="producto">
                    <div class="img-wrapper"><img src="{{ asset('fotos/zapatilla2.jpg') }}" alt="Sport"></div>
                    <h3>Sport Max</h3>
                    <p>Rendimiento puro</p>
                    <span class="precio">$950</span>
                </div>
                <div class="producto">
                    <div class="img-wrapper"><img src="{{ asset('fotos/zapatilla3.jpg') }}" alt="Casual"></div>
                    <h3>Casual Grey</h3>
                    <p>Uso diario</p>
                    <span class="precio">$850</span>
                </div>
                <div class="producto">
                    <div class="img-wrapper"><img src="{{ asset('fotos/zapato2.jpg') }}" alt="Oxford"></div>
                    <h3>Classic Oxford</h3>
                    <p>Tradición y clase</p>
                    <span class="precio">$1,100</span>
                </div>
            </div>
        </div>
    </section>

    <section class="promo">
        <div class="container">
            <h2>Nueva Colección 2026</h2>
            <p>Descubre lo último en tendencia urbana</p>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2026 Gold Shoes <br> Ing. Daniel Cabezas & Ing. Helder Gomez</p>
        <img src="{{ asset('fotos/inge.jpg') }}" alt="Gold Shoes colección" width="194px">
    </footer>

</body>
</html>