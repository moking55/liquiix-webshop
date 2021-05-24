<?php session_start() ?>

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
    

    <?php include ('./components/nav.php'); ?>

    <canvas class="background"></canvas>
    <div class="hero is-fullheight is-dark has-background">
        <img alt="Title-image" class="hero-background is-transparent" src="./assets/img/portal-bg4.png" />
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{MCName}}

                </h1>
                <h3 class="subtitle">
                    <div id="typed-strings">
                        <p>ยินดีต้อนรับผู้เล่นทุกท่าน</p>
                        <p>เข้าสู่โลกแห่ง <b>RPG</b> แห่ง {{MCName}}</p>
                        <p>ที่ๆเต็มไปด้วยความลับและอันตราย</p>
                    </div>
                    <span id="typed"></span>
                </h3>
                <a href="/shop/catalog" class="button is-primary is-outlined"><i class="las la-store-alt"></i> เข้าสู่ร้านค้า</a>
                <a href="/docs" class="button is-info is-outlined"><i class="las la-book-open"></i> คู่มือการเล่น</a>
            </div>
        </div>
    </div>

    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/particles.js"></script>
    <script>
        window.onload = function () {
            Particles.init({
                selector: '.background',
                color: '#ffffff',
                speed: 0.2,
                maxParticles: 70
            });
        };
        var typed = new Typed('#typed', {
            stringsElement: '#typed-strings',
            typeSpeed: 10,
            backDelay: 1600,
            loop: true,
            loopCount: Infinity,
        });

    </script>
</body>

</html>