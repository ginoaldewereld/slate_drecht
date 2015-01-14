<?php
/*
Template Name: Homepage
*/
?>

<?php include_once('headerhome.php') ?>

	<div class="content-home u-gridContainer">
			<div class="u-gridRow">
				<div class="content-left u-gridCol8">
					<p>
						Drechtaccount is een kleinschalig en klantgericht administratiekantoor in het centrum van Dordrecht. 
						Onze cliëntenportefeuille bestaat voornamelijk uit MKB ondernemers in verschillende branches. 
						Drechtaccount kenmerkt zich door een grote mate van deskundigheid en persoonlijke betrokkenheid 
						bij u en uw onderneming waardoor wij u een administratie op maat kunnen aanbieden. 
					</p>
					<p>
						Drechtaccount is al jaren een begrip in Dordrecht. Door onze ruime praktijkervaring zijn wij zeer ver-trouwd met de gang van zaken in het bedrijfsleven waardoor wij u met raad en daad kunnen bijstaan. 
					</p>
					<p>
						Aan (startende) ondernemers leveren wij een uitgebreid pakket met o.a. verzorging administratie, 
						opstellen jaarstukken, aangiften vennootschapsbelasting en inkomstenbelasting, aangiften omzet- 
						en loonbelasting en het verzorgen van loonadministratie. 
					</p>
					<p>
						Tevens verzorgen wij voor particuliere klanten aangiften inkomstenbelasting. 
					</p>
				</div>
				<div class="content-right u-gridCol4">
					<img class="gebouw" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotogebouw.png" /> 
				</div>			
			</div>
			<div class="u-gridRow">
				<a href="/starterspakketten"><div class="u-gridCol4">
					<div class="circleicon">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon1.svg" />
						
					</div></a>
				</div>
				<a href="/diensten"><div class="u-gridCol4 pconly">
					<div class="circleicon">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon2.svg" />
						
					</div></a>
				</div>
				<a href="/diensten"><div class="u-gridCol4 pconly">
					<div class="circleicon">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon3.svg" />
						
					</div></a>
				</div>
			</div>
			<div class="u-gridRow icons">
				<div class="u-gridCol4">
					Starterspakketten
				</div>
				<div class="u-gridCol4 pconly">
					Ondernemers
				</div>
				<div class="u-gridCol4 pconly">
					Diensten
				</div>
			</div>
	</div>

<?php get_footer(); ?>
