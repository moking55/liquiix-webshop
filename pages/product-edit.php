<?php

session_start();
$ProductID = $_GET['pid'];
if ($_SESSION['isLogin'] === true && $_SESSION['is_admin'] === 1) :
    require_once './configs/database.php';
    $result = $dbcon->query("SELECT * FROM products WHERE pid='" . $ProductID . "'");
    $data = $result->fetch_assoc();
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
                    <div class="notification is-danger">
                        <b>สำคัญ:</b>
                        <p>รูปภาพสินค้าจะไม่สามารถแก้ไขได้อีก หากต้องการเปลี่ยนรูปโปรดลบสินค้าแล้วลงใหม่</p>
                    </div>

                    <div class="columns">
                        <div class="column">
                            <img src="<?= $data['product_image'] ?>" alt="">
                            <h2 class="is-size-3"><span style="color: null;">เรตราคา พอยต์(Point)</span></h2>
                            <p>1 Point ต่อ 1 บาทไทย</p>
                            <h2 class="is-size-3"><span style="color: null;">พารามิเตอร์</span></h2>
                            <p>สามารถใส่ <b>[Player]</b> แทนชื่อผู้เล่นเป้าหมายได้</p>
                        </div>
                        <div class="column">
                            <form name="product_edit_form" id="product_edit_form">
                                <div class="box">
                                    <div class="field">
                                        <label class="label">PID</label>
                                        <div class="control">
                                            <input class="input" type="text" placeholder="Text input" name="pid" value="<?= $data['pid'] ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">ชื่อสินค้า</label>
                                        <div class="control">
                                            <input class="input" type="text" placeholder="Text input" name="p_name" value="<?= $data['product_name'] ?>">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">คำอธิบาย</label>
                                        <div class="control">
                                            <input class="input" type="text" placeholder="Text input" name="p_detail" value="<?= $data['product_detail'] ?>">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">ราคา</label>
                                        <div class="control">
                                            <input class="input" type="number" placeholder="Number input" name="p_price" value="<?= $data['product_price'] ?>">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">คำสั่ง *ไม่ต้องมีเครื่องหมาย "/"</label>
                                        <div class="control has-icons-left">
                                            <input class="input" type="text" placeholder="Text input" name="p_command" value="<?= $data['product_command'] ?>">
                                            <span class="icon is-small is-left">
                                                /
                                            </span>
                                        </div>
                                    </div>
                                    <div class="field is-grouped">
                                        <div class="control">
                                            <button type="button" onclick="EditProduct()" class="button is-link">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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