<?php

session_start();
if ($_SESSION['isLogin'] === true && $_SESSION['is_admin'] === 1) : ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>เพิ่มข่าวสาร</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <!-- Bulma Version 0.9.0-->
        <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/admin.css">
    </head>

    <body style="background-color: #e0e0e0;">
        <div class="container">
            <div class="columns">
                <div class="column is-three-fifths is-offset-one-fifth">
                    <div class="box mt-5">
                        <form method="POST" id="news_form" name="news_form">
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <div class="field">
                                            <label class="label">หัวข้อข่าว / อัพเดต</label>
                                            <div class="control">
                                                <input id="news_title" name="news_title" class="input" type="text" placeholder="ป้อนหัวข้อตรงนี้">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="label">เนื้อหา</label>
                                            <div class="control">
                                                <textarea id="news_content" name="news_content" rows="10" cols="80"></textarea>
                                            </div>
                                        </div>
                                        <button type="button" id="submitValue" name="submitValue" onclick="AddNews()" class="button">
                                            <span>+ เพิ่มข้อมูล</span>
                                        </button>
                                    </div>
                                </div>
                            </article>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('news_content');
    </script>
    </body>

    </html>
<?php
else :
    header('location: catalog');
endif;
?>