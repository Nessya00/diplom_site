<?php include("path.php"); ?>

    <!doctype html>
    <html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--    &lt;!&ndash; Подключение Bootstrap CSS через CDN &ndash;&gt;-->
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"

          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!--Custom styling-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">


    <title>My events</title>
</head>
<body>

<?php include("app/include/header.php"); ?>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->

<!--БЛОК main-->
<div class="container">
    <div class="content row">
        <!-- main content -->
        <div class="main-content col-md-8 col-12">
            <h2>Заголовок Заголовок Заголовок Заголовок Заголовок Заголовок Заголовок
                Заголовок Заголовок Заголовок </h2>

            <div class="single_post row">
                <div class="img col-12">
                    <img src="assets/img/kyber.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="info">
                    <i class="far fa-user">Имя Автора</i>
                    <i class="far fa-calendar">Mar 11, 2019</i>
                </div>
                <div class="single_post_text col-12">
                    <h3>Заголовок третьего уровня</h3>
                    <p>Lorem ipsum dolor sit amet, <a href="#"> consectetur </a> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pulvinar etiam non quam lacus. Arcu non odio euismod lacinia at. Gravida rutrum quisque non tellus orci ac. Sodales neque sodales ut etiam sit amet nisl purus. Etiam erat velit scelerisque in dictum non consectetur a. Venenatis lectus magna fringilla urna porttitor rhoncus dolor. Tortor posuere ac ut consequat. Aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Tellus integer feugiat scelerisque varius morbi enim. Dignissim suspendisse in est ante in nibh mauris cursus. Posuere urna nec tincidunt praesent semper feugiat. Vestibulum morbi blandit cursus risus at ultrices mi tempus. Pretium viverra suspendisse potenti nullam. Risus commodo viverra maecenas accumsan lacus vel facilisis volutpat.

                        Feugiat scelerisque varius morbi enim nunc faucibus. Tristique senectus et netus et malesuada fames ac turpis. In massa tempor nec feugiat nisl pretium fusce id velit. Egestas sed tempus urna et pharetra pharetra massa massa ultricies. Nunc eget lorem dolor sed. Nunc scelerisque viverra mauris in aliquam sem fringilla ut. Malesuada fames ac turpis egestas sed. Enim sed faucibus turpis in eu mi bibendum. Viverra tellus in hac habitasse platea dictumst vestibulum rhoncus est. Enim facilisis gravida neque convallis a. Quis commodo odio aenean sed adipiscing. A cras semper auctor neque vitae tempus quam pellentesque nec. Eu turpis egestas pretium aenean pharetra magna. Malesuada nunc vel risus commodo. Quam quisque id diam vel quam elementum pulvinar etiam.

                        At lectus urna duis convallis convallis tellus. Elit scelerisque mauris pellentesque pulvinar pellentesque. In nibh mauris cursus mattis molestie. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Id volutpat lacus laoreet non curabitur gravida arcu. Pharetra diam sit amet nisl suscipit. Elit eget gravida cum sociis natoque penatibus et. Nunc lobortis mattis aliquam faucibus purus. Sit amet consectetur adipiscing elit. Ut eu sem integer vitae justo eget magna. Dolor sit amet consectetur adipiscing. At erat pellentesque adipiscing commodo elit at imperdiet. Nisl suscipit adipiscing bibendum est. Molestie a iaculis at erat pellentesque adipiscing commodo elit at.</p>
                </div>
            </div>


        </div>
        <!--SIDEBAR-->
        <div class="sidebar col-md-3 col-12">

            <div class="section search">
                <h3>Search</h3>
                <form action="/" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Search...">
                </form>
            </div>
            <div class="section topics">
                <h3>Topics</h3>
                <ul>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Folk music</a></li>
                    <li><a href="#">Festival</a></li>
                    <li><a href="#">Master-class</a></li>
                    <li><a href="#">Discussions</a></li>
                    <li><a href="#">Exhibition</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
<!--БЛОК main end-->

<!--FOOTER-->
<?php include("app/include/footer.php"); ?>
<!--FOOTER end-->

</body>
    </html><?php
