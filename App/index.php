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
            <div class="block-title">Menu</div>
            <ul>
                <li data-link="register">Register</li>
                <li data-link="about-us">About Us</li>
            </ul>
        </nav>
        <main>
            <div class="block-title">Main content</div>
            <div class="block-content padding" id="root">
                ...
            </div>
        </main>
        <aside class="userArea">
            <div class="block-title">User Area</div>
            <div class="block-content padding">
                login form etc...
            </div>
            <div class="block-title">Other stuff</div>
            <div class="block-content padding">
                something else<br />
                something else<br />
                something else<br />
                something else<br />
                something else
            </div>
        </aside>
        <footer>
            <div class="title"><?= WEBSITE_FOOTER ?></div>
            <div class="loadTime">
                <output>the page loaded for %s</output>
            </div>
        </footer>
    </section>
    <script type="text/javascript" src="./public/js/main.js"></script>
</body>

</html>