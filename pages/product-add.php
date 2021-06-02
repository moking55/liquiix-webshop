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
                    <section class="info-tiles">
                        <div class="tile is-ancestor has-text-centered">
                            <div class="tile is-parent">
                                <article class="tile is-child box">
                                    <p class="title">s</p>
                                    <p class="subtitle">Users</p>
                                </article>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child box">
                                    <p class="title">59k</p>
                                    <p class="subtitle">Products</p>
                                </article>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child box">
                                    <p class="title">3.4k</p>
                                    <p class="subtitle">Open Orders</p>
                                </article>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child box">
                                    <p class="title">19</p>
                                    <p class="subtitle">Exceptions</p>
                                </article>
                            </div>
                        </div>
                    </section>
                    <div class="columns">
                        <div class="column is-6">
                            <div class="card events-card">
                                <header class="card-header">
                                    <p class="card-header-title">
                                        ข่าวสาร
                                    </p>
                                    <a href="#" class="card-header-icon" aria-label="more options">
                                        <span class="icon">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                </header>
                                <div class="card-table">
                                    <div class="content">
                                        <table class="table is-fullwidth is-striped">
                                            <tbody>
                                                <?php
                                                include './configs/database.php';

                                                $qry = "SELECT * FROM news";
                                                $result = $dbcon->query($qry);

                                                while ($data = $result->fetch_assoc()) { ?>
                                                    <tr>
                                                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                        <td><?= $data['news_title'] ?></td>
                                                        <td class="level-right"><a class="button is-small is-warning" href="#">แก้ไข</a><a class="button is-small is-danger" href="#">ลบ</a></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <footer class="card-footer">
                                    <a href="/admin/news/add" class="card-footer-item">เขียนใหม่</a>
                                </footer>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title">
                                        คู่มือการเล่น
                                    </p>
                                    <a href="#" class="card-header-icon" aria-label="more options">
                                        <span class="icon">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <a class="button is-fullwidth">ตั้งค่าคู่มือการเล่น</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title">
                                        User Search
                                    </p>
                                    <a href="#" class="card-header-icon" aria-label="more options">
                                        <span class="icon">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        <div class="control has-icons-left has-icons-right">
                                            <input class="input is-large" type="text" placeholder="">
                                            <span class="icon is-medium is-left">
                                                <i class="fa fa-search"></i>
                                            </span>
                                            <span class="icon is-medium is-right">
                                                <i class="fa fa-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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