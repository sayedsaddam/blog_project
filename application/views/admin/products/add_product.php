<div class="container-fluid">
	<?php if($success = $this->session->flashdata('success')): ?>
		<div class="alert alert-success"><?= $success; ?></div>
	<?php elseif($failed = $this->session->flashdata('failed')): ?>
		<div class="alert alert-danger"><?= $failed; ?></div>
	<?php endif; ?>
	<div class="row">
		<div class="col-md-6">
			<h1 class="font-weight-light"><?= !empty($product) ? 'Update Product' : 'Add Product'; ?> &raquo; <a href="javascript:history.go(-1)" class="btn btn-outline-primary rounded-0">Dashboard</a></h1>
		</div>
		<div class="col-md-6">
			<h1 class="font-weight-light">Recently Added</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<form action="<?= base_url('product/store_product'); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Product Name</label>
					<input type="text" name="name" class="form-control rounded-0" placeholder="Product Name" required>
				</div>
				<div class="form-group">
					<label for="description">Product Description</label>
					<textarea type="text" name="description" class="form-control rounded-0" placeholder="Description" required></textarea>
				</div>
				<div class="form-group">
					<label for="Code">Product Code</label>
					<input type="text" name="code" class="form-control rounded-0" placeholder="Code" required>
				</div>
				<div class="form-group">
					<label for="qty">Product Quantity</label>
					<input type="number" name="quantity" class="form-control rounded-0" placeholder="Quantity" required>
				</div>
				<div class="form-group">
					<label for="price">Product Price</label>
					<input type="number" name="price" class="form-control rounded-0" placeholder="Price" required>
				</div>
				<div class="custom-file mb-3">
					<input type="file" name="image" class="custom-file-input" id="validatedCustomFile">
					<label class="custom-file-label rounded-0" for="validatedCustomFile">Product Image</label>
					<?php if(empty($product)): ?>
						<span class="text-danger">Image once set, can not be modified later.</span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label for="name">Product Supplier</label>
					<input type="text" name="supplier" class="form-control rounded-0" placeholder="Supplier" required>
				</div>
				<button type="submit" class="btn btn-primary rounded-0">Store Product</button>
				<button type="reset" class="btn btn-warning rounded-0">Reset</button>
			</form>
			</form>
		</div>
		<div class="col-md-6">
			<?php if(!empty($products)): foreach($products as $product): ?>
				<div class="row mb-3">
					<div class="col-md-4">
						<img src="<?= base_url('attachments/products/'.$product->image); ?>" alt="<?= $product->product_name; ?>" class="img-thumbnail">
					</div>
					<div class="col-md-8">
						<p class="mb-0 font-weight-bold">
							<?= $product->product_name; ?>,
							<small class="text-muted"><?= $product->product_code; ?></small>
						</p>
						<p class="mb-0">
							<?= $product->product_description; ?>
						</p>
						<p class="mb-0">
							<?= 'PKR '.$product->price; ?>
						</p>
						<p class="mb-0">
							<?= 'Qty: '.$product->product_qty; ?>
						</p>
						<p class="mb-0">
							<?= $product->supplier; ?>
						</p>
						<span class="badge <?= $product->status == 1 ? 'badge-success' : 'badge-danger'; ?>">
							<?= $product->status == 1 ? 'Active' : 'Inactive'; ?>
						</span>
					</div>
				</div>
			<?php endforeach; endif; ?>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$("#validatedCustomFile").on("change", function(){
			let fileName = $(this).val().split("\\").pop();
			$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
		});
	});
</script>
