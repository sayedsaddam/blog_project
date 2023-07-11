<div class="container">
	<?php if(!empty($result)): ?>
	<div class="row mb-3">
		<div class="col-md-12">
			<a href="javascript:history.go(-1)">&laquo; Back</a>
		</div>
	</div>
	<?php endif; ?>
	<div class="row">
		<div class="col-md-12">
			<form action="<?= base_url('home/search'); ?>" method="get">
				<div class="input-group mb-3">
					<input type="text" class="form-control rounded-0" placeholder="Search products by name, price, or code..." aria-label="Search products by name, price, or code..." aria-describedby="basic-addon2" name="keyword" required>
					<div class="input-group-append">
						<button class="btn btn-secondary rounded-0" type="submit">Search</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row mb-2">
		<div class="col-md-6">
			<h2 class="font-weight-light" title="Products you might be interested in...">
				<?= empty($result) ? 'Products' : 'Search results for <strong class="text-dark bg-warning p-1">'.$_GET['keyword'].'</strong>'; ?>
			</h2>
		</div>
		<div class="col-md-6 text-sm-left text-md-right">
			<span class="text-muted">Quick search</span>
			<a href="" class="btn btn-outline-danger btn-sm rounded-0">Smoking</a>
			<a href="" class="btn btn-outline-dark btn-sm rounded-0">Electronics</a>
			<a href="" class="btn btn-outline-success btn-sm rounded-0">Fragrances</a>
		</div>
	</div>
	<div class="row">
		<?php if(!empty($products)): foreach($products as $data): ?>
			<div class="col-md-4 mb-3">
				<div class="card rounded-0">
					<div class="card-body">
						<img src="<?= base_url('attachments/products/'.$data->image); ?>" alt="<?= $data->product_name; ?>" class="card-img-top" height="200">
						<h5 class="card-title mt-3 mb-0"><?= $data->product_name; ?> - <span class="text-secondary"><?= 'Rs. '. number_format($data->price, 2); ?></span></h5>
						<p><?= $data->product_code; ?></p>
						<p class="font-weight-light"><?= $data->product_description; ?></p>
						<a href="<?= base_url('home/product_detail/'.$data->id); ?>" class="btn btn-primary btn-sm mb-2 rounded-0">Buy Now</a>
						<a href="<?= base_url('home/product_detail/'.$data->id); ?>" class="btn btn-outline-info btn-sm mb-2 rounded-0">More info &raquo;</a>
						<br>
						<?php for($k = 1; $k <= 5; $k++): ?>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
							</svg>
						<?php endfor; ?>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		<?php elseif(!empty($result)): foreach($result as $res): ?>
			<div class="col-md-4 mb-3">
				<div class="card rounded-0">
					<div class="card-body">
						<img src="<?= base_url('attachments/products/'.$res->image); ?>" alt="<?= $res->product_name; ?>" class="card-img-top" height="200">
						<h5 class="card-title mt-3 mb-0"><?= $res->product_name; ?> - <span class="text-secondary"><?= 'Rs. '. number_format($res->price, 2); ?></span></h5>
						<p><?= $res->product_code; ?></p>
						<p class="font-weight-light"><?= $res->product_description; ?></p>
						<a href="<?= base_url('home/product_detail/'.$res->id); ?>" class="btn btn-primary btn-sm mb-2 rounded-0">Buy Now</a>
						<a href="<?= base_url('home/product_detail/'.$res->id); ?>" class="btn btn-outline-info btn-sm mb-2 rounded-0">More info &raquo;</a>
						<br>
						<?php for($k = 1; $k <= 5; $k++): ?>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
							</svg>
						<?php endfor; ?>
					</div>
				</div>
			</div>
		<?php endforeach; else: ?>
			<div class="col-md-12">
				<div class="alert alert-danger">
					<span class="badge badge-danger badge-pill py-2 px-3">Information!</span> No records were found for your search keyword.
				</div>
				<a href="<?= base_url('products'); ?>">Continue Shopping</a>
			</div>
		<?php endif; ?>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>

