<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
        <!--CSS LAINNYA-->
        <style>
            .jumbotron{
                padding: 6rem 1rem;
                background: #e2edff;

            }
            .nav-link{
                color: white;
            }

            #projects{
                background: #e2edff;
            }

            section{
                padding-top: 5rem;
            }

            .container2 {
                width: 100%;
            }
            .navbar{
                padding-top: 10px;
                padding-bottom: 10px;
            }
        </style>
    <title>M. Irfan Maulana | <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <?php $__env->startSection('navbar'); ?>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
        <div class="container">
        <a class="navbar-brand" href="/">M. Irfan maulana</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkaria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="/">Home</a>
                <a class="nav-link active" href="/about">About</a>
                <a class="nav-link active" href="/projects">Projects</a>
                <a class="nav-link active" href="/contact">Contact</a>
                <a class="nav-link active" href="/login">Login</a>
            </div>
        </div>
        </div>
    </nav>
    <!--End of navbar--> 
    <?php echo $__env->yieldSection(); ?>

    <div class="container2">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <?php $__env->startSection('footer'); ?>
    <!--Footer-->
    <footer class="bg-dark text-white text-center p-3 tulisan">
        <p><a href="#" class="text-white fw-bold">Copyright @SMKN  1 SURABAYA</a></p>
    </footer>
    <!--End of footer-->
    <?php echo $__env->yieldSection(); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\zazizu\resources\views/master/layout.blade.php ENDPATH**/ ?>