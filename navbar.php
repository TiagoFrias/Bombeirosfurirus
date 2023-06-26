<?php 
    session_start();
?>
<div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="./index.php">Principal</a></li>
                            <li><a href="./sobre.php">Sobre nós</a></li>
                            <li><a href="./medalhas.php">Medalhas</a></li>
                            <li><a href="./maps/map.php">Incêndios</a></li>
                            <li><a href="./recrutamento.php">Recrutamento</a></li>
                            <li><a href="#">Equipamentos</a>
                                <ul class="dropdown">
                                    <li><a href="./incendios.php">Incêndios</a></li>
                                    <li><a href="./resgate.php">Resgate</a></li>
                                    <li><a href="./protecao.php">Proteção</a></li>
                                </ul>
                            </li>
                            <?php 
                                if(!isset($_SESSION['email'])) {
                                    echo '<li><a class="nav-link scrollto" href="http://localhost:8080/Bombeiros/Login/registration.php">Login</a></li>';
                                } else {
                                    
                                    echo'<li><a href="#">Conta</a>
                                        <ul class="dropdown">
                                            <li><a href="./perfil.php">Perfil</a></li>
                                            <li><a href="http://localhost:8080/Bombeiros/Login/logout.php">Logout</a></li>
                                        </ul>
                                    </li>';
                                    
                                }
                            ?>
                        </ul>
                    </nav>
                </div>