<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title><?= htmlspecialchars($titre) ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!-- CSS du template Hyperspace -->
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">

        <!-- Sidebar -->
        <section id="sidebar">
            <div class="inner">
                <nav>
                    <ul>
                        <li><a href="#intro">Accueil</a></li>
                        <li><a href="#blog">Billets du blog</a></li>
                        <!-- Tu peux ajouter d'autres liens si besoin -->
                    </ul>
                </nav>
            </div>
        </section>

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Intro (header du blog) -->
            <section id="intro" class="wrapper style1 fullscreen fade-up">
                <div class="inner">
                    <h1>Mon Blog</h1>
                    <p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
                    <ul class="actions">
                        <li><a href="#blog" class="button scrolly">Voir les billets</a></li>
                    </ul>
                </div>
            </section>

            <!-- Zone où l’on injecte le contenu PHP du blog -->
            <section id="blog" class="wrapper style3 fade-up">
                <div class="inner">
                    <?= $contenu ?>
                </div>
            </section>

        </div>

        <!-- Footer -->
        <footer id="footer" class="wrapper style1-alt">
            <div class="inner">
                <ul class="menu">
                    <li>Blog réalisé avec PHP, HTML5 et CSS.</li>
                    <li>Design basé sur le thème Hyperspace (HTML5 UP).</li>
                </ul>
            </div>
        </footer>

        <!-- Scripts du template Hyperspace -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
