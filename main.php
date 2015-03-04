<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
		<!-- jQuery library (served from Google) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<!-- bxSlider Javascript file -->
		<script src="js/jquery.bxslider.min.js"></script>
		<!-- bxSlider CSS file -->
		<link href="/lib/jquery.bxslider.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<title>Form@Cup</title>
	</head>
	<body>
		
		<div id="header">
			<div class="connexion">
				<ul>
					<li><a href="#"><img src="connexion.png">Connexion</a></li>
					<li><a href="#"><img src="inscription.png">Inscription</a></li>
				</ul>
			</div>
			
			<div id="logo">
				<img src="logo.png"/>
			</div>

			<div id="nav">	
				<div class="content">
					<ul id="sdt_menu" class="sdt_menu">
						<li>
							<a href="main.php">
								<img src="images/2.jpg" alt=""/>
								<span class="sdt_active"></span>
								<span class="sdt_wrap">
									<span class="sdt_link">Acceuil</span>
									<span class="sdt_descr">News</span>
								</span>
							</a>
						</li>
						<li>
							<a href="page1.php">
								<img src="images/1.jpg" alt=""/>
								<span class="sdt_active"></span>
								<span class="sdt_wrap">
									<span class="sdt_link">Formations</span>
									<span class="sdt_descr">Travail</span>
								</span>
							</a>
							<div class="sdt_box">
									<a href="Photos.html">Photos</a>
									<a href="Videos.html">Vidéos</a>
									<a href="Projets.html">Projets</a>
							</div>
						</li>
						<li>
							<a href="page2.php">
								<img src="images/3.jpg" alt=""/>
								<span class="sdt_active"></span>
								<span class="sdt_wrap">
									<span class="sdt_link">Ton profil</span>
									<span class="sdt_descr">Quel formation te conviendrait?</span>
								</span>
							</a>
						</li>
						<li>
							<a href="page3.php">
								<img src="images/4.png" alt=""/>
								<span class="sdt_active"></span>
								<span class="sdt_wrap">
									<span class="sdt_link">Nous contacter</span>
									<span class="sdt_descr">Comment nous contacter</span>
								</span>
							</a>
						</li>
					</ul>
				</div>
		        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
				<script type="text/javascript" src="jquery.easing.1.3.js"></script>
		        <script type="text/javascript">
		            $(function() {
		                $('#sdt_menu > li').bind('mouseenter',function(){
							var $elem = $(this);
							$elem.find('img')
								 .stop(true)
								 .animate({
									'width':'170px',
									'height':'170px',
									'left':'0px'
								 },400,'easeOutBack')
								 .andSelf()
								 .find('.sdt_wrap')
							     .stop(true)
								 .animate({'top':'140px'},500,'easeOutBack')
								 .andSelf()
								 .find('.sdt_active')
							     .stop(true)
								 .animate({'height':'170px'},300,function(){
								var $sub_menu = $elem.find('.sdt_box');
								if($sub_menu.length){
									var left = '170px';
									if($elem.parent().children().length == $elem.index()+1)
										left = '-170px';
									$sub_menu.show().animate({'left':left},200);
								}	
							});
						}).bind('mouseleave',function(){
							var $elem = $(this);
							var $sub_menu = $elem.find('.sdt_box');
							if($sub_menu.length)
								$sub_menu.hide().css('left','0px');
							
							$elem.find('.sdt_active')
								 .stop(true)
								 .animate({'height':'0px'},300)
								 .andSelf().find('img')
								 .stop(true)
								 .animate({
									'width':'0px',
									'height':'0px',
									'left':'85px'},400)
								 .andSelf()
								 .find('.sdt_wrap')
								 .stop(true)
								 .animate({'top':'25px'},500);
						});
		            });
		        </script>
			</div>
		</div>
		
		<div id="bandeau">
			<p> </p>
		</div>
		
		<div id="agenda">
			<h3>Agenda</h3>
			<script type="text/javascript">
		        calendrier();
		    </script>
		</div>
		
		<div id="article">
			<div id="tete">
				<h1>Accueil</h1>
			</div>
			<div id="contenu">
				<p>Watsup?</p>
			</div>
			<div id="pied">
				<ul>
					<li>Publi&eacute; le 08/02/15</li>
					<li>Modifi&eacute le 09/02/15</li>
				</ul>
			</div>
		</div>
		
		
		<div id="footer">
			<ul>
				<li>@Mentions l&eacute;gales</li>
				<li>Nous contacter au 06 06 06 06 06</li>
			</ul>
		</div>
	</body>
</html>