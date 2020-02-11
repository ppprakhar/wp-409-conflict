<?php
/*
Plugin Name: Resolve 409 Conflict
Plugin URI: #
Description: Solve WordPress 409 Conflict issue ( major-ly faces in case of Contact Form 7 and after update wordpress version 5.3)
Author: Prakhar kant Tripathi
Version: 1.0
Author URI: #
*/
add_action('wp_head', function () {
    ?>
  <script type="text/javascript">
		function getCookie(name) {
			var value = "; " + document.cookie;
			var parts = value.split("; " + name + "=");
			if (parts.length == 2) return parts.pop().split(";").shift();
		}

		var accept = getCookie("humans_21909");
		if (accept != 1) {
			document.cookie = "humans_21909=1; path=<?php echo home_url() ?>";
			console.log("ok");
			(function() {
				if( window.localStorage ) {
					if( !localStorage.getItem('firstLoad') ) {
						console.log("refresh");
						localStorage['firstLoad'] = true;
						window.location.reload();
					} else
						localStorage.removeItem('firstLoad');
				}
			})();
		}
	</script>
  <?php
});
