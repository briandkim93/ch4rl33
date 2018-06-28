<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115543976-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag("js", new Date());
          gtag("config", "UA-115543976-1");
        </script>

        <title>ch4rl33</title>
        <link rel="shortcut icon" href="images/favicon.ico">
        <link href="css/index.css" type="text/css" rel="stylesheet">
        <!-- Social Media Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
        <div id="loading-page">
            <div class="loader" id="loader-a"></div>
            <div class="loader" id="loader-b"></div>
        </div>
        <div id="container-1">
            <img class="image-1" id="image-1a" src="images/header-a.jpg">
            <img class="image-1" id="image-1b" src="images/header-b.png">
            <img class="image-1" id="image-1c" src="images/c.png">
            <img id="image-arrows" src="images/arrows.png">
        </div>
        <div id="container-2">
            <div id="banner-1">
                <img src="images/banner-a.jpg">
            </div>
                <iframe id="soundcloud-player" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/381750977&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
        </div>
        <div id="container-3">
            <div id="downloads">
                <div class="album-row">
                    <figure class="album-cover">
                        <a href="music/iatrogen.zip" target="_blank"><img src="images/iatrogen-cover-500.jpg"></a>
                        <figcaption class="album-title">IATROGEN (2018)</figcaption>
                    </figure>
                    <figure class="album-cover">
                        <a href="music/astral.zip" target="_blank"><img src="images/astral-cover-500.jpg"></a>
                        <figcaption class="album-title">ASTRAL EP (2016)</figcaption>
                    </figure>
                </div>
                <div class="album-row">
                    <figure class="album-cover">
                        <a href="music/oms-2.zip" target="_blank"><img src="images/oms-2-cover-500.jpg"></a>
                        <figcaption class="album-title">OMS 2 (2014)</figcaption>
                    </figure>
                    <figure class="album-cover">
                        <a href="music/oms-1.zip" target="_blank"><img src="images/oms-1-cover-500.jpg"></a>
                        <figcaption class="album-title">OMS 1 (2012)</figcaption>
                    </figure>
                </div>
                <div class="album-row">
                    <figure class="album-cover">
                        <a href="music/ny-i-xxxxd-you.zip" target="_blank"><img src="images/ny-cover-350.jpg"></a>
                        <figcaption class="album-title">NY, I XXXXD YOU (2011)</figcaption>
                    </figure>
                    <figure class="album-cover hidden">
                        <img src="images/astral-cover-500.jpg">
                        <figcaption class="album-title">PLACE HOLDER</figcaption>
                    </figure>
                </div>
            </div>
            <div id="banner-2">
                <img src="images/banner-b.jpg">
            </div>
        </div>
        <div id="social-media-bar">
            <a href="https://www.facebook.com/ch4rl33/" title="Facebook" class="fa fa-facebook" target="_blank"></a>
            <a href="https://soundcloud.com/charlee" title="Soundcloud" class="fa fa-soundcloud" target="_blank"></a>
            <a href="https://itunes.apple.com/us/artist/ch4rl33/561222446" title="iTunes" class="fa fa-apple" target="_blank"></a>
            <a id="email-button" class="fa fa-envelope"></a>
        </div>
        <div id="email-box">
            <span class="email-close">x</span>
            <form id="email-form" method="post" action="email.php">
                <p>
                    <label for="name">NAME: </label>
                    <input id="name" class="text-field" type="text" name="name" value="<?php echo $name; ?>">
                </p>
                <p>
                    <label for="email">EMAIL: </label>
                    <input id="email" class="text-field" type="email" name="email" value="<?php echo $email; ?>">
                </p>
                <p>
                    <label for="message">MESSAGE: </label>
                    <textarea id="message" class="text-field" name="message"><?php echo $message; ?></textarea>
                </p>
                <p>
                    <input id="email-send" type="submit" name="send" value="Send">
                </p>
            </form>
        </div>
        <div id="email-sent-confirmation">
            <span class="email-sent-confirmation-close">x</span>
            <p>Message Sent</p>
        </div>

        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/index.js"></script>
    </body>
</html>