<?php
session_start();
if (empty($_SESSION['isLogin']) && $_SESSION['isLogin'] != true) :
    header('location: login');
else :

    require_once './configs/database.php';

    $playername = $_SESSION['PlayerName'];
    $qry = "SELECT username,Points FROM cmi_users WHERE username = '$playername'";
    $result = $dbcon->query($qry);
    $data = $result->fetch_assoc();


?>

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
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
                            <img class="player-avatar" src="https://minotar.net/avatar/<?= $data['username'] ?>/100.png" alt="">
                            <p class="is-size-4"><b><?= $data['username'] ?></b></p>
                            <p class="is-size-5"><i class="las la-coins"></i> <?= $data['Points'] ?></p>
                            <p class="is-size-5 has-text-danger"><i class="las la-medal"></i> Not Premium</p>
                        </div>
                        <div class="p-3">
                            <a href="/shop/topup" style="border-radius: 5px 5px 0px 0px;" class="button is-fullwidth  is-medium is-primary is-outlined"><i class="las la-hand-holding-usd"></i> เติมเงินเข้าระบบ</a>
                            <a style="border-radius: 0px 0px 5px 5px;" class="button is-fullwidth  is-medium"><i class="las la-id-card"></i> โปรไฟล์ดิจิตอล</a>
                        </div>
                    </article>
                </div>

                <?php
                $qry = "SELECT * FROM products";
                $result = $dbcon->query($qry);
                ?>

                <div class="column">
                    <article class="panel is-link" style="background: white;">
                        <p class="panel-heading">
                            <i class="las la-store-alt"></i> ร้านค้า
                        </p>
                        <form action="">
                            <div class="columns is-multiline p-3">
                                <?php
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($data = $result->fetch_assoc()) { ?>
                                        <div class="column is-4 p-2">
                                            <div class="card">
                                                <div class="card-image">
                                                    <figure class="image is-4by3">
                                                        <img src="<?= $data["product_image"] ?>">
                                                    </figure>
                                                </div>
                                                <div class="card-content">
                                                    <p class="subtitle">
                                                        <?= $data["product_name"] ?>
                                                        <hr>
                                                        <?= $data["product_detail"] ?>
                                                    </p>
                                                </div>
                                                <footer class="card-footer">
                                                    <p class="card-footer-item">
                                                        <span><?= $data["product_price"] ?> Point</span>
                                                    </p>
                                                    <a onclick="BuyItem(<?= $data['pid'] ?>,'<?= $playername ?>')" class="card-footer-item">
                                                        ซื้อเลย
                                                    </a>
                                                </footer>
                                            </div>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "ไม่มีข้อมูล";
                                } ?>
                            </div>
                        </form>


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

<?php
    $dbcon->close();
endif;
?>