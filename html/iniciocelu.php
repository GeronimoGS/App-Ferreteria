<?php 
//			html/Inicio.php
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="static/css/Inicioc.css">
	<style type="text/css">
		*{

	padding: 0;
	margin: 0;
	text-decoration: none;
	list-style: none;
	box-sizing: border-box;
}
html{
	scroll-behavior: smooth;
}


nav{
	background: #B79790;
	height: 80px;
	width: 100%;
	position: fixed;
	
}

.borde{
	background:  #566573  ;
	height: 2px;
	width: 100%;
	margin-top: 190px;
	position: fixed;
	
}
.enlace{
	position: absolute;
	padding: 15px 50px;
}
.logo{
	height: 50px;
}
nav ul{
	float: right;
	margin-right: 20px; 

}
nav ul li{
	display: inline-block;
	line-height: 80px;
	margin: 0 0px;

}
nav ul li a{
	color: #000000;
	font-family: arial;
	font-size: 18px;
	padding: 7px 13px;
	border-radius: 2px;
	text-transform: uppercase;


}
li a.active, li a:hover{
	background: #F7F4F2;
	transition: .5s;

}
.checkbtn{
	font-size: 30px;
	color: #fff;
	float: right;
	line-height: 100px;
	margin-right: 15px;
	cursor: pointer;
	display: none;
}
#check{
	display: none;
}
section{
	background: url(fondo-trigo.jpg) no-repeat;
	background-size: cover;
	background-position: center center;
	height: calc(100vh - 0px); 
}

@media (max-width: 1250px){
	.enlace{
		padding-left: 20px;
	}	
	nav{
	background: #B79790;
	height: 190px;
	width: 100%;
	position: fixed;
	
}
	nav ul li a{
		font-size: 14px;
		color: #000000;
		font-family: arial;
		padding: 70px 5px;
		border-radius: 2px;
		text-transform: uppercase;

	}

}

@media (max-width: 1250px){
	.checkbtn{
		display: block;

	}
	.img{
	 	height: 140px; ;
	 	 width:140px;
	 	 margin-top: 27px;
	 	 margin-right: 25px;
	}
	.enlace{
	position: absolute;
	padding: 15px 0px;
}
	.logo{
	height: 160px;
	margin-left: 10px;
	margin-top: 0px;
	}
	ul{
		position: fixed;
		width: 90%;
		height: 100%;
		background: #5d4f4d ;
		top: 190px;
		right: -100%;
		transition: all .5s;
		
	}
	
	nav ul li{

		display: block;
		height: 100px;
		margin: 60px 20px ;
		line-height: 30px;
		border: .5px solid white;

	}
	nav ul li a{
		font-size: 45px;

	}
	li a:hover, li a.active{
		background: none;
		color: white;
	}
	#check:checked ~ ul{
        right: 0;
    }
}
	</style>
</head>
	<body>
		<nav id="home">
				<input type="checkbox" id="check">
				<label for="check" class="checkbtn">
				   <img class="img" src="boton-menu.png"/>
				</label>
					<a href="" class="enlace"><img src="trigo.png" class="logo"></a>
					<ul id="home">
						<li><a  href="home">Home</a></li>
						<li><a  href="#quienes-somos">Quienes somos</a></li>
						<li><a  href="#como-funcionamos">Como funcionamos</a></li>
						<li><a  href="#beneficios">Beneficios</a></li>
						<li><a  href="#productos">Productos</a></li>
						<li><a  href="#contacto">Contacto</a></li>


					</ul>
		</nav>
		<nav class="borde"></nav>
		<section></section>
		<section id="quienes-somos">quines somos</section>
		<section id="como-funcionamos">como funcionamos</section>
		<section id="beneficios">beneficios</section>
		<section id="productos">productos</section>
		<section id="contacto">contacto</section>


	</body>
</html>