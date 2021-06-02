<?php

session_start();
if ($_SESSION['isLogin'] === true && $_SESSION['is_admin'] === 1) : ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ส่วนควบคุมระบบ</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

        <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/admin.css">
    </head>

    <body>

        <!-- START NAV -->
        <nav class="navbar is-white">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item brand-text">
                        i-Admin Lite by Codename_T
                    </a>
                    <div class="navbar-burger burger" data-target="navMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div id="navMenu" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href="/shop/catalog">
                            กลับไปหน้าร้านค้า
                        </a>
                        <a class="navbar-item" href="admin.html">
                            Reports
                        </a>
                    </div>

                </div>
            </div>
        </nav>
        <!-- END NAV -->
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <?php include './components/admin-nav.php' ?>
                </div>
                <div class="column is-9">
                    <section class="hero is-info welcome is-small">
                        <div class="hero-body">
                            <div class="container">
                                <h1 class="title">
                                    Hello, <?= $_SESSION['PlayerName'] ?>
                                </h1>
                                <h2 class="subtitle">
                                    I hope you are having a great day!
                                </h2>
                            </div>
                        </div>
                    </section>
                    <div class="box">
                        <article class="media">
                            <div class="media-left">
                                <figure class="image is-64x64">
                                    <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                                </figure>
                            </div>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                                        <br>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <a class="level-item" aria-label="reply">
                                            <span class="icon is-small">
                                                <i class="fas fa-reply" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                        <a class="level-item" aria-label="retweet">
                                            <span class="icon is-small">
                                                <i class="fas fa-retweet" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                        <a class="level-item" aria-label="like">
                                            <span class="icon is-small">
                                                <i class="fas fa-heart" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </div>
        <script async type="text/javascript" src="../js/bulma.js"></script>
    </body>

    </html>

<?php
else :
    header('location: shop/catalog');
endif;
?>