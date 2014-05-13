
<div class="popup">
	<div class="popclose lytebox-close">CLOSE</div>

	<h1>This is an external page</h1>


	<?php 
		if($_GET){
			echo 'Your data: <pre>';
				print_r($_GET);
			echo '</pre>';
		}

		else{
			'no data';
		}
	?>


	<a href="#" class="lytebox-close">trigger close</a>
</div>

<style type="text/css">
.popup{
	width:600px; 
	height:400px;
	background: #fff; 
	margin: 0 auto; 
	padding: 20px; 
	position:relative;
	border: solid 10px #333; 
	font:12px arial;
}

.popclose{
	position: absolute;
	cursor: pointer;
	right: 0;
	top: 0;
	padding: 20px;
}

</style>
