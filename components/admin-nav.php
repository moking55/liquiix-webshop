<aside class="menu is-hidden-mobile">
    <p class="menu-label">
        General
    </p>
    <ul class="menu-list">
        <li><a href="/admin">หน้าแรก</a></li>
        <li><a href="/admin/products">จัดการสินค้า</a></li>
        <li><a href="<?= $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https' ? 'https://' : 'http://' . "docs." . $_SERVER['HTTP_HOST']."/dash.php?accesskey=8a611467800570dfefb66d8eae2971f4" ?>">คู่มือเซิร์ฟเวอร์</a></li>
    </ul>
    <p class="menu-label">
        Administration
    </p>
    <ul class="menu-list">
        <li>
            <a>จัดการผู้เล่น</a>
            <ul>
                <li><a>Points</a></li>
            </ul>
        </li>
    </ul>
    <p class="menu-label">
        Transactions
    </p>
    <ul class="menu-list">
        <li><a href="/admin/topup">ประวัติเติมเงิน</a></li>
        <li><a>ประวัติการซื้อ</a></li>
    </ul>
</aside>