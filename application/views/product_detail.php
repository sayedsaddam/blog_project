<div class="container">
	<?php if($product): ?>
		<div class="row">
			<div class="col-md-5 col-sm-12 mb-4">
				<div class="card rounded-0">
					<div class="card-body">
						<img src="<?= base_url('attachments/products/'.$product->image); ?>" alt="<?= $product->product_name; ?>" class="img-fluid shadow mb-3">
						<h5 class="card-title mb-1">
							<?= $product->product_name; ?> &raquo;
							<small class="text-muted"><?= $product->product_code; ?></small>
						</h5>
						<p class="mb-0">Description: <?= $product->product_description; ?></p>
						<p class="mb-0">Rs. <?= number_format( $product->price, 2); ?></p>
						<p class="mb-0">Stock: <?= number_format($product->product_qty); ?></p>
						<p>Suppler: <?= $product->supplier; ?></p>
						<button class="btn btn-outline-secondary btn-block rounded-0">Add to Wishlist</button>
						<a href="#" class="btn btn-outline-secondary btn-block rounded-0">Add a Review</a>
						<a href="javascript:history.go(-1)" class="btn btn-outline-secondary btn-block rounded-0">Back home</a>
					</div>
				</div>
			</div>
			<div class="col-md-7 col-sm-12">
				<h3>A little more detail of the product</h3>
				<p><?= $product->product_description; ?></p>
				<form action="<?= base_url('product/place_order'); ?>" method="POST" role="form">
					<input type="hidden" name="product_id" value="<?= $product->id; ?>">
					<legend>Purchase this product</legend>
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control rounded-0" id="" placeholder="Name...">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control rounded-0" placeholder="Email...">
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="test" name="phone" class="form-control rounded-0" placeholder="Phone...">
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<textarea name="address" class="form-control rounded-0" rows="3" placeholder="Provide your address, so we can deliver your product in time..."></textarea>
					</div>
					<button type="submit" class="btn btn-primary rounded-0">Place Order</button>
					<button type="reset" class="btn btn-danger rounded-0">Clear</button>
				</form>
			</div>
		</div>
	<?php else: ?>
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="card border-danger rounded-0 mb-3">
					<div class="card-header font-weight-bold text-secondary">Oops! Somthing went wrong.</div>
					<div class="card-body text-danger">
						<h5 class="card-title">Product Not Found</h5>
						<p class="card-text">Product with the provided ID was not found on this site, try searching other products.</p>
						<a href="<?= base_url('products'); ?>" class="btn btn-outline-danger rounded-0">Products</a>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</div>
