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
            <h2>Последние публикации</h2>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/img/kyber.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья...</a>
                    </h3>
                    <i class="far fa-user">Имя Автора</i>
                    <i class="far fa-calendar">Mar 11, 2019</i>
                    <p class="prewiew-text">
                        Мы в настоящее время находимся в процессе разработки этого веб-ресурса и
                        скоро представим здесь полноценное содержание. Мы приносим извинения за
                        временное неудобство.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/img/kyber2.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья...</a>
                    </h3>
                    <i class="far fa-user">Имя Автора</i>
                    <i class="far fa-calendar">Mar 11, 2019</i>
                    <p class="prewiew-text">
                        Мы в настоящее время находимся в процессе разработки этого веб-ресурса и
                        скоро представим здесь полноценное содержание. Мы приносим извинения за
                        временное неудобство.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/img/kyber3.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья...</a>
                    </h3>
                    <i class="far fa-user">Имя Автора</i>
                    <i class="far fa-calendar">Mar 11, 2019</i>
                    <p class="prewiew-text">
                        Мы в настоящее время находимся в процессе разработки этого веб-ресурса и
                        скоро представим здесь полноценное содержание. Мы приносим извинения за
                        временное неудобство.
                    </p>
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
</html>