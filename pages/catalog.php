<?php
session_start();
session_id();

if (empty($_SESSION['isLogin']) && $_SESSION['isLogin'] != true):
    header('location: login');
else: ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCNAME - ร้านค้า</title>
    <link rel="stylesheet" href="/assets/css/bulma.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="/assets/css/styles.css">
    <!-- line awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body>
    <?php include './components/nav.php' ?>

    <div class="shop-hero">
        <img class="shop-hero-bg" src="/assets/img/portal-bg.png" alt="">
    </div>

    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    ระบบร้านค้าเซิร์ฟเวอร์
                </h1>
                <h2 class="subtitle">
                    Hero subtitle
                </h2>
            </div>
        </div>
    </section>
    <div class="container mt-1 p-3">
        <div class="columns">
            <div class="column is-one-third">
                <article class="panel is-link" style="background: white;">
                    <p class="panel-heading">
                        <i class="las la-info"></i> ข้อมูลผู้เล่น
                    </p>
                    <div class="p-3">
                        <img class="player-avatar" src="https://minotar.net/avatar/moking55/100.png" alt="">
                        <p class="is-size-4"><b>PlayerName</b></p>
                        <p class="is-size-5"><i class="las la-coins"></i> 100 Points</p>
                        <p class="is-size-5 has-text-danger"><i class="las la-medal"></i> Not Premium</p>
                    </div>
                    <div class="p-3">
                        <a style="border-radius: 5px 5px 0px 0px;" class="button is-fullwidth  is-medium is-primary is-outlined"><i
                                class="las la-hand-holding-usd"></i> เติมเงินเข้าระบบ</a>
                        <a style="border-radius: 0px 0px 5px 5px;" class="button is-fullwidth  is-medium"><i class="las la-id-card"></i> โปรไฟล์ดิจิตอล</a>
                    </div>
                </article>
            </div>
            <div class="column">
                <article class="panel is-link" style="background: white;">
                    <p class="panel-heading">
                        <i class="las la-store-alt"></i> ร้านค้า
                    </p>
                    <div class="columns is-gapless p-1">
                        <div class="column m-1">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="https://bulma.io/images/placeholders/1280x960.png"
                                            alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <p class="subtitle">
                                        Item Name
                                    </p>
                                </div>
                                <footer class="card-footer">
                                    <p class="card-footer-item">
                                        <span>0.000100 BTC</span>
                                    </p>
                                    <a class="card-footer-item">
                                        ซื้อเลย
                                    </a>
                                </footer>
                            </div>
                        </div>
                        <div class="column m-1">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="https://bulma.io/images/placeholders/1280x960.png"
                                            alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <p class="subtitle">
                                        Item Name
                                    </p>
                                </div>
                                <footer class="card-footer">
                                    <p class="card-footer-item">
                                        <span>0.000100 BTC</span>
                                    </p>
                                    <a class="card-footer-item">
                                        ซื้อเลย
                                    </a>
                                </footer>
                            </div>
                        </div>
                        <div class="column m-1">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="https://bulma.io/images/placeholders/1280x960.png"
                                            alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <p class="subtitle">
                                        Item Name
                                    </p>
                                </div>
                                <footer class="card-footer">
                                    <p class="card-footer-item">
                                        <span>0.000100 BTC</span>
                                    </p>
                                    <a class="card-footer-item">
                                        ซื้อเลย
                                    </a>
                                </footer>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="copyright-bottom">
            <img class="copyright-img" src="/assets/img/Moking55.png" alt="">
            <p class="copyright-text"><b>MCName</b> Powered by <a href="#">MC-Mart.in.th</a></p>
            <p class="copyright-text">System & Design by <b>Codename_T</b></p>
            <p class="copyright-text">Copyright © 2021 MC-Mart. All Rights Reserved</b></p>
        </div>
    </div>
    </div>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/assets/js/custom.js"></script>
</body>

</html>

<?php endif; ?>