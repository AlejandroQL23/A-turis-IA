<!DOCTYPE html>
<html lang="en">
<head>
<title>Buscar</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">


<style>
.select_style 
{
	width: calc((100% - 30px) / 2);
	height: 48px;
	font-size: 14px;
	font-weight: 400;
    border: 1px solid #fff;
    background-color: transparent;
	color: #000000;
	border-bottom: solid 2px #e1e1e1;
}

.select_title
{
	font-size: 16px;
	font-weight: 700;
	color: #FFFFFF;
	text-transform: uppercase;
}
.select_map
{
	width: 400px;
	height: 250px;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background: linear-gradient(to right, #fa9e1b, #8d4fff, #fa9e1b);
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  color: black;
  padding: 8px;
}

tr:nth-child(even) {
	background: linear-gradient(to right, #fa9e1b, #8d4fff, #fa9e1b);
}

.youtube{
	text-decoration:none;
	font-weight: 600;
	font-size: 12px;
	color:white;
	padding-top:12px;
	padding-bottom:12px;
	padding-left:30px;
	padding-right:30px;
	background-color:#31124b;
	border-color: #d8d8d8;
	border-width: 1px;
	border-style: solid;
	border-radius:35px;

}

.imgTable{


	width: 70px;
	height: 70px;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	z-index: 1;

}

</style>

</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone">+506 8888-8888</div>
						<div class="social">
							<ul class="social_list">
								<li class="social_list_item"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">Turistea</a></div>
						</div>
						<div class="main_nav_container ml-auto">
						<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php">home</a></li>
								<li class="main_nav_item"><a href="hoteles.php">Hoteles</a></li>
								<li class="main_nav_item"><a href="mirador-parque.php">Mirador/Parque</a></li>
								<li class="main_nav_item"><a href="edificios.php">Edificios antiguos</a></li>
								<li class="main_nav_item"><a href="restaurantes.php">Restaurantes</a></li>
								<li class="main_nav_item"><a href="senderos.php">Senderos</a></li>
								<li class="main_nav_item"><a href="cataratas.php">Cataratas</a></li>
								<li class="main_nav_item"><a href="buscar.php">busqueda</a></li>
							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>
						
						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php">home</a></li>
								<li class="main_nav_item"><a href="hoteles.php">Hoteles</a></li>
								<li class="main_nav_item"><a href="mirador-parque.php">Mirador/Parque</a></li>
								<li class="main_nav_item"><a href="edificios.php">Edificios antiguos</a></li>
								<li class="main_nav_item"><a href="restaurantes.php">Restaurantes</a></li>
								<li class="main_nav_item"><a href="senderos.php">Senderos</a></li>
								<li class="main_nav_item"><a href="cataratas.php">Cataratas</a></li>
								<li class="main_nav_item"><a href="buscar.php">busqueda</a></li>
				</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">B??squeda</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Contact Form -->
					<div class="contact_form_container">
						<form action="#" id="contact_form" class="contact_form text-center">
							<div class="row">
								<div class="col-md-6">
									<div class="select_title text-center">Tipo: </div> 
										<select name="Tipo" class="select_style" required="required"> 
											<option value="1">Catarata</option>
											<option value="2">Hotel</option>
											<option value="3">Edificio Antiguo</option>
											<option value="4">Sendero</option>
											<option value="5">Parque</option>
											<option value="6">Restaurante</option>
											<option value="7">Mirador</option>
										</select>
									</div>
								<div class="col-md-6">
								<div class="select_title">Precio: </div> 
										<select name="precio" class="select_style" required="required"> 
										<option value="1">$</option>
										<option value="2">$$</option>
										<option value="3">$$$</option>
									</select>
								</div>
							</div>
							<hr/>
							<div class="row">
								<div class="col-md-6">
									<div class="select_title">Cant??n: </div> 
										<select name="Canton" class="select_style" required="required"> 
											<option value="1">Cartago</option>
											<option value="2">Para??so</option>
											<option value="3">La Uni??n</option>
											<option value="4">Jim??nez</option>
											<option value="5">Turrialba</option>
											<option value="6">Alvarado</option>
											<option value="7">Oreamuno</option>
											<option value="8">El Guarco</option>
										</select>
									</div>
								<div class="col-md-6">
								<div class="select_title">Tipo de calle: </div> 
										<select name="tipoCalle" class="select_style" required="required"> 
											<option value="1">Lastre</option>
											<option value="2">Asfalto</option>
										</select>
								</div>
							</div>
							<hr/>
						<br/>
						<br/>

							<div class="row">
								<div class="col-md-6">
									<div class="travelix_map">
										<div class="col-md-4"></div>
										<div class="col-md-4">
											<div id="google_map" class="select_map">
												<div class="map_container">
													<div id="map"></div>
												</div>
											</div>
										</div>
										<div class="col-md-4"></div>
									</div>
								</div> 
								<div class="col-md-6">

								<hr><hr>
								<input type="text" id="X" class="contact_form_name input_field" placeholder="X" value="9.8667198" data-error="Name is required." readonly>
								<hr>
								<input type="text" id="Y" class="contact_form_name input_field" placeholder="Y" value="-83.9286393" data-error="Name is required." readonly>
								<hr><hr>

								</div>
							</div>

							<button type="submit" id="form_submit_button" class="form_submit_button button trans_200">Buscar<span></span><span></span><span></span></button>

						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

	<h2>Resultados</h2>

<table>
  <tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Tipo calle</th>
	<th>Cant??n</th>
	<th>Imagen</th>
	<th>Video</th>
  </tr>
  <tr>
    <td>Catarata Las Trillizas</td>
    <td>$</td>
    <td>lastre</td>
	<td>Turrialba</td>
	<td><img src="images/1.jpg" alt="Italian Trulli" class="imgTable"></td>
	<td>
	<a href="https://www.youtube.com/watch?v=tcGF1K60cWc&ab_channel=QueBuenLugar" target="_blank">
        <input type="button"  class="youtube" value="video">
    </a>
	</td>
  </tr>
  <tr>
    <td>Catarata La Muralla</td>
    <td>$</td>
    <td>lastre</td>
	<td>Turrialba</td>
	<td><img src="images/3.jpg" alt="Italian Trulli" class="imgTable"></td>
	<td>
	<a href="https://www.youtube.com/watch?v=dHb3-YNArnE&ab_channel=QueBuenLugar" target="_blank">
        <input type="button"  class="youtube" value="video">
    </a>
	</td>
  </tr>
  <tr>
    <td>Catarata La Bruja</td>
    <td>$</td>
    <td>lastre</td>
	<td>Turrialba</td>
	<td><img src="images/2.jpg" alt="Italian Trulli" class="imgTable"></td>
	<td>
	<a href="https://www.youtube.com/watch?v=0SydyUzbZOU&ab_channel=QueBuenLugar" target="_blank">
        <input type="button"  class="youtube" value="video">
    </a>
	</td>
  </tr>
  <tr>
    <td>Aquiares Waterfall</td>
    <td>$</td>
    <td>lastre</td>
	<td>Turrialba</td>
	<td><img src="images/aqui.jpg" alt="Italian Trulli" class="imgTable"></td>
	<td>
	<a href="https://www.youtube.com/watch?v=BLAHIAgWPrA&ab_channel=QueBuenLugar" target="_blank">
        <input type="button"  class="youtube" value="video">
    </a>
	</td>
  </tr>
  <tr>
    <td>Catarata de Nano</td>
    <td>$</td>
    <td>lastre</td>
	<td>Para??so</td>
	<td><img src="images/6.jpg" alt="Italian Trulli" class="imgTable"></td>
	<td>
	<a href="https://www.youtube.com/shorts/pMVWSXhZjDo?&ab_channel=SebastianMart%C3%ADnez" target="_blank">
        <input type="button" class="youtube" value="video">
    </a>
	</td>
  </tr>

</table>





<!-- Footer -->
<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="images/logo.png" alt="">Turistea</a></div>
							</div>
							<p class="footer_about_text">Turiste es una aplicaci??n para que puedas encontrar la mejor opci??n de lugares, seg??n tus preferencias</p>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">Informac??on de contacto</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">8888-8888</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">turistea@cartago.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="https://colorlib.com">www.turistea.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a></div>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>

</body>

</html>