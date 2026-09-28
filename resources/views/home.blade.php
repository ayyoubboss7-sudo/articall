<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>ARTI CALL – Centre d'appel à Fès, Maroc</title>
    <meta name="description"
        content="ARTI CALL, centre d'appel à Fès, Maroc : service client, réception d'appels, téléprospection et génération de leads. Demandez un devis.">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@75..125,400..900&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --red: #D7101F;
            --red-d: #a80b17;
            --black: #000;
            --white: #fff;
            --grey: #f3f3f3;
            --line: #e0e0e0
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box
        }

        html {
            scroll-behavior: smooth
        }

        body {
            margin: 0;
            background: #fff;
            color: #000;
            font-family: 'Archivo', Arial, sans-serif;
            line-height: 1.6;
            font-size: 17px
        }

        a {
            color: inherit
        }

        .wrap {
            max-width: 1120px;
            margin: 0 auto;
            padding: 0 20px
        }

        h1,
        h2,
        h3 {
            line-height: 1.08;
            margin: 0 0 .5em;
            font-weight: 800
        }

        h1 {
            font-size: clamp(2.3rem, 6vw, 4.4rem);
            font-stretch: 110%
        }

        h2 {
            font-size: clamp(1.7rem, 3.6vw, 2.6rem)
        }

        h3 {
            font-size: 1.15rem
        }

        p {
            margin: 0 0 1em;
            max-width: 62ch
        }

        section {
            padding: 72px 0
        }

        .btn {
            display: inline-block;
            padding: 14px 26px;
            font: inherit;
            font-weight: 700;
            text-decoration: none;
            border: 2px solid var(--red);
            background: var(--red);
            color: #fff;
            border-radius: 4px;
            cursor: pointer
        }

        .btn:hover {
            background: var(--red-d);
            border-color: var(--red-d)
        }

        .btn.ghost {
            background: transparent;
            border-color: #fff;
            color: #fff
        }

        .btn.ghost:hover {
            background: #fff;
            color: #000
        }

        .btn.sm {
            padding: 10px 18px;
            font-size: .92rem
        }

        .btn.line {
            background: transparent;
            color: #000;
            border-color: #000
        }

        .btn.line:hover {
            background: #000;
            color: #fff
        }

        :focus-visible {
            outline: 3px solid var(--red);
            outline-offset: 3px
        }

        header {
            position: sticky;
            top: 0;
            z-index: 10;
            background: #000;
            color: #fff;
            padding-top: env(safe-area-inset-top, 0px)
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            height: 68px
        }

        .logo {
            font-weight: 900;
            font-size: 1.4rem;
            text-decoration: none
        }

        .logo span {
            color: var(--red)
        }

        nav ul {
            display: flex;
            gap: 22px;
            list-style: none;
            margin: 0;
            padding: 0
        }

        nav a {
            text-decoration: none;
            font-weight: 600;
            font-size: .95rem
        }

        nav a:hover,
        nav a[aria-current] {
            color: var(--red)
        }

        @media(max-width:860px) {
            nav ul {
                display: none
            }
        }

        .hero {
            background: #000;
            color: #fff;
            padding: 96px 0 0
        }

        .hero .wrap {
            display: grid;
            grid-template-columns: 1.3fr .7fr;
            gap: 40px;
            align-items: end
        }

        .hero p {
            font-size: 1.15rem;
            color: #ddd
        }

        .hero h1 em {
            font-style: normal;
            color: var(--red)
        }

        .cta {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 64px
        }

        .side {
            background: var(--red);
            padding: 28px;
            font-weight: 700;
            align-self: stretch;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            min-height: 220px
        }

        .side b {
            font-size: 2.6rem;
            line-height: 1;
            font-weight: 900;
            display: block;
            margin-bottom: 8px
        }

        @media(max-width:860px) {
            .hero {
                padding-top: 56px
            }

            .hero .wrap {
                grid-template-columns: 1fr
            }

            .side {
                min-height: 0
            }
        }

        .stats {
            background: var(--red);
            color: #fff;
            padding: 36px 0
        }

        .stats .wrap {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px
        }

        .stats b {
            display: block;
            font-size: 2.3rem;
            font-weight: 900;
            line-height: 1
        }

        @media(max-width:700px) {
            .stats .wrap {
                grid-template-columns: repeat(2, 1fr)
            }
        }

        .two {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 48px;
            align-items: start
        }

        @media(max-width:800px) {
            .two {
                grid-template-columns: 1fr
            }
        }

        .panel {
            background: #000;
            color: #fff;
            padding: 32px;
            border-left: 8px solid var(--red)
        }

        .panel ul {
            margin: 0;
            padding-left: 1.1em
        }

        .grey {
            background: var(--grey)
        }

        .svc {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 24px
        }

        @media(max-width:900px) {
            .svc {
                grid-template-columns: 1fr
            }
        }

        .card {
            background: #fff;
            border-top: 6px solid var(--red);
            padding: 28px;
            display: flex;
            flex-direction: column
        }

        .card.dark {
            background: #000;
            color: #fff
        }

        .card ul {
            padding-left: 1.1em;
            margin: 0 0 20px;
            flex: 1
        }

        .card .btn {
            align-self: flex-start
        }

        .why {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            border-top: 2px solid #000
        }

        .why div {
            padding: 24px 20px 24px 0;
            border-bottom: 1px solid var(--line)
        }

        .why h3 {
            color: var(--red)
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            padding: 0;
            list-style: none;
            margin: 0 0 28px
        }

        .tags li {
            border: 2px solid #000;
            padding: 8px 16px;
            font-weight: 600
        }

        .steps {
            list-style: none;
            margin: 0;
            padding: 0;
            counter-reset: s;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px
        }

        @media(max-width:800px) {
            .steps {
                grid-template-columns: 1fr
            }
        }

        .steps li {
            counter-increment: s;
            background: var(--grey);
            padding: 24px;
            border-left: 6px solid var(--red)
        }

        .steps li::before {
            content: counter(s);
            display: block;
            font-size: 2rem;
            font-weight: 900;
            color: var(--red);
            line-height: 1;
            margin-bottom: 8px
        }

        details {
            border-bottom: 1px solid var(--line);
            padding: 16px 0
        }

        details:first-of-type {
            border-top: 2px solid #000
        }

        summary {
            cursor: pointer;
            font-weight: 700;
            list-style: none;
            display: flex;
            justify-content: space-between;
            gap: 16px
        }

        summary::-webkit-details-marker {
            display: none
        }

        summary::after {
            content: "+";
            color: var(--red);
            font-size: 1.5rem;
            line-height: 1
        }

        details[open] summary::after {
            content: "–"
        }

        details p {
            margin: 12px 0 0
        }

        .band {
            background: var(--red);
            color: #fff;
            text-align: center
        }

        .band p {
            margin: 0 auto 24px
        }

        .band .btn {
            background: #000;
            border-color: #000
        }

        .band .btn:hover {
            background: #fff;
            color: #000;
            border-color: #fff
        }

        .contact {
            background: #000;
            color: #fff
        }

        .contact p {
            color: #ddd;
            margin-bottom: .5em
        }

        footer {
            background: #000;
            color: #ccc;
            padding: 48px 0 24px;
            border-top: 6px solid var(--red);
            font-size: .95rem
        }

        footer .cols {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 28px
        }

        footer h3 {
            color: #fff;
            font-size: 1rem
        }

        footer ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        footer li {
            margin-bottom: 6px
        }

        footer a {
            text-decoration: none
        }

        footer a:hover {
            color: var(--red)
        }

        .copy {
            margin-top: 32px;
            border-top: 1px solid #333;
            padding-top: 16px;
            font-size: .85rem
        }

        .mob {
            display: none
        }

        @media(max-width:700px) {
            .mob {
                display: flex;
                position: fixed;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 20;
                padding-bottom: env(safe-area-inset-bottom, 0px);
                background: #000
            }

            .mob a {
                flex: 1;
                text-align: center;
                padding: 14px;
                font-weight: 700;
                text-decoration: none;
                color: #fff
            }

            .mob a:first-child {
                background: var(--red)
            }

            body {
                padding-bottom: 56px
            }
        }

        @media(prefers-reduced-motion:reduce) {
            html {
                scroll-behavior: auto
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="wrap nav">
            <a class="logo" href="index.html">ARTI<span>CALL</span></a>
            <nav aria-label="Menu principal">
                <ul>
                    <li><a href="index.html" aria-current="page">Accueil</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="secteurs.html">Secteurs</a></li>
                    <li><a href="apropos.html">À propos</a></li>
                    <li><a href="pourquoi.html">Pourquoi ARTI CALL ?</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <a class="btn sm" href="contact.html">Demander un devis</a>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="wrap">
                <div>
                    <h1>Votre partenaire en <em>relation client</em> et développement commercial</h1>
                    <p>ARTI CALL accompagne les entreprises avec des solutions professionnelles de centre d'appel, de
                        service client et de développement commercial depuis Fès, Maroc.</p>
                    <div class="cta"><a class="btn" href="contact.html">Demander un devis</a><a class="btn ghost"
                            href="services.html">Découvrir nos services</a></div>
                </div>
                <div class="side"><b>Fès</b>Centre d'appel au Maroc, au service de votre relation client.</div>
            </div>
        </section>

        <div class="stats">
            <div class="wrap">
                <div><b>+XX</b>Agents</div>
                <div><b>+XX</b>Clients</div>
                <div><b>+XX</b>Appels traités</div>
                <div><b>XX</b>Années d'expérience</div>
            </div>
        </div>

        <section>
            <div class="wrap two">
                <div>
                    <h2>Une équipe dédiée à votre relation client</h2>
                    <p>Basée à Fès, ARTI CALL accompagne les entreprises dans la gestion de leur relation client et dans
                        leurs opérations de développement commercial. Notre équipe met son savoir-faire et ses outils au
                        service de campagnes adaptées aux objectifs de chaque client.</p>
                    <a class="btn line" href="apropos.html">En savoir plus sur ARTI CALL</a>
                </div>
                <div class="panel">
                    <h3>Ce que vous comprenez en 10 secondes</h3>
                    <ul>
                        <li>Nous sommes un centre d'appel à Fès, Maroc</li>
                        <li>Nous recevons et émettons des appels pour vous</li>
                        <li>Nous travaillons avec des PME, startups et grandes entreprises</li>
                        <li>Un devis en un clic</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="grey">
            <div class="wrap">
                <h2>Nos services</h2>
                <p>Que vous receviez des appels ou que vous souhaitiez en émettre, choisissez la solution adaptée.</p>
                <div class="svc">
                    <article class="card">
                        <h3>Inbound : appels entrants</h3>
                        <ul>
                            <li>Réception d'appels</li>
                            <li>Service client et assistance</li>
                            <li>Support après-vente</li>
                            <li>Prise de rendez-vous</li>
                        </ul>
                        <a class="btn sm" href="services.html#inbound">Voir le détail</a>
                    </article>
                    <article class="card dark">
                        <h3>Outbound : appels sortants</h3>
                        <ul>
                            <li>Téléprospection et télémarketing</li>
                            <li>Télévente</li>
                            <li>Génération de leads</li>
                            <li>Qualification de prospects</li>
                        </ul>
                        <a class="btn sm" href="services.html#outbound">Voir le détail</a>
                    </article>
                    <article class="card">
                        <h3>Services complémentaires</h3>
                        <ul>
                            <li>Gestion des emails</li>
                            <li>Chat en ligne</li>
                            <li>Back-office et saisie de données</li>
                            <li>Suivi des dossiers</li>
                        </ul>
                        <a class="btn sm" href="services.html#complementaires">Voir le détail</a>
                    </article>
                </div>
            </div>
        </section>

        <section>
            <div class="wrap">
                <h2>Pourquoi choisir ARTI CALL ?</h2>
                <div class="why">
                    <div>
                        <h3>Une équipe professionnelle</h3>
                        <p>Des agents formés pour une communication soignée avec vos clients.</p>
                    </div>
                    <div>
                        <h3>Une implantation à Fès</h3>
                        <p>Une équipe basée à Fès, Maroc.</p>
                    </div>
                    <div>
                        <h3>Des solutions sur mesure</h3>
                        <p>Chaque campagne est adaptée à vos objectifs.</p>
                    </div>
                    <div>
                        <h3>Une approche orientée client</h3>
                        <p>Nous soignons la relation avec vos clients et prospects.</p>
                    </div>
                    <div>
                        <h3>Un suivi structuré</h3>
                        <p>Des processus clairs pour suivre demandes et campagnes.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="grey">
            <div class="wrap">
                <h2>Votre secteur est le nôtre</h2>
                <ul class="tags">
                    <li>E-commerce</li>
                    <li>Immobilier</li>
                    <li>Assurance</li>
                    <li>Finance</li>
                    <li>Télécommunications</li>
                    <li>Santé</li>
                    <li>Éducation</li>
                    <li>Hôtellerie</li>
                    <li>Commerce</li>
                    <li>Services</li>
                    <li>PME</li>
                    <li>Startups</li>
                </ul>
                <a class="btn line" href="secteurs.html">Voir tous les secteurs</a>
            </div>
        </section>

        <section>
            <div class="wrap">
                <h2>Notre méthode de travail</h2>
                <ol class="steps">
                    <li>
                        <h3>Analyse</h3>Compréhension de vos objectifs et de vos besoins.
                    </li>
                    <li>
                        <h3>Préparation</h3>Définition du scénario, des scripts et des procédures.
                    </li>
                    <li>
                        <h3>Formation</h3>Préparation des agents à votre campagne.
                    </li>
                    <li>
                        <h3>Lancement</h3>Démarrage de la campagne.
                    </li>
                    <li>
                        <h3>Suivi</h3>Suivi des performances et des résultats.
                    </li>
                    <li>
                        <h3>Optimisation</h3>Amélioration continue selon les résultats.
                    </li>
                </ol>
            </div>
        </section>

        <!-- Réalisations et Témoignages : à ajouter uniquement avec des cas et avis réels fournis par ARTI CALL -->

        <section class="grey">
            <div class="wrap">
                <h2>Questions fréquentes</h2>
                <details>
                    <summary>Quels services propose ARTI CALL ?</summary>
                    <p>Des services Inbound et Outbound, ainsi que des services complémentaires selon vos besoins.</p>
                </details>
                <details>
                    <summary>Où se trouve ARTI CALL ?</summary>
                    <p>ARTI CALL est basée à Fès, au Maroc.</p>
                </details>
                <details>
                    <summary>Comment demander un devis ?</summary>
                    <p>Utilisez le formulaire de la page Contact ou contactez-nous directement.</p>
                </details>
                <p style="margin-top:20px"><a href="faq.html">Voir toutes les questions</a></p>
            </div>
        </section>

        <section class="band">
            <div class="wrap">
                <h2>Parlons de votre projet</h2>
                <p>Décrivez votre besoin, nous vous préparons un devis adapté.</p>
                <a class="btn" href="contact.html">Demander un devis</a>
            </div>
        </section>

        <section class="contact">
            <div class="wrap two">
                <div>
                    <h2>ARTI CALL, centre d'appel à Fès, Maroc</h2>
                    <p>Téléphone : [à compléter]</p>
                    <p>Email : [à compléter]</p>
                    <p>Adresse : [à compléter]</p>
                    <p>Horaires : [à compléter]</p>
                </div>
                <div>
                    <p>Envie d'en discuter ? Écrivez-nous ou appelez-nous, nous répondons rapidement.</p><a
                        class="btn" href="contact.html">Nous contacter</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="wrap">
            <div class="cols">
                <div>
                    <h3>ARTI CALL</h3>Centre d'appel basé à Fès, Maroc.
                </div>
                <div>
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="secteurs.html">Secteurs</a></li>
                        <li><a href="apropos.html">À propos</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Services</h3>
                    <ul>
                        <li>Inbound</li>
                        <li>Outbound</li>
                        <li>Téléprospection</li>
                        <li>Service client</li>
                        <li>Lead generation</li>
                    </ul>
                </div>
                <div>
                    <h3>Contact</h3>
                    <ul>
                        <li>Téléphone : [à compléter]</li>
                        <li>Email : [à compléter]</li>
                        <li>Adresse : [à compléter]</li>
                    </ul>
                </div>
            </div>
            <div class="copy">© 2026 ARTI CALL, Fès, Maroc. Politique de confidentialité · Mentions légales</div>
        </div>
    </footer>

    <div class="mob"><a href="contact.html">Demander un devis</a><a href="contact.html">Nous contacter</a></div>
</body>

</html>
