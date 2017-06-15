	<!-- Footer -->
	<footer id="main-footer">
		
		<div class="footer-call-to-action">
			
			<div class="contact cols">

				<div class="col3">
					<h3>Sobre Ecuador</h3>
					<p>Ecuador, oficialmente denominado Rep&uacute;blica del Ecuador, es un pa&iacute;s soberano situado en la regi&oacute;n noroccidental de Am&eacute;rica del Sur.</p>
					<a href="#">Ver m&aacute;s [+]</a>
				</div>


				<div class="col3">
					<h3>Últimos Ecodestinos</h3>
				<ul>
					<li><a href="#">Yanayacu</a></li>
					<li><a href="#">El Pedregal</a></li>
					<li><a href="#">Olympus</a></li>
					<li><a href="#">La Monta&ntilde;ita</a></li>
				</ul>
				</div>


				<div class="col3">
					<h3>Reg&iacute;strese</h3>
					<form>
					<input type="text" name="Nombre" id="Nombre" placeholder="Nombre completo">
					<input type="text" name="email" id="email" placeholder="email">
					<input type="submit" name="enviar" id="enviar" class="submit" value="Enviar" onclick="return fm_submit_onclick(2)">
					</form>
				</div>

			</div>
			
		</div><!-- /.footer-call-to-action -->
		
		<div id="bottom-footer" class="container cf">
			
			<!-- Copyright -->
			<div class="copyright">
				&copy; 2017 - Mi Destino Ecuador. Todos los derechos reservados.
			</div>

			<div class="planb">
				Desarrollado por 
				<a href="http://www.planb.ec" target="_blank"><img src="img/logo_planB.png" title="PlanB.ec"></a>
			</div>
			

			
		</div><!-- /#bottom-footer -->
		
	</footer>
<script src="js/functions.js"></script>

</div>

	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/rem.min.js"></script>
	
	<script>
		jQuery('document').ready(function($){
		
			$('.flexslider').flexslider({
				selector: ".slides > .testimonio",
				animation: "slide",
				controlNav: false,
				directionNav: true,
				prevText: "Anterior",
				nextText: "Siguiente", 
			});
		
		});
	</script>

</body>
</html>


