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
                                    ประวัติการเติมเงินทั้งหมด
                                </h1>
                            </div>
                        </div>
                    </section>
                    <div class="box">
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <table class="table is-fullwidth">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>วันที่ทำรายการ</th>
                                                <th>ชื่อผู้ทำรายการ</th>
                                                <th>จ่ายด้วย</th>
                                                <th>จำนวนเงิน</th>
                                                <th>สถานะ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            require_once './configs/database.php';

                                            $result = $dbcon->query("SELECT * FROM topup_history ORDER BY date DESC LIMIT 25");

                                            if ($result->num_rows > 0) {
                                                while ($data = $result->fetch_assoc()) {
                                            ?>
                                                    <tr>
                                                        <td></td>
                                                        <td><?= $data['date'] ?></td>
                                                        <td><?= $data['player_name'] ?></td>
                                                        <td><?= $data['medthod'] ?></td>
                                                        <td><?= $data['amount'] ?></td>
                                                        <td>

                                                            <?= $payment_status = ($data['status'] == "success") ? '<span class="tag is-primary">สำเร็จ</span>' : '<span class="tag is-danger">ล้มเหลว</span>'; ?>

                                                        </td>
                                                    </tr>
                                            <?php }
                                            } else {
                                                echo null;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </div>
        <script src="/assets/js/jquery-3.6.0.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="/assets/js/custom.js"></script>
    </body>

    </html>

<?php
else :
    header('location: shop/catalog');
endif;
?>