
<?php require 'encode_decode_functions.php'; ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="/css/styles.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        



        <title> Decode - Encode Converter</title>

        
        
    </head>
    <body>
        
      <div class="container">



			<div class="row">
			   
			   <div class="col-md-6 col-md-offset-3">
 			         <h3>Decimal To Hex </h3>
 			         <label id="decimal_ans"></label>


                      <?php 

                       if(empty($_POST['dec_to_hex'])){
                       	    echo "Encode Decimal To Hexidecimal";

                       }else{
                       	  
                       	  ?>

                           <script>
                              window.onload = function(){
                              	document.getElementById("decimal_ans").innerHTML = "<?php echo  encode_dec_hex($_POST['dec_to_hex']); ?>";
                              	
                              }
                           </script>
                       	  <?php


                       }
                      ?>
			         <form method="POST" action="#" enctype="form-data">
			         	 <div class="form-group">
					         	  <input type="text" name="dec_to_hex" id="dec_to_hex" maxlength="5" />
			         	  </div>

			         	  <div class="form-group">
					         	  <button type="submit" class="btn btn-primary">Convert</button>
			         	  </div>
			         </form>

			    </div>

			 </div>

              <hr/>

			<div class="row">
			   
			   <div class="col-md-6 col-md-offset-3">
			   			

			         <h3>Hex to Decimal  </h3>
			          	<label id="hexadecimal_ans"></label>


                      <?php 

                       if(empty($_POST['hex_to_dec'])){
                       	       echo   "Decode Hexidecimal To Decimal";

                       }else{
		                       	?>
		                         <script>
		                              window.onload = function(){
		                              	
		                              	document.getElementById("hexadecimal_ans").innerHTML = "<?php echo decode_hex_dec($_POST['hex_to_dec']); ?>";

		                              }
		                           </script>
		                       	<?php
                         } 
                          ?>

			         <form method="POST" action="#" enctype="form-data">
			         	 <div class="form-group">
					         	  <input type="text" name="hex_to_dec" id="hex_to_dec" maxlength="5" />
			         	  </div>

			         	  <div class="form-group">
					         	  <button type="submit" class="btn btn-primary">Convert</button>
			         	  </div>
			         </form>

			    </div>

			 </div>


      </div>  
        
    </body>
</html>
