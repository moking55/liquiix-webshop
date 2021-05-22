document.addEventListener('DOMContentLoaded', () => {

    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach(el => {
            el.addEventListener('click', () => {

                // Get the target from the "data-target" attribute
                const target = el.dataset.target;
                const $target = document.getElementById(target);

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

            });
        });
    }
});


/* AuthCheck */

function LoginChk() {
    if (document.getElementById("u_password").value.length < 8 || document.getElementById("u_playername").value.length < 3) {
        Swal.fire(
            'รหัสผ่านหรือชื่อในเกมสั้นเกินไป',
            'โปรดป้อนข้อมูลของท่านใหม่',
            'error'
        )
        return false
    } else {
        $.ajax({
            type: "POST",
            url: "../core/auth_check.php",
            data: $("#login_form").serialize(),
            success: function (result) {
                if (result.status == 1) // Success
                {
                    Swal.fire({
                        title: 'สำเร็จ',
                        text: result.message,
                        icon: 'success',
                        confirmButtonText: 'ตกลง',
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.replace('catalog')
                        }
                    })
                } else // Err
                {
                    Swal.fire({
                        title: 'เกิดข้อผิดพลาด',
                        text: result.message,
                        icon: 'error',
                        confirmButtonText: 'ตกลง',
                    })
                }
            }
        });
    }
}

/* Logout */
function logout() {
    $.ajax({
        url: "../core/logout.php",
        success:
            Swal.fire({
                title: 'สำเร็จ',
                text: 'ออกจากระบบแล้ว',
                icon: 'success',
                confirmButtonText: 'ตกลง',
                allowOutsideClick: false
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace('/')
                }
            })
    });
}
