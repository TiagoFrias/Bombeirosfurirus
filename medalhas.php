<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bombeiros | Medalhas</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="../res/fontawesome/css/all.css"/>
    <link rel="stylesheet" href="css/main.css" type="text/css"/>
</head>

<body>
    <!-- Page Preloder -->
   <!-- <div id="preloder">-->
   <!--     <div class="loader"></div>-->
   <!-- </div>-->


    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="./index.php">
                            <img src="img/logo.png" alt="" height="50px" width="50px">
                        </a>
                    </div>
                </div>
                <?php include_once('navbar.php')?>
                <div class="col-lg-3">
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/medal.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Medalhas</h2>
                        <div class="bt-option">
                            <a href="./index.php">Principal</a>
                            <span>Medalhas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Class Details Section Begin -->
    <section class="class-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="class-details-text">
                        <div class="cd-pic">
                            <img src="img/classes/class-details/class-detailsl.jpg" alt="">
                        </div>
                        <div class="cd-text">
                            <div class="cd-single-item">
                                <h3>Tipos de Distinções Honoríficas</h3>
                                <p>
                                    Os tipos de Distinções Honoríficas da Liga dos Bombeiros Portugueses são os seguintes:
                                </p>
                                <p>
                                    a) Grande Colar de Mérito;
                                </p>
                                <p>
                                    b) Colar de Mérito;
                                </p>
                                <p>
                                     c) Fénix de Honra;
                                </p>
                                <p>
                                     d) Crachá de Cidadania e Mérito;
                                </p>
                                <p>
                                     e) Crachá de Ouro;
                                </p>
                                <p>
                                    f) Medalha de Coragem e Abnegação;
                                </p>
                                <p>
                                    g) Medalha de Dedicação e Altruísmo;
                                </p>
                                <p>
                                     h) Medalhas de Serviços Distintos;
                                </p>
                                <p>
                                     i) Medalhas de Assiduidade;
                                </p>
                                <p>
                                     j) Medalha Quadro de Honra;
                                </p>
                                <p>
                                    k) Medalhas Comemorativas.
                                </p>
                            </div>
                            <div class="cd-single-item">
                                <h3>Cargos e Categorias</h3>
                                    <img src="img/cargos.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="sidebar-option">
                        <div class="so-latest">
                            <h5 class="title">Últimas Noticías</h5>
                            <?php 
                            $conn = new mysqli('localhost','root','','Pap_Login');
                            if($conn->connect_error){
                                die('Connection Failed: '.$con->connect_error);
                            }else{
                                $stmt = "select * from noticias";
                                $result = $conn->query($stmt);
                                while($row = $result->fetch_assoc()) {
                                    echo'
                                    <div class="latest-large set-bg" data-setbg="img/letest-blog/'.$row['n_imagem'].'" height="250px" width="250px">
                                        <div class="ll-text">
                                            <h5><a href="#">'.$row["n_titulo"].'</a></h5>
                                            <ul>
                                                <li>'.$row["n_data"].'</li>
                                            </ul>
                                        </div>
                                    </div>';
                                }
                            }
                            ?>
                            <div class="latest-large set-bg" data-setbg="img/audio.jpg">
                                    <br><br><br><br><br><br><audio src="img/hino5.mp3" type="audio/mp3" controls></audio>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Class Details Section End -->

    <!-- Class Timetable Section Begin -->
    <section class="class-timetable-section class-details-timetable spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="class-details-timetable_title">
                        <h5>Distintivos e Insígnias</h5>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="container">
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/colar1.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Grande Colar de Mérito</p>
                                    </div>               
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/colar2.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Colar de Mérito</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/colar3.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Fénix de Honra</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/colar4.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Crachá de Cidadania e Mérito</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/colar5.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Crachá de Ouro</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/colar6.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Medalha de Coragem e Abnegação</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/colar7.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Medalha de Dedicação e Altruísmo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/colar8-1.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Medalhas de Serviços Distintos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/colar8-2.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Medalhas de Serviços Distintos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/colar8-3.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Medalhas de Serviços Distintos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/colar9.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Medalha Quadro de Honra</p>
                                    </div>
                                </div>
                            </div><div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/colar10.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Medalhas Comemorativas</p>
                                    </div>
                                </div>
                            </div>

  </div>
</div>
            </div>
        </div>
    </section>
    <section class="class-timetable-section class-details-timetable spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="class-details-timetable_title">
                        <h5>Classes Honoríficas</h5>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="container">
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/fita1.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Classe Bombeiros</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/fita2.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Classe Dirigente</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/fita3.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Classe Sociedade Civil</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/fita4.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Título Póstumo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/fita5.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Classe Instituição</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/fita6.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Classe Instituição</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="img/fita7.png" alt="Card image cap" height="300px" width="300px">
                                    <div class="card-body">
                                        <p class="card-text">Classe Instituição</p>
                                    </div>
                                </div>
                            </div>
                        

  </div>
</div>
            </div>
        </div>
    </section>
    <!-- Class Timetable Section End -->

    <!-- Get In Touch Section Begin -->

    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/player.js"></script>
    



</body>

</html>