<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>ARTI CALL – Centre d'appel à Fès, Maroc</title>
    <meta name="description"
        content="ARTI CALL, centre d'appel à Fès, Maroc : réception d'appels, service client, téléprospection et génération de leads. Demandez un devis.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@75..125,400..900&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --red: #D7101F;
            --red-d: #a80b17;
            --black: #000;
            --white: #fff;
            --grey: #f3f3f3;
            --line: #e0e0e0;
            box-sizing: border-box;
            padding-top: env(safe-area-inset-top, 0px);
            padding-bottom: env(safe-area-inset-bottom, 0px)
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box
        }

        body {
            margin: 0;
            background: var(--white);
            color: var(--black);
            font-family: 'Archivo', Arial, sans-serif;
            line-height: 1.6;
            font-size: 17px
        }

        img,
        svg {
            max-width: 100%
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
            font-weight: 800;
            letter-spacing: -.01em
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
            font-weight: 700;
            text-decoration: none;
            border: 2px solid var(--red);
            background: var(--red);
            color: #fff;
            cursor: pointer;
            font: inherit;
            font-weight: 700;
            border-radius: 4px
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

        :focus-visible {
            outline: 3px solid var(--red);
            outline-offset: 3px
        }

        /* nav */
        header {
            position: sticky;
            top: 0;
            z-index: 10;
            background: var(--black);
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
            text-decoration: none;
            letter-spacing: .02em
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

        nav a:hover {
            color: var(--red)
        }

        .nav .btn {
            padding: 10px 18px;
            font-size: .92rem
        }

        @media(max-width:860px) {
            nav ul {
                display: none
            }
        }

        /* hero */
        .hero {
            background: var(--black);
            color: #fff;
            padding: 96px 0 0;
            overflow: hidden
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

        .hero .cta {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 64px
        }

        .hero .side {
            background: var(--red);
            padding: 28px;
            font-weight: 700;
            font-size: 1.05rem;
            line-height: 1.35;
            align-self: stretch;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            min-height: 220px
        }

        .hero .side b {
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

            .hero .side {
                min-height: 0
            }
        }

        /* stats */
        .stats {
            background: var(--red);
            color: #fff;
            padding: 36px 0
        }

        .stats .wrap {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            text-align: left
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

        /* about */
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
            background: var(--black);
            color: #fff;
            padding: 32px;
            border-left: 8px solid var(--red)
        }

        .panel ul {
            margin: 0;
            padding-left: 1.1em
        }

        /* services */
        .grey {
            background: var(--grey)
        }

        .svc {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px
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
            background: var(--black);
            color: #fff
        }

        .card ul {
            padding-left: 1.1em;
            margin: 0 0 20px;
            flex: 1
        }

        .card li {
            margin-bottom: .35em
        }

        .card .btn {
            align-self: flex-start;
            padding: 10px 18px;
            font-size: .92rem
        }

        .ico {
            width: 44px;
            height: 44px;
            margin-bottom: 14px;
            color: var(--red)
        }

        /* why */
        .why {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 0;
            border-top: 2px solid var(--black)
        }

        .why div {
            padding: 24px 20px 24px 0;
            border-bottom: 1px solid var(--line)
        }

        .why h3 {
            color: var(--red)
        }

        /* sectors */
        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            padding: 0;
            list-style: none;
            margin: 0
        }

        .tags li {
            border: 2px solid var(--black);
            padding: 8px 16px;
            font-weight: 600
        }

        .tags li:hover {
            background: var(--black);
            color: #fff
        }

        /* steps */
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
            background: #fff;
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

        /* faq */
        details {
            border-bottom: 1px solid var(--line);
            padding: 16px 0
        }

        details:first-of-type {
            border-top: 2px solid var(--black)
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

        /* contact */
        .contact {
            background: var(--black);
            color: #fff
        }

        .contact .info p {
            color: #ddd;
            margin-bottom: .6em
        }

        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
            background: #fff;
            color: #000;
            padding: 28px
        }

        form .full {
            grid-column: 1/-1
        }

        label {
            font-weight: 600;
            font-size: .9rem;
            display: block;
            margin-bottom: 4px
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 11px 12px;
            border: 1.5px solid #999;
            font: inherit;
            border-radius: 3px;
            background: #fff;
            color: #000
        }

        textarea {
            min-height: 110px;
            resize: vertical
        }

        fieldset {
            border: 0;
            padding: 0;
            margin: 0
        }

        fieldset label {
            display: inline-block;
            font-weight: 400;
            margin-right: 14px
        }

        fieldset input {
            width: auto
        }

        .err {
            color: var(--red-d);
            font-size: .85rem;
            min-height: 1em
        }

        #ok {
            display: none;
            background: var(--black);
            color: #fff;
            padding: 14px;
            border-left: 6px solid var(--red)
        }

        @media(max-width:600px) {
            form {
                grid-template-columns: 1fr
            }
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

        /* mobile sticky */
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
            <a class="logo" href="#accueil">ARTI<span>CALL</span></a>
            <nav aria-label="Menu principal">
                <ul>
                    <li><a href="#accueil">Accueil</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#secteurs">Secteurs</a></li>
                    <li><a href="#apropos">À propos</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <a class="btn" href="#contact">Demander un devis</a>
        </div>
    </header>

    <main>
        <section class="hero" id="accueil">
            <div class="wrap">
                <div>
                    <h1>Votre partenaire en <em>relation client</em> et développement commercial</h1>
                    <p>ARTI CALL accompagne les entreprises avec des solutions professionnelles de centre d'appel, de
                        service client et de développement commercial depuis Fès, Maroc.</p>
                    <div class="cta"><a class="btn" href="#contact">Demander un devis</a><a class="btn ghost"
                            href="#services">Découvrir nos services</a></div>
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

        <section id="apropos">
            <div class="wrap two">
                <div>
                    <h2>Une équipe dédiée à votre relation client</h2>
                    <p>Basée à Fès, ARTI CALL accompagne les entreprises dans la gestion de leur relation client et dans
                        leurs opérations de développement commercial.</p>
                    <p>Notre équipe met son savoir-faire et ses outils au service de campagnes adaptées aux objectifs de
                        chaque client.</p>
                </div>
                <div class="panel">
                    <h3>Nos engagements</h3>
                    <ul>
                        <li><b>Qualité</b> des échanges avec vos clients</li>
                        <li><b>Professionnalisme</b> selon vos procédures</li>
                        <li><b>Confidentialité</b> de vos informations</li>
                        <li><b>Flexibilité</b> face à l'évolution des campagnes</li>
                        <li><b>Accompagnement</b> à chaque étape</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="grey" id="services">
            <div class="wrap">
                <h2>Nos services</h2>
                <p>Que vous receviez des appels ou que vous souhaitiez en émettre, choisissez la solution adaptée à
                    votre besoin.</p>
                <div class="svc">
                    <article class="card">
                        <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 13v-1a8 8 0 0116 0v1M4 13h3v5H5a1 1 0 01-1-1v-4zm16 0h-3v5h2a1 1 0 001-1v-4z" />
                        </svg>
                        <h3>Inbound : appels entrants</h3>
                        <ul>
                            <li>Réception d'appels</li>
                            <li>Service client et assistance</li>
                            <li>Support après-vente</li>
                            <li>Prise de rendez-vous</li>
                            <li>Réception des commandes</li>
                        </ul>
                        <a class="btn" href="#contact">Demander un devis</a>
                    </article>
                    <article class="card dark">
                        <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path
                                d="M22 3l-7 7m0 0h5m-5 0V5M5 4h4l2 5-2.5 1.5a11 11 0 006 6L16 14l5 2v4a2 2 0 01-2 2A16 16 0 013 6a2 2 0 012-2z" />
                        </svg>
                        <h3>Outbound : appels sortants</h3>
                        <ul>
                            <li>Téléprospection et télémarketing</li>
                            <li>Télévente</li>
                            <li>Génération de leads</li>
                            <li>Qualification de prospects</li>
                            <li>Relance commerciale</li>
                            <li>Enquêtes et fidélisation</li>
                        </ul>
                        <a class="btn" href="#contact">Demander un devis</a>
                    </article>
                    <article class="card">
                        <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="5" width="18" height="14" rx="2" />
                            <path d="M3 7l9 6 9-6" />
                        </svg>
                        <h3>Services complémentaires</h3>
                        <ul>
                            <li>Gestion des emails</li>
                            <li>Chat en ligne</li>
                            <li>Back-office et saisie de données</li>
                            <li>Suivi des dossiers</li>
                        </ul>
                        <a class="btn" href="#contact">Demander un devis</a>
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
                        <p>Nous soignons la qualité de la relation avec vos clients et prospects.</p>
                    </div>
                    <div>
                        <h3>Un suivi structuré</h3>
                        <p>Des processus clairs pour suivre les demandes et les campagnes.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="grey" id="secteurs">
            <div class="wrap">
                <h2>Secteurs que nous accompagnons</h2>
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

        <section class="grey" id="faq">
            <div class="wrap">
                <h2>Questions fréquentes</h2>
                <details>
                    <summary>Quels services propose ARTI CALL ?</summary>
                    <p>Des services Inbound et Outbound, ainsi que des services complémentaires selon les besoins des
                        entreprises.</p>
                </details>
                <details>
                    <summary>Où se trouve ARTI CALL ?</summary>
                    <p>ARTI CALL est basée à Fès, au Maroc.</p>
                </details>
                <details>
                    <summary>Pouvez-vous gérer une campagne de téléprospection ?</summary>
                    <p>Oui, la téléprospection fait partie de nos services Outbound.</p>
                </details>
                <details>
                    <summary>Pouvez-vous gérer le service client de mon entreprise ?</summary>
                    <p>Oui, selon les modalités définies avec vous.</p>
                </details>
                <details>
                    <summary>Comment demander un devis ?</summary>
                    <p>Utilisez le formulaire ci-dessous ou contactez-nous directement.</p>
                </details>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="wrap two">
                <div class="info">
                    <h2>Demandez votre devis</h2>
                    <p>ARTI CALL, centre d'appel à Fès, Maroc.</p>
                    <p>Téléphone : [à compléter]</p>
                    <p>Email : [à compléter]</p>
                    <p>Adresse : [à compléter]</p>
                    <p>Horaires : [à compléter]</p>
                </div>
                <form id="f" novalidate>
                    <div><label for="nom">Nom</label><input id="nom" required autocomplete="family-name">
                        <div class="err"></div>
                    </div>
                    <div><label for="prenom">Prénom</label><input id="prenom" required autocomplete="given-name">
                        <div class="err"></div>
                    </div>
                    <div><label for="ent">Entreprise</label><input id="ent" autocomplete="organization">
                    </div>
                    <div><label for="mail">Email</label><input id="mail" type="email" required
                            autocomplete="email">
                        <div class="err"></div>
                    </div>
                    <div><label for="tel">Téléphone</label><input id="tel" type="tel"
                            autocomplete="tel"></div>
                    <div><label for="pays">Pays</label><input id="pays" autocomplete="country-name"></div>
                    <div><label for="sect">Secteur d'activité</label><select id="sect">
                            <option>E-commerce</option>
                            <option>Immobilier</option>
                            <option>Assurance</option>
                            <option>Finance</option>
                            <option>Télécommunications</option>
                            <option>Santé</option>
                            <option>Éducation</option>
                            <option>Hôtellerie</option>
                            <option>Autre</option>
                        </select></div>
                    <div><label for="serv">Service recherché</label><select id="serv">
                            <option>Service client</option>
                            <option>Téléprospection</option>
                            <option>Télémarketing</option>
                            <option>Télévente</option>
                            <option>Génération de leads</option>
                            <option>Prise de rendez-vous</option>
                            <option>Autre</option>
                        </select></div>
                    <fieldset class="full">
                        <legend style="font-weight:600;font-size:.9rem;margin-bottom:4px">Type de campagne</legend>
                        <label><input type="radio" name="camp" checked> Inbound</label><label><input
                                type="radio" name="camp"> Outbound</label><label><input type="radio"
                                name="camp"> Les deux</label>
                    </fieldset>
                    <div class="full"><label for="msg">Message</label>
                        <textarea id="msg"></textarea>
                    </div>
                    <div class="full"><button class="btn" type="submit">Demander un devis</button></div>
                    <div class="full" id="ok" role="status">Merci, votre demande est bien prise en compte.
                        Nous vous répondons rapidement.</div>
                </form>
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
                        <li><a href="#accueil">Accueil</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#secteurs">Secteurs</a></li>
                        <li><a href="#apropos">À propos</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#contact">Contact</a></li>
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

    <div class="mob"><a href="#contact">Demander un devis</a><a href="#contact">Nous contacter</a></div>

    <script>
        document.getElementById('f').addEventListener('submit', function(e) {
            e.preventDefault();
            var ok = true;
            this.querySelectorAll('[required]').forEach(function(i) {
                var m = i.parentNode.querySelector('.err'),
                    bad = !i.value.trim() || (i.type === 'email' && !/^\S+@\S+\.\S+$/.test(i.value));
                m.textContent = bad ? (i.type === 'email' ? 'Entrez un email valide.' :
                    'Ce champ est obligatoire.') : '';
                if (bad) ok = false
            });
            if (ok) {
                document.getElementById('ok').style.display = 'block';
                this.reset()
            }
        });
    </script>
</body>

</html>
