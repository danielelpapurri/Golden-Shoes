<x-app-layout>
    @section('title', 'Inicio - Golden Shoes')

    <style>
        :root {
            --brand:       #c0392b;
            --brand-dark:  #962d22;
            --brand-light: #f9eceb;
            --radius-card: 16px;
            --radius-btn:  10px;
        }

        /* ── Hero ─────────────────────────────────── */
        .gs-hero {
            display: flex;
            align-items: center;
            gap: 2.5rem;
            background: #fff;
            border-radius: var(--radius-card);
            border: 1px solid #eee;
            overflow: hidden;
            margin-top: 2.5rem;
            margin-bottom: 3.5rem;
        }
        .gs-hero__text {
            flex: 1;
            padding: 3.5rem 3rem;
        }
        .gs-hero__eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--brand);
            background: var(--brand-light);
            padding: 6px 14px;
            border-radius: 100px;
            margin-bottom: 1.25rem;
        }
        .gs-hero__eyebrow::before {
            content: '';
            width: 6px; height: 6px;
            background: var(--brand);
            border-radius: 50%;
        }
        .gs-hero__title {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 800;
            line-height: 1.1;
            color: #111;
            margin-bottom: 1rem;
        }
        .gs-hero__title span { color: var(--brand); }
        .gs-hero__subtitle {
            font-size: 1rem;
            color: #666;
            line-height: 1.7;
            max-width: 420px;
            margin-bottom: 2rem;
        }
        .gs-hero__actions { display: flex; gap: 12px; flex-wrap: wrap; }
        .gs-hero__img {
            flex: 0 0 42%;
            align-self: stretch;
            overflow: hidden;
        }
        .gs-hero__img img {
            width: 100%;
            height: 100%;
            min-height: 380px;
            object-fit: contain;
            background: #f8f4f2;
            padding: 1rem;
        }

        /* ── Botones ──────────────────────────────── */
        .btn-primary-brand {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--brand);
            color: #fff;
            font-weight: 700;
            font-size: 0.9rem;
            padding: 13px 26px;
            border-radius: var(--radius-btn);
            border: 2px solid var(--brand);
            text-decoration: none;
            transition: background 0.25s, transform 0.2s;
        }
        .btn-primary-brand:hover {
            background: var(--brand-dark);
            border-color: var(--brand-dark);
            color: #fff;
            transform: translateY(-2px);
        }
        .btn-secondary-brand {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: transparent;
            color: #111;
            font-weight: 700;
            font-size: 0.9rem;
            padding: 13px 26px;
            border-radius: var(--radius-btn);
            border: 2px solid #ddd;
            text-decoration: none;
            transition: border-color 0.2s, transform 0.2s;
        }
        .btn-secondary-brand:hover {
            border-color: #999;
            color: #111;
            transform: translateY(-2px);
        }

        /* ── Encabezado de sección ────────────────── */
        .gs-section-head {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 1.75rem;
        }
        .gs-section-head__line {
            flex: 1;
            height: 1px;
            background: #e5e5e5;
        }
        .gs-section-head__label {
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #999;
            white-space: nowrap;
        }
        .gs-section-title {
            font-size: 1.6rem;
            font-weight: 800;
            color: #111;
            margin-bottom: 0;
        }

        /* ── Tarjetas de categoría ────────────────── */
        .gs-cat-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.25rem;
            margin-bottom: 4rem;
        }
        .gs-cat-card {
            position: relative;
            border-radius: var(--radius-card);
            overflow: hidden;
            aspect-ratio: 3 / 4;
            cursor: pointer;
            text-decoration: none;
            display: block;
        }
        .gs-cat-card img {
            width: 100%; height: 100%;
            object-fit: cover;
            transition: transform 0.45s ease;
        }
        .gs-cat-card:hover img { transform: scale(1.06); }
        .gs-cat-card__overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.72) 0%, rgba(0,0,0,0.15) 55%, transparent 100%);
            transition: opacity 0.3s;
        }
        .gs-cat-card:hover .gs-cat-card__overlay { opacity: 0.9; }
        .gs-cat-card__body {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            padding: 1.5rem 1.25rem 1.25rem;
        }
        .gs-cat-card__tag {
            display: inline-block;
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: rgba(255,255,255,0.7);
            margin-bottom: 6px;
        }
        .gs-cat-card__name {
            font-size: 1.3rem;
            font-weight: 800;
            color: #fff;
            margin: 0 0 10px;
        }
        .gs-cat-card__cta {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 0.8rem;
            font-weight: 700;
            color: #fff;
            background: var(--brand);
            padding: 6px 16px;
            border-radius: 100px;
            opacity: 0;
            transform: translateY(6px);
            transition: opacity 0.3s, transform 0.3s;
        }
        .gs-cat-card:hover .gs-cat-card__cta {
            opacity: 1;
            transform: translateY(0);
        }

        /* ── Responsive ───────────────────────────── */
        @media (max-width: 768px) {
            .gs-hero { flex-direction: column-reverse; }
            .gs-hero__text { padding: 2rem 1.5rem; }
            .gs-hero__img img { min-height: 240px; }
            .gs-cat-grid { grid-template-columns: 1fr; }
        }
    </style>

    <div class="container">

        {{-- ════════ HERO ════════ --}}
        <section class="gs-hero">
            <div class="gs-hero__text">
                <div class="gs-hero__eyebrow">Nueva Colección 2027</div>
                <h1 class="gs-hero__title">
                    Estilo, Comodidad<br>
                    <span>y Actitud</span>
                </h1>
                <p class="gs-hero__subtitle">
                    Zapatos diseñados para rendimiento, estilo y presencia en cada paso.
                    Encuentra el par que define quién eres.
                </p>
                <div class="gs-hero__actions">
                    <a href="{{ route('deportivos') }}" class="btn-primary-brand">
                        Ver Colección &rarr;
                    </a>
                    <a href="{{ route('zapatos') }}" class="btn-secondary-brand">
                        Gestionar Productos
                    </a>
                </div>
            </div>
            <div class="gs-hero__img">
                <img src="{{ asset('fotos/muchaho_intro.png') }}" alt="Golden Shoes — Nueva Colección">
            </div>
        </section>

        {{-- ════════ CATEGORÍAS ════════ --}}
        <div class="gs-section-head">
            <span class="gs-section-head__label">Explorar</span>
            <div class="gs-section-head__line"></div>
        </div>
        <h2 class="gs-section-title mb-4">Categorías Destacadas</h2>

        <div class="gs-cat-grid">

            <a href="{{ route('formales') }}" class="gs-cat-card">
                <img src="{{ asset('fotos/formales.png') }}" alt="Zapatos Formales">
                <div class="gs-cat-card__overlay"></div>
                <div class="gs-cat-card__body">
                    <span class="gs-cat-card__tag">Colección</span>
                    <h3 class="gs-cat-card__name">Formales</h3>
                    <span class="gs-cat-card__cta">Explorar &rarr;</span>
                </div>
            </a>

            <a href="{{ route('deportivos') }}" class="gs-cat-card">
                <img src="{{ asset('fotos/deportivos.png') }}" alt="Zapatos Deportivos">
                <div class="gs-cat-card__overlay"></div>
                <div class="gs-cat-card__body">
                    <span class="gs-cat-card__tag">Colección</span>
                    <h3 class="gs-cat-card__name">Deportivos</h3>
                    <span class="gs-cat-card__cta">Explorar &rarr;</span>
                </div>
            </a>

            <a class="gs-cat-card" href="{{ route('accis') }}">
                <img src="{{ asset('fotos/urbanos.png') }}" alt="Zapatos Urbanos">
                <div class="gs-cat-card__overlay"></div>
                <div class="gs-cat-card__body">
                    <span class="gs-cat-card__tag">Colección</span>
                    <h3 class="gs-cat-card__name">Urbanos</h3>
                    <span class="gs-cat-card__cta">Explorar &rarr;</span>
                </div>
            </a>

        </div>
    </div>
</x-app-layout>