<?php
/*
 * Author: Augusto Principe
 * Subject: Casino Test
 */
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Test Casino - Augusto Principe">
		<meta name="author" content="augusto.principecacciola@gmail.com">
		<title>GusCasinos</title>
		<!-- -->
		<link rel="stylesheet" href="<?php echo base_url('/resources/css/normalize.css');?>" type="text/css">
  		<link rel="stylesheet" href="<?php echo base_url('/resources/css/skeleton.css');?>" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url('/resources/css/styles.css');?>" type="text/css">
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
		<!-- Sweet alerts -->
		<script src="<?php echo base_url('/resources/js/sweet-alert.js');?>"></script>
		<script src="<?php echo base_url('/resources/js/sweet-alert.min.js');?>"></script>
  		<link rel="stylesheet" href="<?php echo base_url('/resources/css/sweetalert.css');?>">
  		<!-- End Sweet alerts -->
  		<script type="text/javascript" src="<?php echo base_url('/resources/js/js.js');?>"></script>
		<script  type="text/javascript">
		$(document).ready(function(){		     
		     //Load Datatables casinos
		     $('#productos-table').DataTable();                        
		});
		</script>
		<!--- DATA TABLES --->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/resources/css/jquery.dataTables.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/resources/css/shCore.css');?>">
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('/resources/css/resources/demo.css');?>"> -->
		<script type="text/javascript" language="javascript" src="<?php echo base_url('/resources/js/jquery.js');?>"></script>
		<script type="text/javascript" language="javascript" src="<?php echo base_url('/resources/js/jquery.dataTables.js');?>"></script>
		<script type="text/javascript" language="javascript" src="<?php echo base_url('/resources/js/shCore.js');?>"></script>
		<script type="text/javascript" language="javascript" src="<?php echo base_url('/resources/js/demo.js');?>"></script>		
		<!--- END of DATA TABLES --->
		<?php
			if($this->input->post('chau') != "")
			{
				unset($_SESSION['usuari_sl']);
				unset($_SESSION['level']);
				echo '<meta http-equiv="refresh" content="0; url=http://casino/" />';
			}
		?>
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script>
			//Script for latitud and longitud
			  var geocoder = new google.maps.Geocoder();
			  var map;
			  //Aspers Casino Newcastle by default 
			  var myLocationLat = 54.978252;
			  var myLocationLong = -1.6177800000000389;
			  var myCenter = new google.maps.LatLng(myLocationLat, myLocationLong);
			  
			  function initialize() {
				    geocoder = new google.maps.Geocoder();
				    var latlng = new google.maps.LatLng(myLocationLat, myLocationLong);
				    var mapProp = {
						  center:myCenter,
						  zoom:12,
						  mapTypeId:google.maps.MapTypeId.ROADMAP
						};
				
					map = new google.maps.Map(document.getElementById("googleMap"),mapProp);			
					var marker = new google.maps.Marker({
					  position:myCenter,
					});
					marker.setMap(map);
			  }
			
			  function codeAddress() {
				    var address = document.getElementById("address").value;
				    geocoder.geocode( { 'address': address}, function(results, status) {
				      if (status == google.maps.GeocoderStatus.OK) {
					        var marker = new google.maps.Marker({
					            map: map,
					            position: results[0].geometry.location
					        });
					        
					        var locationTot = results[0].geometry.location.toString().split(',');
					        
					        myLocationLat = locationTot[0].replace('(', '');
					        myLocationLong = locationTot[1].replace(')', '');
					      } else {
					        alert("Geocode was not successful for the following reason: " + status);
					      }
					    });
				    
				     	myCenter = new google.maps.LatLng(myLocationLat, myLocationLong);
						var mapProp = {
						  center:myCenter,
						  zoom:5,
						  mapTypeId:google.maps.MapTypeId.ROADMAP
						  };
				    	 map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
			  }				
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
</head>
<body onload="initialize()">
	<div class="container row">
		<div class="header">
			
			<h1>Welcome to GusCasinos!</h1>
			<?php
			if(isset($_SESSION['usuari_sl']))
				echo '<p><form method="post" style="float: right !important;"><input type="submit" name="chau" value="logOut" /></form></a></p>';
			?>
		</div>