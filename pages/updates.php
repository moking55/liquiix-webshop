<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCNAME - ร้านค้า</title>
    <link rel="stylesheet" href="./assets/css/bulma.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="./assets/css/styles.css">
    <!-- line awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@creativebulma/bulma-divider@1.1.0/dist/bulma-divider.min.css">
</head>

<body>
    <?php include './components/nav.php' ?>
    <div class="shop-hero">
        <img class="shop-hero-bg" src="./assets/img/portal-bg3.png" alt="">
    </div>

    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    ข่าวสารและอัพเดต
                </h1>
            </div>
        </div>
    </section>

    <!-- Image -->
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-8 is-offset-2">
                        <figure class="image is-16by9">
                            <img src="./assets/img/first-post.png" alt="">
                        </figure>
                    </div>
                </div>
                <?php
                include './configs/database.php';

                $qry = "SELECT * FROM news ORDER BY id DESC";
                $result = $dbcon->query($qry);

                while ($data = $result->fetch_assoc()) { ?>

                    <section class="section">
                        <div class="divider"><?= $data['news_date'] ?></div>
                        <div class="columns">
                            <div class="column is-8 is-offset-2">
                                <div class="box">
                                    <div class="content is-medium">
                                        <h1 class="title"><?= $data['news_title'] ?></h1>
                                        <div class="divider is-left"><?= $data['news_editor'] ?></div>
                                        <?= $data['news_content'] ?>
                                    </div>
                                </div>
                            </div>
                    </section>
                <?php } ?>
            </div>

        </div>
        </div>
    </section>


    <div class="container">
        <div class="copyright-bottom">
            <img class="copyright-img" src="./assets/img/Moking55.png" alt="">
            <p class="copyright-text"><b>MCName</b> Powered by <a href="#">MC-Mart.in.th</a></p>
            <p class="copyright-text">System & Design by <b>Codename_T</b></p>
            <p class="copyright-text">Copyright © 2021 MC-Mart. All Rights Reserved</b></p>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/custom.js"></script>
</body>

</html>