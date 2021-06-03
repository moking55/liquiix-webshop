<?php

session_start();
if ($_SESSION['isLogin'] === true && $_SESSION['is_admin'] === 1) :
    include './configs/database.php';
    $result = $dbcon->query("SELECT pid,product_name,product_price,product_command FROM products");

?>
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
                                    จัดการสินค้า
                                </h1>
                                <h2 class="subtitle">
                                    <a class="button" href="/admin/products/add">เพิ่มสินค้า</a>
                                </h2>
                            </div>
                        </div>
                    </section>
                    <div class="box">
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th><abbr title="Product ID">PID</abbr></th>
                                                <th>Name</th>
                                                <th>Price (Points)</th>
                                                <th>Command</th>
                                                <th colspan="2">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($data = $result->fetch_assoc()) { ?>
                                                <tr>
                                                    <th><?= $data['pid'] ?></th>
                                                    <td><?= $data['product_name'] ?></td>
                                                    <td><?= $data['product_price'] ?></td>
                                                    <td><?= "/" . $data['product_command'] ?></td>
                                                    <td><a href="/admin/products/add">แก้ไข</a></td>
                                                    <td><a class="text-danger" onclick="DeleteProduct(<?= $data['pid'] ?>)">ลบ</a></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
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
        <script async type="text/javascript" src="/assets/js/custom.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>

    </html>

<?php
else :
    header('location: shop/catalog');
endif;
?>