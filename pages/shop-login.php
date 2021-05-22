<?php
session_start();

if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] === true) :
    header('location: catalog');
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

        <div class="hero is-fullheight is-dark has-background">
            <img alt="Title-image" class="hero-background is-transparent" src="/assets/img/portal-bg2.jpg" />
            <div class="hero-body">
                <div class="container">
                    <div class="columns">
                        <div class="column is-half is-offset-one-quarter">
                            <div class="box">
                                <article class="media">
                                    <div class="media-content">
                                        <form method="POST" id="login_form" name="login_form">
                                            <div class="content">
                                                <p class="is-size-4 has-text-centered">โปรดเข้าสู่ระบบเพื่อดำเนินการต่อ</p>
                                                <div class="field">
                                                    <label class="label">Username - ชื่อในเกม</label>
                                                    <div class="control">
                                                        <input id="u_playername" name="u_playername" class="input" type="text" placeholder="ป้อนชื่อในเกม">
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <label class="label">Password - รหัสผ่าน</label>
                                                    <div class="control">
                                                        <input id="u_password" name="u_password" class="input" type="password" placeholder="ป้อนรหัสผ่าน">
                                                    </div>
                                                </div>
                                                <div class="field is-grouped">
                                                    <div class="control">
                                                        <button id="submitValue" name="submitValue" type="button" onclick="LoginChk()" class="button is-primary">เข้าสู่ระบบ</button>
                                                    </div>
                                                    <div class="control">
                                                        <button class="button is-outlined">ยกเลิก</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </article>
                            </div>
                            <div class="copyright-bottom">
                                <img class="copyright-img" src="/assets/img/Moking55.png" alt="">
                                <p class="copyright-text"><b>MCName</b> Powered by <a href="#">MC-Mart.in.th</a></p>
                                <p class="copyright-text">System & Design by <b>Codename_T</b></p>
                                <p class="copyright-text">Copyright © 2021 MC-Mart. All Rights Reserved</b></p>
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

<?php endif; ?>