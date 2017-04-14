<?php 
 function notify_added()
 {
 	if(isset($_SESSION['added'])){ 
	?>
	<script type="text/javascript">
	  swal("Success!", "Succcessfully Added!", "success");
	</script>
	<?php
	}
 }

 function notify_updated()
 {
 	if(isset($_SESSION['updated'])){ 
	?>
	<script type="text/javascript">
	  swal("Success!", "Succcessfully updated!", "success");
	</script>
	<?php
	}
 }