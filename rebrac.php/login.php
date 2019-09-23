<html>

<head>
    <? include('includes/meta.php'); ?>
    <? include('includes/css.php'); ?>
</head>

<body>

    <div class="container" data-aos="fade-up">
        <!-- Under Nav -->
        <? include('includes/undernav.php'); ?>

        <!-- Menu Nav -->
        <? include('includes/navbar.php'); ?>
    </div>
    <div class="pa-40 set-bg-blue container-fluid">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
            <h2 class="title_cliente">Área do Cliente - Login</h2>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row my-5">
            <div class="mb-3">
                <span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit
                </span>
            </div>
            <div class="col-5">
                <input type="email" class="form-control" autocomplete="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-MAIL" required />
            </div>
            <div class="col-5">
                <input type="password" class="form-control" autocomplete="current-password" placeholder="SENHA" />
            </div>
            <div class="col-2">
            <button class="btn btn-primary btn-client font-weight-bolder set-bg-blue text-uppercase"> Entrar </button>
            </div>
        </div>
        </div>

        <!-- Carousel2 -->
        <? include('includes/carousel2.php'); ?>
        <!-- Footer -->
        <? include('includes/footer.php'); ?>
        <!-- Scripts -->
        
</body>
<? include('includes/js.php'); ?>
<? include('includes/analytics.php'); ?>

</html>