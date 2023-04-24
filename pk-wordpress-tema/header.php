<?php /* header */ ?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naslovna</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="icon" type="img/icon.svg" href="img/logo.svg">
	<?php wp_head(); ?>
</head>

<div class="header">
    <div class="navbar-logo">
        <img src="img/logo.svg" alt="">
        <br/>
        <h3>PLIVAČKI KLUB <span style="color: #E78225">NOVI ZAGREB</span></h3>
    </div>
</div>

    <nav>
        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
            <ul class="menu">

                <li><a href="index.html">Naslovna</a></li>

                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-1" class="toggle">O nama +</label>
                    <a href="o-nama.html">O nama</a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                        <li><a href="o-nama.html">O klubu</a></li>
                        <li><a href="#">Što treba znati za upis</a></li>
                        <li><a href="#">Kućni red</a></li>
                        <li><a href="#">Članarina. pravilnik</a></li>
                        <li><a href="#">Zdravstveni status članova</a></li>
                        <li><a href="#">Uprava</a></li>
                        <li><a href="#">10 zapovijedi</a></li>
                        <li><a href="#">Odlazak na natjecanja, pravilnik</a></li>
                        <li><a href="#">Radno vrijeme tajništva</a></li>
                    </ul> 
                </li>

                <li>
                    <!-- Drugi Drop Down -->
                    <label for="drop-2" class="toggle">Miting Sv. Patrik +</label>
                    <a href="#">Miting Sv. Patrik</a>
                    <input type="checkbox" id="drop-2"/>
                    <ul>
                        <li><a href="#">Miting Sv. Patrik 2023.</a></li>
                        <li><a href="#">Miting Sv. Patrik 2022.</a></li>
                        <li><a href="#">Miting Sv. Patrik 2021.</a></li>
                    </ul>
                </li>

                <li>
                    <!-- Treći Tier Drop Down -->
                    <label for="drop-3" class="toggle">Maraton ZG OPEN +</label>
                    <a href="#">Maraton ZG OPEN</a>
                    <input type="checkbox" id="drop-3"/>
                    <ul>
                        <li><a href="#">Zagreb OPEN 2015.</a></li>
                        <li><a href="#">Zagreb OPEN 2014.</a></li>
                        <li><a href="#">Zagreb OPEN 2013.</a></li>
                        <li><a href="#">Zagreb OPEN 2012.</a></li>
                        <li><a href="#">Zagreb OPEN 2011.</a></li>
                    </ul>
                </li>

                <li>
                    <!-- Četvrti Tier Drop Down -->
                    <label for="drop-4" class="toggle">Jarunksa plivačka liga +</label>
                    <a href="#">Jarunksa plivačka liga</a>
                    <input type="checkbox" id="drop-4"/>
                    <ul>
                        <li><a href="#">JPL 2019.</a></li>
                        <li><a href="#">JPL 2018.</a></li>
                        <li><a href="#">JPL 2017.</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
<body <?php body_class(); ?>>