<nav class="navbar is-fixed-top is-transparent" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger burger has-text-white" aria-label="menu" aria-expanded="false"
                data-target="Main_Nav">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="Main_Nav" class="navbar-menu">
            <div class="navbar-start">
                <a href="/shop" class="navbar-item has-text-white">
                    หน้าแรก
                </a>

                <a href="/shop/catalog" class="navbar-item has-text-white">
                    ร้านค้า
                </a>
                <a href="/news" class="navbar-item has-text-white">
                    ข่าวสาร
                </a>
                <a href="<?= $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https://':'http://'."docs.". $_SERVER['HTTP_HOST'] ?>" class="navbar-item has-text-white">
                    คู่มือการเล่น
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link has-text-white">
                        เพิ่มเติม
                    </a>

                    <div class="navbar-dropdown">
                        <a href="/action" class="navbar-item has-text-white">
                            ระบบประมูล
                        </a>
                        <a href="/me" class="navbar-item has-text-white">
                            โปรไฟล์ดิจิตอล
                        </a>
                        <a href="/about" class="navbar-item has-text-white">
                            เกี่ยวกับเรา
                        </a>
                        <hr class="navbar-divider">
                        <a href="/report" class="navbar-item has-text-white">
                            รายงานปัญหา
                        </a>
                    </div>
                </div>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                    <?php
                    if ($_SERVER['REQUEST_URI'] === "/shop/login"){
                        echo null;
                    }else if (empty($_SESSION['isLogin'])) {
                        echo '<a onclick="window.location.replace(\'shop/login\')" class="button is-primary"><strong>เข้าสู่ระบบ</strong></a>';
                    } else if ($_SESSION['isLogin'] === true) {
                        echo '<a onclick="logout()" class="button is-danger"><strong>ออกจากระบบ</strong></a>';
                    } ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>