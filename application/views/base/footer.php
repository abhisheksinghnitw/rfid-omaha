        <div class="row hidden-print">
        	<hr>
        	<footer>
        		<p>
        			<span class="pull-right" data-step="10" data-intro="Contact WSDC for any queries, feedback, suggestions">
        				<!-- <em>page rendered in <?php echo $this->benchmark->elapsed_time();?> sec</em> |  -->
        				<span class="glyphicon glyphicon-envelope"> </span> <a href="mailto: wsdc.nitw@gmail.com" target="_blank">  wsdc.nitw@gmail.com</a> | 
        				<span class="glyphicon glyphicon-copyright-mark"></span> 2014, WSDC NITW
        			</span>
        		</p>
        	</footer>
            <br><br>
        </div>
    </div>
    <script src="<?php echo asset_url()."js/bootstrap.min.js"; ?> "></script>
    <script src="<?php echo asset_url()."js/intro.min.js"; ?> "></script>
    <script src="<?php echo asset_url()."js/offcanvas.js"; ?> "></script>
    <?php
    if (isset($scripts)) {
    	foreach ($scripts as $index => $script) {
    		?>
    		<script src="<?php echo asset_url()."js/".$script; ?>"></script>
    		<?php
    	}
    }
    ?>
    <script>
    	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    	ga('create', 'UA-46078676-2', 'nitw.ac.in');
    	ga('send', 'pageview');

    </script>
    <div id='overlay' class="hide loading-box">
        <img src="<?php echo asset_url()."images/728.gif";?>">
    </div>
</body>
</html>
