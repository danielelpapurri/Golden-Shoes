<x-app-layout>
    @section('title', 'Inicio - Golden Shoes')

    <style>
        :root {
            --brand:       #c0392b;
            --brand-dark:  #962d22;
            --brand-light: #fdf1f0;
        }

        /* ════ HERO ════ */
        .gs-hero {
            display: flex;
            align-items: center;
            background: #fff;
            border: 1px solid #ebebeb;
            border-radius: 20px;
            overflow: hidden;
            margin: 2rem 0 3rem;
        }
        .gs-hero__text {
            flex: 1;
            padding: 4rem 3.5rem;
        }
        .gs-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--brand);
            background: var(--brand-light);
            border: 1px solid #f5c6c2;
            padding: 5px 14px;
            border-radius: 100px;
            margin-bottom: 1.5rem;
        }
        .gs-badge::before {
            content: '';
            width: 5px; height: 5px;
            background: var(--brand);
            border-radius: 50%;
        }
        .gs-hero__title {
            font-size: clamp(2.2rem, 4vw, 3.2rem);
            font-weight: 900;
            line-height: 1.05;
            color: #0f0f0f;
            margin-bottom: 1.1rem;
        }
        .gs-hero__title em {
            font-style: normal;
            color: var(--brand);
        }
        .gs-hero__sub {
            font-size: 1rem;
            color: #777;
            line-height: 1.75;
            max-width: 400px;
            margin-bottom: 2.25rem;
        }
        .gs-hero__btns { display: flex; gap: 12px; flex-wrap: wrap; }

        .gs-hero__img {
            flex: 0 0 44%;
            background: #faf7f5;
            align-self: stretch;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            min-height: 420px;
        }
        .gs-hero__img img {
            max-height: 380px;
            width: 100%;
            object-fit: contain;
            transition: transform 0.5s ease;
        }
        .gs-hero__img img:hover { transform: scale(1.04); }

        /* ════ BOTONES ════ */
        .gs-btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--brand);
            color: #fff;
            font-weight: 700;
            font-size: 0.88rem;
            padding: 13px 28px;
            border-radius: 10px;
            border: 2px solid var(--brand);
            text-decoration: none;
            transition: background 0.2s, transform 0.2s;
        }
        .gs-btn-primary:hover {
            background: var(--brand-dark);
            border-color: var(--brand-dark);
            color: #fff;
            transform: translateY(-2px);
        }
        .gs-btn-outline {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: transparent;
            color: #333;
            font-weight: 700;
            font-size: 0.88rem;
            padding: 13px 28px;
            border-radius: 10px;
            border: 2px solid #ddd;
            text-decoration: none;
            transition: border-color 0.2s, transform 0.2s;
        }
        .gs-btn-outline:hover {
            border-color: #aaa;
            color: #111;
            transform: translateY(-2px);
        }

        /* ════ STATS ════ */
        .gs-stats {
            display: flex;
            gap: 2.5rem;
            margin-top: 2.5rem;
            padding-top: 2rem;
            border-top: 1px solid #f0f0f0;
        }
        .gs-stat__num {
            font-size: 1.6rem;
            font-weight: 900;
            color: #111;
            line-height: 1;
        }
        .gs-stat__num span { color: var(--brand); }
        .gs-stat__label {
            font-size: 0.75rem;
            color: #999;
            margin-top: 4px;
        }

        /* ════ SECCIÓN ════ */
        .gs-section-label {
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--brand);
            margin-bottom: 6px;
        }
        .gs-section-title {
            font-size: 1.75rem;
            font-weight: 900;
            color: #111;
            margin-bottom: 1.75rem;
        }

        /* ════ CATEGORÍAS ════ */
        .gs-cat-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.25rem;
            margin-bottom: 5rem;
        }
        .gs-cat-card {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            height: 340px;
            display: block;
            text-decoration: none;
            background: #111;
        }
        .gs-cat-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.88;
            transition: transform 0.45s ease, opacity 0.35s;
        }
        .gs-cat-card:hover img {
            transform: scale(1.07);
            opacity: 0.7;
        }
        .gs-cat-card__body {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            padding: 1.75rem 1.5rem 1.5rem;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
        }
        .gs-cat-card__label {
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: rgba(255,255,255,0.55);
            margin-bottom: 5px;
        }
        .gs-cat-card__name {
            font-size: 1.4rem;
            font-weight: 900;
            color: #fff;
            margin: 0 0 12px;
        }
        .gs-cat-card__cta {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 0.78rem;
            font-weight: 700;
            color: #fff;
            background: var(--brand);
            padding: 7px 18px;
            border-radius: 100px;
            transform: translateY(10px);
            opacity: 0;
            transition: opacity 0.3s, transform 0.3s;
        }
        .gs-cat-card:hover .gs-cat-card__cta {
            opacity: 1;
            transform: translateY(0);
        }

        /* ════ BANNER PROMO ════ */
        .gs-promo {
            background: #0f0f0f;
            border-radius: 20px;
            padding: 3.5rem 3rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
            margin-bottom: 5rem;
        }
        .gs-promo__title {
            font-size: clamp(1.4rem, 3vw, 2rem);
            font-weight: 900;
            color: #fff;
            margin-bottom: 0.5rem;
        }
        .gs-promo__title em {
            font-style: normal;
            color: var(--brand);
        }
        .gs-promo__sub {
            font-size: 0.9rem;
            color: #888;
        }

        /* ════ RESPONSIVE ════ */
        @media (max-width: 768px) {
            .gs-hero { flex-direction: column-reverse; }
            .gs-hero__text { padding: 2rem 1.5rem; }
            .gs-hero__img { min-height: 260px; width: 100%; }
            .gs-stats { gap: 1.5rem; }
            .gs-cat-grid { grid-template-columns: 1fr; }
            .gs-promo { flex-direction: column; text-align: center; }
        }
    </style>

    <div class="container">

        {{-- ════ HERO ════ --}}
        <section class="gs-hero">
            <div class="gs-hero__text">
                <div class="gs-badge">Nueva Colección 2027</div>
                <h1 class="gs-hero__title">
                    Estilo, Comodidad<br>
                    <em>y Actitud</em>
                </h1>
                <p class="gs-hero__sub">
                    Zapatos diseñados para rendimiento, estilo y presencia en cada paso.
                    Encuentra el par que define quién eres.
                </p>
                <div class="gs-hero__btns">
                    <a href="{{ route('deportivos') }}" class="gs-btn-primary">
                        Ver Colección &rarr;
                    </a>
                    <a href="{{ route('zapatos') }}" class="gs-btn-outline">
                        Gestionar Productos
                    </a>
                </div>

                <div class="gs-stats">
                    <div>
                        <div class="gs-stat__num">200<span>+</span></div>
                        <div class="gs-stat__label">Modelos disponibles</div>
                    </div>
                    <div>
                        <div class="gs-stat__num">3<span>k</span></div>
                        <div class="gs-stat__label">Clientes satisfechos</div>
                    </div>
                    <div>
                        <div class="gs-stat__num">5<span>★</span></div>
                        <div class="gs-stat__label">Calificación promedio</div>
                    </div>
                </div>
            </div>
            <div class="gs-hero__img">
                <img src="{{ asset('fotos/muchaho_intro.png') }}" alt="Golden Shoes — Nueva Colección">
            </div>
        </section>

        {{-- ════ CATEGORÍAS ════ --}}
        <p class="gs-section-label">Explorar</p>
        <h2 class="gs-section-title">Categorías Destacadas</h2>

        <div class="gs-cat-grid">

            <a href="{{ route('formales') }}" class="gs-cat-card">
                <img src="{{ asset('fotos/formales.png') }}" alt="Zapatos Formales">
                <div class="gs-cat-card__body">
                    <p class="gs-cat-card__label">Colección</p>
                    <h3 class="gs-cat-card__name">Formales</h3>
                    <span class="gs-cat-card__cta">Explorar &rarr;</span>
                </div>
            </a>

            <a href="{{ route('deportivos') }}" class="gs-cat-card">
                <img src="{{ asset('fotos/deportivos.png') }}" alt="Zapatos Deportivos">
                <div class="gs-cat-card__body">
                    <p class="gs-cat-card__label">Colección</p>
                    <h3 class="gs-cat-card__name">Deportivos</h3>
                    <span class="gs-cat-card__cta">Explorar &rarr;</span>
                </div>
            </a>

            <a href="{{ route('accis') }}" class="gs-cat-card">
                <img src="{{ asset('fotos/urbanos.png') }}" alt="Zapatos Urbanos">
                <div class="gs-cat-card__body">
                    <p class="gs-cat-card__label">Colección</p>
                    <h3 class="gs-cat-card__name">Urbanos</h3>
                    <span class="gs-cat-card__cta">Explorar &rarr;</span>
                </div>
            </a>

        </div>

        {{-- ════ BANNER PROMO ════ --}}
        <div class="gs-promo">
            <div>
                <h3 class="gs-promo__title">Envío gratis en tu <em>primer pedido</em></h3>
                <p class="gs-promo__sub">Regístrate hoy y recibe tu pedido sin costo de envío.</p>
            </div>
            <a href="{{ route('register') }}" class="gs-btn-primary" style="white-space: nowrap;">
                Crear cuenta &rarr;
            </a>
        </div>

    </div>
</x-app-layout>