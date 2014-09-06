		
		<footer id="mainfooter">
		<?php
		echo "\n" . $settings['footer_content'] . "\n";
		?>
		</footer>

		</div><!-- /main -->

		<?php
		// Output autoloades JS-files
		echo $settings['load_foot'];
		?>

	</div><!-- /container -->
    
    <?php 
	/* Google analytics */
    if($settings['google_analytics']) :
    ?>
    <!-- Google analytics -->
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', '<?php echo $settings['google_analytics_ua']; ?>', 'auto');
      ga('send', 'pageview');    
    </script>
    <?php
    endif;
	?>
</body>
</html>