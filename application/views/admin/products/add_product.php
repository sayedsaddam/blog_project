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
			<h1 class="font-weight-light"><?= $product->product_name; ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<form action="<?= base_url(empty($product) ? 'product/store_product' : 'product/update_product'); ?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= !empty($product) ? $product->id : ''; ?>">
				<div class="form-group">
					<label for="name">Product Name</label>
					<input type="text" name="name" class="form-control rounded-0" placeholder="Product Name" required value="<?= !empty($product) ? $product->product_name : ''; ?>">
				</div>
				<div class="form-group">
					<label for="description">Product Description</label>
					<textarea type="text" name="description" class="form-control rounded-0" placeholder="Description" required><?= !empty($product) ? $product->product_description : ''; ?></textarea>
				</div>
				<div class="form-group">
					<label for="Code">Product Code</label>
					<input type="text" name="code" class="form-control rounded-0" placeholder="Code" required value="<?= !empty($product) ? $product->product_code : ''; ?>">
				</div>
				<div class="form-group">
					<label for="qty">Product Quantity</label>
					<input type="number" name="quantity" class="form-control rounded-0" placeholder="Quantity" required value="<?= !empty($product) ? $product->product_qty : ''; ?>">
				</div>
				<div class="form-group">
					<label for="price">Product Price</label>
					<input type="number" name="price" class="form-control rounded-0" placeholder="Price" required value="<?= !empty($product) ? $product->price : ''; ?>">
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
					<input type="text" name="supplier" class="form-control rounded-0" placeholder="Supplier" required value="<?= !empty($product) ? $product->supplier : ''; ?>">
				</div>
				<button type="submit" class="btn btn-primary rounded-0">
					<?= empty($product) ? 'Store Product' : 'Update Product'; ?>
				</button>
				<button type="reset" class="btn btn-warning rounded-0">Reset</button>
			</form>
			</form>
		</div>
		<div class="col-md-6">
			<?php if(!empty($product)): ?>
				<figure class="figure">
					<img src="<?= base_url('attachments/products/'.$product->image); ?>" class="figure-img img-fluid rounded" alt="<?= $product->product_name; ?>">
					<figcaption class="figure-caption text-right"><?= $product->product_name.', '.$product->product_code; ?></figcaption>
				</figure>
			<?php endif; ?>
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
