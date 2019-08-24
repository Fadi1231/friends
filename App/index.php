<!DOCTYPE html>
<html>
    <head>
        <title><?= WEBSITE_TITLE ?></title>
        <link rel="stylesheet" href="./public/css/main.css">
    </head>
    <body>
        <section>
            <header>
                <div class="websiteName"><?= WEBSITE_NAME ?></div>
            </header>
            <nav class="navBar">
                <div class="bar-title">
                    Menu
                </div>
                <ul>
                    <li data-link="register">Register</li>
                    <li data-link="about-us">About Us</li>
                </ul>
            </nav>
            <main>
                main
            </main>
            <aside class="userArea">
                user
            </aside>
            <footer>
                <div class="title"><?= WEBSITE_FOOTER ?></div>
                <div class="loadTime">
                    <output>the page loaded for %s</output>
                </div>
            </footer>
        </section>
    <script type="text/javascript" src="./public/js/main.js"></script>
</html>