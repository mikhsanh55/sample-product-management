<?php
	require_once('./connection.php');

	$productsQuery = "SELECT * FROM tb_products";
	$products = mysqli_query($conn, $productsQuery);
	$sumProducts = mysqli_num_rows($products);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <title>Product Managemen</title>
    <style type="text/css">
    	html {
    		font-family: 'Lato', sans-serif;
    	}
    </style>
  </head>
  <body>

  	<div class="container mt-4">
  		<h2 class="text-secondary">List Product</h2>
  		<section>
  			<?php if($sumProducts > 0) { ?>
  				<table class="table table-bordered table-striped table-hovered">
  					<thead>
  						<tr>
  							<td class="text-center">No</td>
  							<td class="text-left">Name</td>
  							<td class="text-left">Category</td>
  							<td class="text-center">Status</td>
  						</tr>
  					</thead>
  					<tbody>
  						<?php 
  							$no = 1;
  							while($product = mysqli_fetch_assoc($products)) {
  								
  								echo '
  								<tr>
  									<td class="text-center">' . $no++ . '</td>
  									<td>' . $product['name'] . '</td>
  									<td>' . $product['category'] . '</td>
  									<td class="text-center" style="width: 10%;">
  										<a href="#" class="font-weight-bold">
  											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											  <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
											</svg>
  										</a>
  									</td>
  								</tr>
  								';
  							}
  						?>
  					</tbody>
  				</table>
  			<?php } else { ?>
  				<p class="alert alert-warning text-center">
  					No Product Found.
  				</p>
  			<?php } ?>
  		</section>
  	</div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
	mysqli_close($conn);
?>