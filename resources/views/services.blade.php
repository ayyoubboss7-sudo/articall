@extends('layouts.app')

@section('title', 'Services | ARTI CALL')

@section('content')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@75..125,400..900&display=swap');

        .services-page {
            --svc-red: #D7101F;
            --svc-red-dark: #a80b17;
            --svc-black: #050505;
            --svc-white: #ffffff;
            --svc-grey: #f4f4f4;
            --svc-line: #dedede;
            --svc-text: #171717;
            --svc-muted: #686868;

            font-family: 'Archivo', Arial, sans-serif;
            color: var(--svc-text);
            background: var(--svc-white);
            overflow: hidden;
        }

        .services-page *,
        .services-page *::before,
        .services-page *::after {
            box-sizing: border-box;
        }

        .services-page a {
            color: inherit;
        }

        .svc-container {
            width: min(1160px, calc(100% - 40px));
            margin: 0 auto;
        }

        .svc-section {
            padding: 100px 0;
        }

        .svc-kicker {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--svc-red);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: .16em;
            text-transform: uppercase;
            margin-bottom: 18px;
        }

        .svc-kicker::before {
            content: "";
            width: 28px;
            height: 3px;
            background: var(--svc-red);
            display: inline-block;
        }

        .svc-heading {
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 70px;
            align-items: end;
            margin-bottom: 52px;
        }

        .svc-heading h2 {
            margin: 0;
            font-size: clamp(2rem, 4vw, 3.5rem);
            line-height: 1.02;
            letter-spacing: -.04em;
            font-weight: 850;
        }

        .svc-heading p {
            margin: 0;
            color: var(--svc-muted);
            font-size: 17px;
            line-height: 1.7;
        }

        /* HERO */

        .svc-hero {
            background:
                radial-gradient(circle at 78% 20%, rgba(215, 16, 31, .18), transparent 27%),
                var(--svc-black);
            color: white;
            padding: 105px 0 95px;
            position: relative;
        }

        .svc-hero::after {
            content: "";
            position: absolute;
            right: -120px;
            bottom: -180px;
            width: 420px;
            height: 420px;
            border: 1px solid rgba(255, 255, 255, .12);
            border-radius: 50%;
            pointer-events: none;
        }

        .svc-hero-grid {
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            gap: 80px;
            align-items: center;
        }

        .svc-hero-copy {
            position: relative;
            z-index: 2;
        }

        .svc-hero-label {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: #fff;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: .18em;
            margin-bottom: 24px;
        }

        .svc-hero-label span {
            width: 30px;
            height: 3px;
            background: var(--svc-red);
        }

        .svc-hero h1 {
            margin: 0 0 25px;
            font-size: clamp(2.8rem, 6vw, 5.4rem);
            line-height: .96;
            letter-spacing: -.055em;
            font-weight: 850;
        }

        .svc-hero h1 em {
            color: var(--svc-red);
            font-style: normal;
        }

        .svc-hero-text {
            max-width: 650px;
            color: #d3d3d3;
            font-size: 18px;
            line-height: 1.75;
            margin-bottom: 35px;
        }

        .svc-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .svc-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 50px;
            padding: 0 24px;
            border: 2px solid var(--svc-red);
            text-decoration: none;
            font-weight: 800;
            font-size: 14px;
            transition: .25s ease;
        }

        .svc-btn-red {
            background: var(--svc-red);
            color: white !important;
        }

        .svc-btn-red:hover {
            background: var(--svc-red-dark);
            border-color: var(--svc-red-dark);
            transform: translateY(-2px);
        }

        .svc-btn-outline {
            border-color: rgba(255, 255, 255, .45);
            color: white !important;
        }

        .svc-btn-outline:hover {
            background: white;
            color: black !important;
            border-color: white;
        }

        /* HERO VISUAL */

        .svc-visual {
            min-height: 470px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .svc-visual-ring {
            position: absolute;
            width: 390px;
            height: 390px;
            border: 1px solid rgba(255, 255, 255, .13);
            border-radius: 50%;
        }

        .svc-visual-ring::before {
            content: "";
            position: absolute;
            inset: 35px;
            border: 1px solid rgba(215, 16, 31, .35);
            border-radius: 50%;
        }

        .svc-main-card {
            width: min(390px, 100%);
            background: white;
            color: black;
            padding: 30px;
            position: relative;
            z-index: 2;
            box-shadow: 0 30px 80px rgba(0, 0, 0, .35);
        }

        .svc-main-card-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            margin-bottom: 22px;
            border-bottom: 1px solid #ddd;
        }

        .svc-main-card-title {
            font-size: 13px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .12em;
        }

        .svc-status {
            width: 10px;
            height: 10px;
            background: var(--svc-red);
            border-radius: 50%;
        }

        .svc-main-card h3 {
            margin: 0 0 10px;
            font-size: 27px;
            line-height: 1.05;
            letter-spacing: -.03em;
        }

        .svc-main-card p {
            margin: 0 0 25px;
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }

        .svc-mini-list {
            display: grid;
            gap: 9px;
        }

        .svc-mini-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 11px 12px;
            background: #f5f5f5;
            font-size: 13px;
            font-weight: 700;
        }

        .svc-mini-item i {
            width: 8px;
            height: 8px;
            background: var(--svc-red);
            display: block;
        }

        .svc-floating {
            position: absolute;
            z-index: 3;
            background: var(--svc-red);
            color: white;
            padding: 20px 23px;
            right: -15px;
            bottom: 45px;
            width: 170px;
        }

        .svc-floating strong {
            display: block;
            font-size: 24px;
            line-height: 1;
            margin-bottom: 7px;
        }

        .svc-floating span {
            display: block;
            font-size: 11px;
            line-height: 1.4;
            text-transform: uppercase;
            letter-spacing: .08em;
            font-weight: 700;
        }

        /* SERVICE BAR */

        .svc-bar {
            background: var(--svc-red);
            color: white;
            padding: 28px 0;
        }

        .svc-bar-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .svc-bar-item {
            display: flex;
            align-items: center;
            gap: 14px;
            font-size: 14px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .04em;
        }

        .svc-bar-number {
            font-size: 25px;
            font-weight: 900;
            opacity: .45;
        }

        /* SERVICE CARDS */

        .svc-services {
            background: var(--svc-grey);
        }

        .svc-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .svc-card {
            background: white;
            border: 1px solid #e1e1e1;
            padding: 32px;
            min-height: 330px;
            display: flex;
            flex-direction: column;
            position: relative;
            transition: .3s ease;
        }

        .svc-card:hover {
            transform: translateY(-7px);
            border-color: var(--svc-red);
            box-shadow: 0 18px 45px rgba(0, 0, 0, .08);
        }

        .svc-card.featured {
            background: var(--svc-black);
            color: white;
            border-color: var(--svc-black);
        }

        .svc-card.featured:hover {
            border-color: var(--svc-red);
        }

        .svc-card-number {
            position: absolute;
            top: 24px;
            right: 25px;
            color: #d7d7d7;
            font-size: 12px;
            font-weight: 900;
        }

        .svc-card.featured .svc-card-number {
            color: #555;
        }

        .svc-icon {
            width: 52px;
            height: 52px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f3f3f3;
            color: var(--svc-red);
            margin-bottom: 27px;
        }

        .svc-card.featured .svc-icon {
            background: var(--svc-red);
            color: white;
        }

        .svc-icon svg {
            width: 25px;
            height: 25px;
        }

        .svc-card h3 {
            margin: 0 0 12px;
            font-size: 22px;
            line-height: 1.1;
            letter-spacing: -.025em;
        }

        .svc-card p {
            color: #666;
            font-size: 14px;
            line-height: 1.65;
            margin: 0 0 20px;
        }

        .svc-card.featured p {
            color: #bdbdbd;
        }

        .svc-card ul {
            list-style: none;
            margin: auto 0 0;
            padding: 0;
            display: grid;
            gap: 8px;
        }

        .svc-card li {
            display: flex;
            align-items: flex-start;
            gap: 9px;
            font-size: 13px;
            font-weight: 600;
        }

        .svc-card li::before {
            content: "";
            width: 6px;
            height: 6px;
            background: var(--svc-red);
            margin-top: 7px;
            flex: 0 0 6px;
        }

        /* PILLARS */

        .svc-pillars {
            background: var(--svc-black);
            color: white;
        }

        .svc-pillars-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
        }

        .svc-pillar {
            padding: 60px;
            border: 1px solid #292929;
        }

        .svc-pillar:first-child {
            border-right: 0;
        }

        .svc-pillar-label {
            color: var(--svc-red);
            font-size: 12px;
            font-weight: 900;
            letter-spacing: .15em;
            text-transform: uppercase;
            margin-bottom: 25px;
        }

        .svc-pillar h2 {
            margin: 0 0 18px;
            font-size: clamp(2rem, 4vw, 3.3rem);
            line-height: 1;
            letter-spacing: -.04em;
        }

        .svc-pillar p {
            color: #bcbcbc;
            font-size: 15px;
            line-height: 1.75;
            margin-bottom: 25px;
        }

        .svc-pillar-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 12px;
        }

        .svc-pillar-list li {
            border-top: 1px solid #292929;
            padding-top: 12px;
            font-size: 13px;
            font-weight: 700;
        }

        /* SECTORS */

        .svc-sector-grid {
            display: grid;
            grid-template-columns: .8fr 1.2fr;
            gap: 80px;
            align-items: start;
        }

        .svc-sector-grid h2 {
            margin: 0;
            font-size: clamp(2rem, 4vw, 3.5rem);
            line-height: 1;
            letter-spacing: -.045em;
        }

        .svc-sector-intro {
            color: var(--svc-muted);
            line-height: 1.7;
            margin-top: 20px;
        }

        .svc-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .svc-tag {
            border: 1px solid #cfcfcf;
            padding: 12px 17px;
            background: white;
            font-size: 13px;
            font-weight: 750;
            transition: .2s ease;
        }

        .svc-tag:hover {
            background: var(--svc-black);
            color: white;
            border-color: var(--svc-black);
        }

        /* METHOD */

        .svc-method {
            background: var(--svc-grey);
        }

        .svc-method-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 0;
            border-top: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
        }

        .svc-step {
            padding: 30px 24px;
            border-right: 1px solid #ccc;
            position: relative;
        }

        .svc-step:last-child {
            border-right: 0;
        }

        .svc-step-number {
            color: var(--svc-red);
            font-size: 38px;
            line-height: 1;
            font-weight: 900;
            margin-bottom: 22px;
        }

        .svc-step h3 {
            margin: 0 0 9px;
            font-size: 17px;
        }

        .svc-step p {
            margin: 0;
            color: #666;
            font-size: 13px;
            line-height: 1.6;
        }

        /* WHY */

        .svc-why-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
            border-top: 2px solid var(--svc-black);
        }

        .svc-why-item {
            padding: 30px 25px 30px 0;
            border-bottom: 1px solid #ddd;
            margin-right: 25px;
        }

        .svc-why-item h3 {
            color: var(--svc-red);
            margin: 0 0 10px;
            font-size: 17px;
        }

        .svc-why-item p {
            margin: 0;
            color: #666;
            font-size: 13px;
            line-height: 1.65;
        }

        /* CTA */

        .svc-cta {
            background: var(--svc-red);
            color: white;
            padding: 85px 0;
            position: relative;
            overflow: hidden;
        }

        .svc-cta::before {
            content: "ARTI";
            position: absolute;
            right: -30px;
            bottom: -75px;
            font-size: 230px;
            font-weight: 900;
            line-height: 1;
            color: rgba(0, 0, 0, .08);
            pointer-events: none;
        }

        .svc-cta-grid {
            display: flex;
            justify-content: space-between;
            gap: 50px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .svc-cta h2 {
            margin: 0 0 13px;
            font-size: clamp(2rem, 5vw, 4rem);
            line-height: .98;
            letter-spacing: -.045em;
        }

        .svc-cta p {
            margin: 0;
            max-width: 650px;
            color: rgba(255, 255, 255, .82);
            line-height: 1.7;
        }

        .svc-cta-button {
            background: white;
            color: black !important;
            border-color: white;
            white-space: nowrap;
        }

        .svc-cta-button:hover {
            background: black;
            color: white !important;
            border-color: black;
        }

        /* RESPONSIVE */

        @media (max-width: 1000px) {
            .svc-hero-grid {
                grid-template-columns: 1fr;
                gap: 55px;
            }

            .svc-visual {
                min-height: 420px;
            }

            .svc-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .svc-method-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .svc-step:nth-child(3) {
                border-right: 0;
            }

            .svc-step:nth-child(n+4) {
                border-top: 1px solid #ccc;
            }

            .svc-why-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 800px) {
            .svc-section {
                padding: 75px 0;
            }

            .svc-heading {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .svc-bar-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .svc-pillars-grid {
                grid-template-columns: 1fr;
            }

            .svc-pillar {
                padding: 40px 30px;
            }

            .svc-pillar:first-child {
                border-right: 1px solid #292929;
                border-bottom: 0;
            }

            .svc-sector-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .svc-cta-grid {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 650px) {
            .svc-container {
                width: min(100% - 28px, 1160px);
            }

            .svc-hero {
                padding: 75px 0 70px;
            }

            .svc-hero h1 {
                font-size: clamp(2.7rem, 13vw, 4rem);
            }

            .svc-grid {
                grid-template-columns: 1fr;
            }

            .svc-bar-grid {
                grid-template-columns: 1fr 1fr;
                gap: 18px 10px;
            }

            .svc-bar-item {
                font-size: 11px;
            }

            .svc-visual {
                min-height: 350px;
            }

            .svc-visual-ring {
                width: 300px;
                height: 300px;
            }

            .svc-main-card {
                padding: 23px;
            }

            .svc-floating {
                right: 0;
                bottom: 15px;
            }

            .svc-method-grid {
                grid-template-columns: 1fr;
            }

            .svc-step {
                border-right: 0;
                border-bottom: 1px solid #ccc;
            }

            .svc-step:last-child {
                border-bottom: 0;
            }

            .svc-step:nth-child(n+4) {
                border-top: 0;
            }

            .svc-why-grid {
                grid-template-columns: 1fr;
            }

            .svc-why-item {
                margin-right: 0;
            }

            .svc-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .svc-btn {
                width: 100%;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .services-page *,
            .services-page *::before,
            .services-page *::after {
                scroll-behavior: auto !important;
                transition: none !important;
            }
        }
    </style>

    <div class="services-page">

        {{-- HERO --}}
        <section class="svc-hero">
            <div class="svc-container svc-hero-grid">

                <div class="svc-hero-copy">

                    <div class="svc-hero-label">
                        <span></span>
                        NOS SERVICES
                    </div>

                    <h1>
                        Des solutions de
                        <em>relation client</em>
                        pensées pour votre activité.
                    </h1>

                    <p class="svc-hero-text">
                        ARTI CALL accompagne les entreprises dans la gestion de leur
                        relation client, le développement commercial et les opérations
                        de support depuis Fès, Maroc.
                    </p>

                    <div class="svc-actions">
                        <a href="{{ url('/contact') }}" class="svc-btn svc-btn-red">
                            Demander un devis
                        </a>

                        <a href="#services-list" class="svc-btn svc-btn-outline">
                            Explorer nos services
                        </a>
                    </div>

                </div>

                <div class="svc-visual">

                    <div class="svc-visual-ring"></div>

                    <div class="svc-main-card">

                        <div class="svc-main-card-top">
                            <span class="svc-main-card-title">
                                ARTI CALL
                            </span>

                            <span class="svc-status"></span>
                        </div>

                        <h3>
                            Une équipe au service de vos clients.
                        </h3>

                        <p>
                            Une organisation structurée autour de vos besoins,
                            de vos procédures et de vos objectifs.
                        </p>

                        <div class="svc-mini-list">

                            <div class="svc-mini-item">
                                <i></i>
                                Inbound
                            </div>

                            <div class="svc-mini-item">
                                <i></i>
                                Outbound
                            </div>

                            <div class="svc-mini-item">
                                <i></i>
                                Service client
                            </div>

                            <div class="svc-mini-item">
                                <i></i>
                                Back-office
                            </div>

                        </div>

                    </div>

                    <div class="svc-floating">
                        <strong>Fès</strong>
                        <span>
                            Centre d'appel<br>
                            au Maroc
                        </span>
                    </div>

                </div>

            </div>
        </section>

        {{-- RED BAR --}}
        <section class="svc-bar">
            <div class="svc-container svc-bar-grid">

                <div class="svc-bar-item">
                    <span class="svc-bar-number">01</span>
                    Inbound
                </div>

                <div class="svc-bar-item">
                    <span class="svc-bar-number">02</span>
                    Outbound
                </div>

                <div class="svc-bar-item">
                    <span class="svc-bar-number">03</span>
                    Service client
                </div>

                <div class="svc-bar-item">
                    <span class="svc-bar-number">04</span>
                    BPO & Back-office
                </div>

            </div>
        </section>

        {{-- SERVICES --}}
        <section class="svc-section svc-services" id="services-list">

            <div class="svc-container">

                <div class="svc-heading">

                    <div>
                        <span class="svc-kicker">
                            Nos expertises
                        </span>

                        <h2>
                            Une offre structurée autour de vos objectifs.
                        </h2>
                    </div>

                    <p>
                        De la réception des appels au développement commercial,
                        ARTI CALL propose des solutions adaptées aux différents
                        moments de votre parcours client.
                    </p>

                </div>

                <div class="svc-grid">

                    {{-- CARD 01 --}}
                    <article class="svc-card featured">

                        <span class="svc-card-number">01</span>

                        <div class="svc-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M4 13v-1a8 8 0 0116 0v1" />
                                <path d="M4 13h3v5H5a1 1 0 01-1-1v-4z" />
                                <path d="M20 13h-3v5h2a1 1 0 001-1v-4z" />
                                <path d="M7 18c1 2 3 3 5 3h2" />
                            </svg>
                        </div>

                        <h3>Inbound</h3>

                        <p>
                            Nous prenons en charge vos appels entrants et
                            accompagnons vos clients selon vos procédures.
                        </p>

                        <ul>
                            <li>Réception d'appels</li>
                            <li>Service client</li>
                            <li>Support après-vente</li>
                            <li>Prise de rendez-vous</li>
                            <li>Réception des commandes</li>
                        </ul>

                    </article>

                    {{-- CARD 02 --}}
                    <article class="svc-card">

                        <span class="svc-card-number">02</span>

                        <div class="svc-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M22 3l-7 7" />
                                <path d="M15 10h5" />
                                <path d="M15 10V5" />
                                <path
                                    d="M5 4h4l2 5-2.5 1.5a11 11 0 006 6L16 14l5 2v4a2 2 0 01-2 2A16 16 0 013 6a2 2 0 012-2z" />
                            </svg>
                        </div>

                        <h3>Outbound</h3>

                        <p>
                            Développez votre activité grâce à des campagnes
                            d'appels sortants structurées et adaptées à votre cible.
                        </p>

                        <ul>
                            <li>Téléprospection</li>
                            <li>Télémarketing</li>
                            <li>Télévente</li>
                            <li>Qualification de prospects</li>
                            <li>Relance commerciale</li>
                            <li>Enquêtes et fidélisation</li>
                        </ul>

                    </article>

                    {{-- CARD 03 --}}
                    <article class="svc-card">

                        <span class="svc-card-number">03</span>

                        <div class="svc-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M20 11a8.1 8.1 0 01-9 9 8 8 0 118-8" />
                                <path d="M20 4v5h-5" />
                            </svg>
                        </div>

                        <h3>Service client</h3>

                        <p>
                            Une prise en charge professionnelle de vos clients
                            pour répondre à leurs demandes et assurer un suivi.
                        </p>

                        <ul>
                            <li>Assistance client</li>
                            <li>Gestion des demandes</li>
                            <li>Suivi des dossiers</li>
                            <li>Réclamations</li>
                            <li>Fidélisation</li>
                        </ul>

                    </article>

                    {{-- CARD 04 --}}
                    <article class="svc-card">

                        <span class="svc-card-number">04</span>

                        <div class="svc-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <rect x="3" y="4" width="18" height="17" rx="2" />
                                <path d="M16 2v4" />
                                <path d="M8 2v4" />
                                <path d="M3 10h18" />
                                <path d="M8 14h3" />
                                <path d="M8 17h5" />
                            </svg>
                        </div>

                        <h3>Prise de rendez-vous</h3>

                        <p>
                            Nous qualifions les demandes et organisons les
                            rendez-vous selon vos disponibilités et vos règles.
                        </p>

                        <ul>
                            <li>Qualification des contacts</li>
                            <li>Planification</li>
                            <li>Confirmation</li>
                            <li>Relance</li>
                            <li>Suivi des rendez-vous</li>
                        </ul>

                    </article>

                    {{-- CARD 05 --}}
                    <article class="svc-card">

                        <span class="svc-card-number">05</span>

                        <div class="svc-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M4 4h16v16H4z" />
                                <path d="M8 9h8" />
                                <path d="M8 13h5" />
                                <path d="M8 17h7" />
                            </svg>
                        </div>

                        <h3>Génération de leads</h3>

                        <p>
                            Identifiez, qualifiez et transmettez des prospects
                            correspondant à vos critères commerciaux.
                        </p>

                        <ul>
                            <li>Identification de prospects</li>
                            <li>Qualification</li>
                            <li>Collecte d'informations</li>
                            <li>Prise de contact</li>
                            <li>Transmission des leads</li>
                        </ul>

                    </article>

                    {{-- CARD 06 --}}
                    <article class="svc-card featured">

                        <span class="svc-card-number">06</span>

                        <div class="svc-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <rect x="3" y="3" width="18" height="18" rx="2" />
                                <path d="M7 8h10" />
                                <path d="M7 12h4" />
                                <path d="M7 16h7" />
                            </svg>
                        </div>

                        <h3>BPO & Back-office</h3>

                        <p>
                            Externalisez certaines opérations administratives
                            et concentrez vos équipes sur votre activité principale.
                        </p>

                        <ul>
                            <li>Gestion des emails</li>
                            <li>Saisie de données</li>
                            <li>Traitement des dossiers</li>
                            <li>Suivi administratif</li>
                            <li>Opérations back-office</li>
                        </ul>

                    </article>

                </div>

            </div>

        </section>

        {{-- INBOUND / OUTBOUND --}}
        <section class="svc-section svc-pillars">

            <div class="svc-container">

                <div class="svc-heading">

                    <div>
                        <span class="svc-kicker">
                            Deux piliers
                        </span>

                        <h2>
                            Recevoir.<br>
                            Développer.
                        </h2>
                    </div>

                    <p style="color:#aaa;">
                        Une approche qui couvre aussi bien la gestion de votre
                        relation client que vos opérations commerciales.
                    </p>

                </div>

                <div class="svc-pillars-grid">

                    <article class="svc-pillar">

                        <div class="svc-pillar-label">
                            INBOUND
                        </div>

                        <h2>
                            Être là<br>
                            quand vos clients appellent.
                        </h2>

                        <p>
                            Nous représentons votre entreprise auprès de vos
                            clients avec des processus définis ensemble.
                        </p>

                        <ul class="svc-pillar-list">
                            <li>Réception des appels</li>
                            <li>Service client</li>
                            <li>Assistance</li>
                            <li>Prise de rendez-vous</li>
                            <li>Gestion des demandes</li>
                        </ul>

                    </article>

                    <article class="svc-pillar">

                        <div class="svc-pillar-label">
                            OUTBOUND
                        </div>

                        <h2>
                            Aller vers<br>
                            vos futurs clients.
                        </h2>

                        <p>
                            Nous accompagnons vos campagnes commerciales avec
                            des scripts, des critères de qualification et un
                            suivi adapté à vos objectifs.
                        </p>

                        <ul class="svc-pillar-list">
                            <li>Téléprospection</li>
                            <li>Qualification de prospects</li>
                            <li>Génération de leads</li>
                            <li>Relance commerciale</li>
                            <li>Prise de rendez-vous</li>
                        </ul>

                    </article>

                </div>

            </div>

        </section>

        {{-- SECTEURS --}}
        <section class="svc-section">

            <div class="svc-container svc-sector-grid">

                <div>

                    <span class="svc-kicker">
                        Secteurs
                    </span>

                    <h2>
                        Une approche adaptée à votre activité.
                    </h2>

                    <p class="svc-sector-intro">
                        Chaque secteur possède ses propres contraintes et
                        attentes. Nos campagnes peuvent être adaptées à votre
                        environnement, vos procédures et votre clientèle.
                    </p>

                </div>

                <div class="svc-tags">

                    <span class="svc-tag">E-commerce</span>
                    <span class="svc-tag">Immobilier</span>
                    <span class="svc-tag">Assurance</span>
                    <span class="svc-tag">Finance</span>
                    <span class="svc-tag">Télécommunications</span>
                    <span class="svc-tag">Santé</span>
                    <span class="svc-tag">Éducation</span>
                    <span class="svc-tag">Hôtellerie</span>
                    <span class="svc-tag">Commerce</span>
                    <span class="svc-tag">Services</span>
                    <span class="svc-tag">PME</span>
                    <span class="svc-tag">Startups</span>

                </div>

            </div>

        </section>

        {{-- METHOD --}}
        <section class="svc-section svc-method">

            <div class="svc-container">

                <div class="svc-heading">

                    <div>
                        <span class="svc-kicker">
                            Notre méthode
                        </span>

                        <h2>
                            Une organisation claire, du cadrage au suivi.
                        </h2>
                    </div>

                    <p>
                        Nous construisons chaque campagne autour d'un processus
                        structuré afin de garder une vision claire de vos objectifs.
                    </p>

                </div>

                <div class="svc-method-grid">

                    <div class="svc-step">
                        <div class="svc-step-number">01</div>
                        <h3>Analyse</h3>
                        <p>
                            Compréhension de votre activité,
                            vos objectifs et vos besoins.
                        </p>
                    </div>

                    <div class="svc-step">
                        <div class="svc-step-number">02</div>
                        <h3>Préparation</h3>
                        <p>
                            Définition des scripts, procédures
                            et critères de traitement.
                        </p>
                    </div>

                    <div class="svc-step">
                        <div class="svc-step-number">03</div>
                        <h3>Formation</h3>
                        <p>
                            Préparation des agents à votre
                            environnement et à votre campagne.
                        </p>
                    </div>

                    <div class="svc-step">
                        <div class="svc-step-number">04</div>
                        <h3>Lancement</h3>
                        <p>
                            Mise en place de la campagne
                            et démarrage des opérations.
                        </p>
                    </div>

                    <div class="svc-step">
                        <div class="svc-step-number">05</div>
                        <h3>Suivi</h3>
                        <p>
                            Suivi des opérations et amélioration
                            continue selon vos besoins.
                        </p>
                    </div>

                </div>

            </div>

        </section>

        {{-- WHY ARTI CALL --}}
        <section class="svc-section">

            <div class="svc-container">

                <div class="svc-heading">

                    <div>
                        <span class="svc-kicker">
                            Pourquoi ARTI CALL
                        </span>

                        <h2>
                            Une collaboration pensée pour durer.
                        </h2>
                    </div>

                    <p>
                        Notre objectif est de construire une organisation
                        simple, claire et cohérente autour de votre relation client.
                    </p>

                </div>

                <div class="svc-why-grid">

                    <div class="svc-why-item">
                        <h3>Professionnalisme</h3>
                        <p>
                            Une communication soignée et adaptée à
                            l'image de votre entreprise.
                        </p>
                    </div>

                    <div class="svc-why-item">
                        <h3>Flexibilité</h3>
                        <p>
                            Des dispositifs pouvant évoluer selon
                            vos campagnes et vos besoins.
                        </p>
                    </div>

                    <div class="svc-why-item">
                        <h3>Processus structurés</h3>
                        <p>
                            Des procédures définies pour assurer
                            une organisation cohérente.
                        </p>
                    </div>

                    <div class="svc-why-item">
                        <h3>Accompagnement</h3>
                        <p>
                            Un échange continu pour ajuster les
                            opérations à vos objectifs.
                        </p>
                    </div>

                </div>

            </div>

        </section>

        {{-- CTA --}}
        <section class="svc-cta">

            <div class="svc-container svc-cta-grid">

                <div>

                    <h2>
                        Parlons de votre<br>
                        projet.
                    </h2>

                    <p>
                        Expliquez-nous votre besoin et construisons ensemble
                        une solution adaptée à votre activité.
                    </p>

                </div>

                <a href="{{ url('/contact') }}" class="svc-btn svc-cta-button">
                    Demander un devis
                </a>

            </div>

        </section>

    </div>

@endsection
