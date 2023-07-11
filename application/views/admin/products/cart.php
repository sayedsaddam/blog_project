<div class="container">
	<div class="row mb-4">
		<div class="col-md-6 col-sm-12">
			<h1 class="font-weight-light">Cart
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-condensed table-hover table-sm">
				<caption>Cart, <?= count($items); ?></caption>
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Price</th>
						<th>Qty</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php if(!empty($items)): foreach($items as $data): ?>
					<tr id="<?= $data['id']; ?>">
						<td><?= $data['id']; ?></td>
						<td><?= $data['name']; ?></td>
						<td><?= $data['price']; ?></td>
						<td><?= $data['qty']; ?></td>
						<th>
							<img src="<?= base_url('attachments/products/'.$data['photo']); ?>" alt="<?= $data['name']; ?>" class="img-thumbnail" width="50">
						</th>
						<td>
							<a href="<?= base_url('cart/remove/'.$data['id']); ?>" class="btn btn-outline-danger btn-sm remove rounded-0" onclick="javascript:return confirm('Are you sure to remove this item from the cart?');">remove</a>
						</td>
					</tr>
					<?php endforeach; ?>
					<tr class="table-success">
						<th colspan="5">Total</th>
						<th><?= number_format($total); ?></th>
					</tr>
				<?php else: echo '<tr class="table-danger"><td colspan="7" align="center">Your cart is empty.</td></tr>'; endif; ?>
				</tbody>
			</table>
			<a href="<?= base_url('products'); ?>">Continue Shopping</a>
		</div>
	</div>
</div>

