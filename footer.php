	<footer>
			<div id="logo">
				<h2><a href="<?php echo home_url() ?>/"><?php bloginfo( 'name' ); ?></a></h2>
			</div>

			<nav id="footer_nav">
				<?php wp_nav_menu( array( 'container' => 'false', 'theme_location' => 'footer' ) ); ?>
			</nav>

	</footer>

</div><!-- end of wrapper -->
<?php wp_footer(); ?>
</body>
</html>