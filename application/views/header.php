<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
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
		    	
		// Calculo Motero cambio
		   // $("#paga").keyup(function(){
		   		  // //alert($("#paga").val());
		   		  // if($("#paga").val() != "")
		   		  // {
			   		  // motero();
			      // }
		   // });
		   
		// Add extra
		   // $("#extraplata").keyup(function(){
		   		// if($("#extraplata").val() != "")
		   		  // {
			   		  // var anterior = parseFloat(document.getElementById("totale").value) - parseFloat(document.getElementById("extant").value);
			   		  // document.getElementById("extant").value = parseFloat(document.getElementById("extraplata").value)
			   		  // var extrapla = anterior + parseFloat(document.getElementById("extraplata").value);
			    	  // $("#total").html(extrapla);
					  // document.getElementById("totale").value = extrapla;
					  // motero();
				  // }
		   // });       	
		   
		// NAME FIELD CHECK
		   // $(".telcheck").keyup(function(){
		 // $("#store_switcher").change(function(){
		    // var text = $(this).val();
		     //var last = document.forms["mainleadform"]["pylastname"].value;
		     // var tel = $(".telcheck").val();
		     //$("#ckeckfirst").html("");
		     // for(var ca = 0; ca <=10; ca++)
		        // {
		        	// $("#ckeckfirst"+[ca]).html("");
		            //$("#ckeckfirst").html("good!!");
		            //$("#ckecklast"+ca).html("");
		     // }
		     // if (tel != "")
		     // {
		     //alert(tel);
		    
		        // $("#ckeckfirst").html("");
		            // $.ajax({//url:"<?php //echo base_url(); ?>index.php/checkduplicates?isAjax=true&text="+text+"&last="+last,
		            		// url:"<?php //echo base_url(); ?>index.php/checkduplicates?isAjax=true&telef="+tel,
		                   // dataType: 'json',
		                   // success: function(data)       
		                         // {
		                             //alert(data.length);
		                        /* $('.categories-select')
		                                     .find('option')
		                                     .remove();
		                                 $.each(data, function(index, itemData) {
		                                       //var selected =
		                                       var newOption = "<option value='" + index + "'>" + itemData + "</option";
		                                        $(".categories-select").append(newOption);
		                                 });
		                                 $('#filter_store_id').val(store_id);*/
		                                
		                                //$("#ckecklast").html("");  
		                               // $("#ckeckfirst").html("capoooo!!");
		                              // $("#ckeckfirst").html("eteeee"+data[0]);
		                               
		                             //console.log(data);  
		                               
		                             //for (var i=0;i<data.length;i++) {
		                            	// for(var e in data)
		                            	// {
		                             	// //$("#ckeckfirst").html("capoooo!!");
		                             		// $("#ckeckfirst"+e).html(data[e].nome);
		                                 // /*$("#ckeckfirst"+i).html("This first name exists in Lead: "+data[i]);*/
		                                   // $("#ckeckfirst"+e).attr("onclick","rellena(\'" + data[e].tel + "\',\'" + data[e].nome + "\', \'" + data[e].cognome + "\', \'" + data[e].teldos + "\', \'" + data[e].indirizzo + "\', \'" + data[e].cp + "\', \'" + data[e].email + "\', \'" + data[e].observacio + "\', \'" + data[e].is_forro + "\' )");
		                                   // /*$("#ckecklast"+i).html("This last name exists in Lead: "+data[i]);
		                                   // $("#ckecklast"+i).attr("href","/view_option/view-leads/"+data[i]);*/
		                              // }  
// 		                              
// 		                              
// 		                                 
		                               // /*$("#ckecklast"+contando).html("This last name exists in Lead: "+str_array_sec[0]);
		                               // $("#ckecklast"+contando).attr("href","/lead/index.php/view_option/view-leads/"+str_array_sec[0]);*/    
		                         // }
// 		                  
		                     // });   
		    	// }
		     // });
		     
		     //Load Datatables promo, producto, clientes, pedidos
		     $('#promos-table').DataTable();
		     $('#productos-table').DataTable();
		     $('#clientes-table').DataTable();
		     $('#pedidos-table').DataTable();                          
		});
		</script>
		<!--- DATA TABLES --->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/resources/css/jquery.dataTables.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/resources/css/shCore.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/resources/css/resources/demo.css');?>">
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
		var myCenter=new google.maps.LatLng(51.508742,-0.120850);
		function initialize()
		{
		var mapProp = {
		  center:myCenter,
		  zoom:5,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
		  };
		
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		
		var marker=new google.maps.Marker({
		  position:myCenter,
		  });
		
		marker.setMap(map);
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
		</script>
</head>
<body>
	<div class="container row">
		<div class="header">
			
			<h1>Welcome to GusCasinos!</h1>
			<?php
			if(isset($_SESSION['usuari_sl']))
				echo '<p><form method="post" style="float: right !important;"><input type="submit" name="chau" value="logOut" /></form></a></p>';
			?>
		</div>