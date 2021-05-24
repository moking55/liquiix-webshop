<?php
session_start();
if (empty($_SESSION['isLogin']) && $_SESSION['isLogin'] != true) :
    header('location: login');
else : ?>

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
            <img class="shop-hero-bg" src="/assets/img/market-bg2.png" alt="">
        </div>
        <div class="container">
            <div class="columns p-3 topup-panel">
                <div class="column is-three-fifths is-offset-one-fifth">
                    <article class="panel is-link" style="background: white;">
                        <p class="panel-heading">
                            <i class="las la-store-alt"></i> เติมเงินเข้าระบบ
                        </p>
                        <div class="tabs">
                            <ul>
                                <li id="TW_Tab" class="tab is-active" onclick="toTruewallet()"><a>True Wallet</a></li>
                                <li id="History-tab" class="tab" onclick="toHistory()"><a>ประวัติการทำรายการ</a></li>
                            </ul>
                        </div>
                        <form method="POST" id="TW_form" name="TW_form">
                            <div class="p-4">
                                <img class="payment-logo" src="/assets/img/wallet_logo.png" class="image" alt="">
                                <div class="field">
                                    <label class="label">ชื่อในเกม</label>
                                    <div class="control">
                                        <input id="playername" name="playername" class="input" type="text" value="<?= $_SESSION['PlayerName'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">ลิ้งค์อั่งเปา Truewallet</label>
                                    <div class="control">
                                        <input id="giftcode" name="giftcode" class="input" type="text" placeholder="วางลิ้งค์ที่นี่">
                                    </div>
                                </div>
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button id="submitValue" name="submitValue" onclick="TW_Topup()" type="button" class="button is-link is-fullwidth">เติมเงิน</button>
                                    </div>
                                </div>
                            </div>
                            <div class="notification">
                                <b>อัตราการเติมเงิน:</b>
                                <p>1บาท = 1 Point</p>
                            </div>
                        </form>
                        <div class="p-4 is-hidden" name="History" id="History">
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

                                $result = $dbcon->query("SELECT * FROM topup_history WHERE player_name='moking55' ORDER BY date DESC LIMIT 25");
        
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

                                    <?= $payment_status = ($data['status'] == "success") ? '<span class="tag is-primary">สำเร็จ</span>' : '<span class="tag is-danger">ล้มเหลว</span>' ; ?>
                                        
                                    </td>
                                </tr>
                                <?php }} else { echo null;} ?>
                            </tbody>
                        </table>
                    </div>

                    </article>
                    <div class="columns is-mobile">
                        <div class="column">
                            <div class="copyright-bottom">
                                <img class="copyright-img" src="/assets/img/Moking55.png" alt="">
                                <p class="copyright-text"><b>MCName</b> Powered by <a href="#">MC-Mart.in.th</a></p>
                                <p class="copyright-text">System & Design by <b>Codename_T</b></p>
                                <p class="copyright-text">Copyright © 2021 MC-Mart. All Rights Reserved</b></p>
                            </div>
                        </div>
                        <div class="column is-one-quarter">
                            <div class="copyright-bottom">
                                <img class="ssl-img" src="/assets/img/ssl-img.svg" alt="">
                            </div>
                        </div>
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
    $dbcon->close();
endif;
?>