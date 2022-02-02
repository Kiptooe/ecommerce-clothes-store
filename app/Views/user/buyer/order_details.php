<?php
	// echo view('templete/header');
?> 

	<div class="container">
		<table class="table table-bordered table-striped table-responsive">
			<tr>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>Quantity</th>
				<th>Total Payment</th>
			</tr>

				<?php foreach($OrderDetails as $value):
					foreach($product_name as $value1):
				 ?>


			<tr>
				<td><?= $value1['product_name'] ?></td>
				<td><?= $value['product_price'] ?></td>
				<td><?= $value['order_quantity'] ?></td>
				<td><?= $value['orderdetails_total'] ?></td>
			</tr>
		<?php endforeach; endforeach; ?>
		</table>
	</div>

<?php
	// echo view('templete/footer');
?>