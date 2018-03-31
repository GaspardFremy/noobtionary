<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $title ?></title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Material Iconic Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">


    <!-- CSS link -->
    <link rel="stylesheet" href="./public/css/main.css">
    <?php if(isset($css)){echo $css;}?>
</head>

<body>

    <div class="mobile-container m-auto">

        <img src="./public/img/status-bar.png" class="status-bar" alt="">

        <?php if(!isset($headernav)){echo '<div class="p-4"></div>';}?>

        <?php if (isset($headernav) AND $headernav === 'activate') { ?>
                    <nav class="navbar navbar-dark noob-color headernav d-flex justify-content-between">

                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <a class="navbar-brand " href="#">Noobtionary</a>

                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    Dropdown link
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <form class="form-inline waves-effect waves-light">
                          <i class="zmdi zmdi-search zmdi-hc-2x"></i>
                       </form>
                </nav>

        <?php } ?>



            <?= $content ?>


        <?php if (isset($footernav) AND $footernav === 'activate') { ?>
            <nav class="navbar footernav">

                <a href="index.php?action=newOnes">
                    <div class="d-flex flex-column <?php if(isset($page) AND $page === 'newOnes'){echo 'noob-color-font';} ?>">
                        <i class="zmdi zmdi-refresh footer-icon text-center <?php if(isset($page) AND $page === 'newOnes'){echo 'noob-color-font';}else{echo'footer-icon-inactive';} ?>"></i>
                        <span class="text-center">new ones</span>
                    </div>
                </a>

                <a href="index.php?action=addDef">
                    <div class="d-flex flex-column <?php if(isset($page) AND $page === 'addDef'){echo 'noob-color-font';} ?>">
                        <i class="zmdi zmdi-plus footer-icon text-center <?php if(isset($page) AND $page === 'addDef'){echo 'noob-color-font';}else{echo'footer-icon-inactive';} ?>"></i>
                        <span class="text-center">add Def</span>
                    </div>
                </a>

                <a href="index.php?action=top">
                    <div class="d-flex flex-column <?php if(isset($page) AND $page === 'top'){echo 'noob-color-font';} ?>">
                        <i class="zmdi zmdi-star footer-icon text-center <?php if(isset($page) AND $page === 'top'){echo 'noob-color-font';}else{echo'footer-icon-inactive';} ?>"></i>
                        <span class="text-center">top</span>
                    </div>
                </a>


            </nav>
        <?php } ?>

    </div>
    <!-- end mobile-container -->





    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>

   <script src="./public/js/script.js"></script>

</body>
</html>
