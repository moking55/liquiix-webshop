<?php
$RawJson = json_decode(file_get_contents("./configs/configs.json"), true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/bulma.min.css">
    <link rel="stylesheet" href="/assets/css/rpgui.min.css">
    <script src="/assets/js/rpgui.min.js"></script>
    <style>
        @font-face {
            font-family: 'ZFTERMIN__';
            src: url(./assets/fonts/ZFTERMIN__.ttf);
        }
    </style>
</head>

<body class="rpgui-cursor-default">
    <div class="hero is-fullheight is-dark has-background" style="font-family: 'ZFTERMIN__' !important;">
        <canvas class="background bottom-gradient"></canvas>
        <video class="hero-background is-transparent" autoplay muted loop id="myVideo">
            <source src="./assets/img/bg_video.mp4" type="video/mp4">
        </video>
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title" style="font-size: 60pt;">
                    <?= $RawJson['Server_Name'] ?>
                </h1>
                <h3 class="subtitle is-4">
                    <div id="typed-strings">
                        <p>ยินดีต้อนรับผู้เล่นทุกท่าน</p>
                        <p>เข้าสู่โลก RPG</b> แห่ง <?= $RawJson['Server_Name'] ?></p>
                    </div>
                    <span id="typed"></span>
                </h3>

                <button onclick="CopyAddress()" style="font-family: 'ZFTERMIN__' !important;" class="rpgui-button"><i class="las la-play"></i>
                    เริ่มเล่นเลย</button>
                <a class="sscroll" href="#introduce"><button style="font-family: 'ZFTERMIN__' !important;" class="rpgui-button" type="button"><i class="las la-book-open"></i> อ่านเพิ่มเติม</button></a>
            </div>
        </div>
        <div class="moving-mouse-holder">
            <div class="mouse">
                <div class="mouse-button">&nbsp;</div>
            </div>
            <div class="text">เลื่อนลง <br> เพื่อดูเพิ่มเติม</div>
        </div>
    </div>


    <div class="hero is-fullheight is-dark has-background" id="introduce">
        <img alt="Title-image" class="hero-background is-transparent" src="./assets/img/portal-bg4.png" />
        <div class="hero-title">
            <h2 class="is-size-2">History and Mystery</h2>
        </div>
        <div class="hero-body">
            <div class="container">
                <div class="columns mt-5">
                    <div class="column">
                        <img style="border-radius: 6px;" src="assets/img/portal-history.png" alt="">
                        <center><button onclick="window.open('/docs')" type="button" class="rpgui-button has-text-white">
                                <p>ไปยังศูนย์ช่วยเหลือผู้เล่น</p>
                            </button></center>
                    </div>
                    <div class="column">
                        <div class="rpgui-container framed-golden-2 m-2">
                            <img src="./assets/img/spartan-png.png" style="width:25%;float: left;margin-right: 15px;">
                            <p style="text-indent: 50px;">
                                น็อค หลินจือแชมปิยอง เดี้ยงเฟอร์รี่ รองรับเต๊ะสโตนปอดแหกคอนเทนเนอร์ เดี้ยงอ่วมควิก
                                สจ๊วตโพสต์พฤหัสเทรลเล่อร์เกรย์ ชนะเลิศสเปคไฮเวย์เอนทรานซ์ กีวีชาร์จตื้บบาบูนซูม
                                ซูมวันเวย์มุมมองเพรส เป่ายิงฉุบ บัสรากหญ้าโรลออน
                                โปรดิวเซอร์เอาท์ดอร์แครกเกอร์เวอร์แกสโซฮอล์ มอลล์ รีโมตแดนเซอร์แล็บสกาย
                                แอพพริคอทโฟมสุนทรีย์วิทย์ โลโก้ตื้บตะหงิดซิมโฟนี่

                            </p>

                            <p>
                                ถ่ายทำแดรี่แตงกวาโปรโมท ฮ่องเต้ผลักดัน ป่าไม้ฮ็อตสแตนดาร์ด มิลค์
                                ลิสต์ดิสเครดิตเจ๊แมคเคอเรลคอมเมนต์ เซ็กซ์แซลมอนพาสเจอร์ไรส์
                                เดี้ยงคอรัปชั่นซูเอี๋ยแอลมอนด์ พรีเซ็นเตอร์ออร์เดอร์คอนเซ็ปต์ ม้งมือถือเฟรชเยอบีร่าบู๊
                                หงวนฟลุตถูกต้องอีสต์ ไอเดียบ๊วยสารขัณฑ์ ออสซี่โหลนเที่ยงวัน โกเต็กซ์พูลสลัมปักขคณนา
                                สังโฆมวลชนสไตรค์สามแยกกีวี เจไดเบนโลฮิดั๊มพ์ โกลด์

                            </p>
                        </div>
                        <div class="rpgui-container framed-golden-2 m-2">
                            <img src="./assets/img/house.png" style="width:25%;float: left;margin-right: 15px;">
                            <p style="text-indent: 50px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Debitis blanditiis ex ipsam nam
                                nostrum aperiam nobis praesentium unde, similique repudiandae quas asperiores, ullam
                                error dolor numquam fugiat eos dolorum rerum.</p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo minus suscipit minima
                                accusamus? Veniam, accusamus unde. Reiciendis tempore atque sequi molestiae. Unde at
                                consequuntur, itaque voluptatum incidunt blanditiis eius iure?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="hero is-fullheight is-dark has-background">
        <img alt="Title-image" class="hero-background is-transparent" src="./assets/img/market-bg2.png" />
        <div class="hero-title m-4">
            <h2 class="is-size-2">Market & Community</h2>
        </div>
        <div class="hero-body">
            <div class="container">
                <div class="columns has-text-centered">
                    <div class="column">
                        <div class="rpgui-container framed-golden m-2">
                            <p style="text-indent: 50px;">
                                น็อค หลินจือแชมปิยอง เดี้ยงเฟอร์รี่ รองรับเต๊ะสโตนปอดแหกคอนเทนเนอร์ เดี้ยงอ่วมควิก
                                สจ๊วตโพสต์พฤหัสเทรลเล่อร์เกรย์ ชนะเลิศสเปคไฮเวย์เอนทรานซ์ กีวีชาร์จตื้บบาบูนซูม
                                ซูมวันเวย์มุมมองเพรส เป่ายิงฉุบ บัสรากหญ้าโรลออน
                                โปรดิวเซอร์เอาท์ดอร์แครกเกอร์เวอร์แกสโซฮอล์ มอลล์ รีโมตแดนเซอร์แล็บสกาย
                                แอพพริคอทโฟมสุนทรีย์วิทย์ โลโก้ตื้บตะหงิดซิมโฟนี่
                            </p>
                        </div>
                        <button onclick="window.open('/shop')" class="rpgui-button has-text-white">ไปยังร้านค้า</button>
                        <button class="rpgui-button has-text-white">ไปยังระบบประมูล</button>
                    </div>
                    <div class="column">
                        <img style="height: 500px;" src="./assets/img/Wandering_Trader.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hero is-fullheight is-dark has-background">
        <img alt="Title-image" class="hero-background is-transparent" src="./assets/img/skills_bg.jpg" />
        <div class="hero-title m-4">
            <h2 class="is-size-2">Skills & Ablities</h2>
        </div>
        <div class="hero-body">
            <div class="container">
                <div class="columns has-text-centered">
                    <div class="column">
                        <img style="height: 500px;" id="skills" src="./assets/img/skills1.png" alt="">
                        <div class="rpgui-container framed has-text-centered" style="font-family: 'ZFTERMIN__' !important;">
                            <p id="skills_name" class="is-size-4">Adventure</p>
                        </div>
                    </div>
                    <div class="column">
                        <button onclick="SetSkills(0)" type="button" class="rpgui-button has-text-white">
                            <p>Adventure</p>
                        </button>
                        <button onclick="SetSkills(1)" type="button" class="rpgui-button has-text-white">
                            <p>Knight</p>
                        </button>
                        <button onclick="SetSkills(2)" type="button" class="rpgui-button has-text-white">
                            <p>Wizard</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="has-text-white p-1" style="background: url(./assets/img/grass.jpg);background-size: 50px;">
        <img style="width: 46px;margin-right: 8px;vertical-align: middle;" src="./assets/img/Moking55.png" alt=""><span>System & Design by <b>Codename_T</b></span>
    </div>
    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/particles.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.onload = function() {
            Particles.init({
                selector: '.background',
                color: '#ffffff',
                speed: 0.2,
                maxParticles: 70,
            });
        };

        $(document).ready(function() {

            $(".sscroll").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1000, function() {
                        window.location.hash = hash;
                    });
                }
            });
        });

        skillsImages = [
            './assets/img/skills1.png',
            './assets/img/skills2.png',
            './assets/img/skills3.png'
        ]

        skillsName = [
            'Adventure',
            'Knight',
            'Wizard'
        ]

        function SetSkills(skills) {
            document.getElementById("skills").src = skillsImages[skills];
            document.getElementById("skills_name").innerHTML = skillsName[skills];
        }

        function Clipboard_CopyTo(value) {
            var tempInput = document.createElement("input");
            tempInput.value = value;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);
        }

        function CopyAddress() {
            Clipboard_CopyTo('Server IP Address');
            Swal.fire({
                icon: 'success',
                title: 'สำเร็จ',
                text: 'คัดลอกไอพีเซิร์ฟเวอร์แล้ว เวอร์ชั่น 1.16.x',
            })
        }
    </script>
</body>

</html>