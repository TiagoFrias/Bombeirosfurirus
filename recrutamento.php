<?php
    require 'inserir.php';
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bombeiros | Recrutamento</title>

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
    
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

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
    <section class="breadcrumb-section set-bg" data-setbg="img/recrutamento.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Recrutamento</h2>
                        <div class="bt-option">
                            <a href="./index.php">Principal</a>
                            <span>Recrutamento</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
    <div class="container">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 30px 0 #FF4600; 
      }
      .banner {
      position: relative;
      height: 210px;
      background-image:linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url("img/recruit.jpg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.5); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      p.top-info {
      margin: 10px 0;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #FF4600;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 8px 0 #FF4600;
      color: #FF4600;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio] {
      width: 0;
      visibility: hidden;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 25px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #FF4600;
      }
      label.radio:after {
      content: "";
      position: absolute;
      width: 8px;
      height: 4px;
      top: 6px;
      left: 5px;
      background: transparent;
      border: 3px solid #FF4600;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #FF4600;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #FF4600;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="inserir.php" method="POST">
        <div class="banner">
          <h1>Recrutamento</h1>
        </div>
        <div class="item">
          <p>Nome</p>
          <div class="name-item">
            <input type="text" name="r_nome" placeholder="Nome" />
          </div>
        </div>
        <div class="item">
          <p>Data de Nascimento</p>
          <input type="date" name="r_data" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="question">
          <p>Carta de Condução</p>
          <div class="question-answer">
            <input type="radio" value="Sim" id="radio_1" name="r_carta"/>
            <label for="radio_1" class="radio"><span>Sim</span></label>
            <input type="radio" value="Não" id="radio_2" name="r_carta" />
            <label for="radio_2" class="radio"><span>Não</span></label>
          </div>
        </div>
        <div class="question">
          <p>Género</p>
          <div class="question-answer">
            <input type="radio" value="Masculino" id="radio_3" name="r_genero"/>
            <label for="radio_3" class="radio"><span>Masculino</span></label>
            <input type="radio" value="Feminino" id="radio_4" name="r_genero" />
            <label for="radio_4" class="radio"><span>Feminino</span></label>
          </div>
        </div>
        <div class="item">
          <p>Contacto Telefónico</p>
          <input type="text" name="r_telefone"/>
        </div>
        <div class="item">
          <p>Email</p>
          <input type="text" name="r_email"/>
        </div>
        <div class="item">
          <p>Morada</p>
          <input type="text" name="r_morada" placeholder="Rua"/>
          <div class="city-item">
            <input type="text" name="r_postal" placeholder="Código Postal" />
            <select>
              <option value="">País</option>
              <option value="1">Portugal</option>
            </select>
          </div>
        </div>
        <div>
          <button name="recrutamento" href="recrutamento.php" type="submit">Enviar</button>
        </div>
      </form>
    </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- About US Section Begin -->
    <!-- Team Section End -->


    <!-- Banner Section End -->


    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

   


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>