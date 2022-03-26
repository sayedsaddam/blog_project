<div class="container">
	<!-- heading... -->
	<div class="row">
		<div class="col-md-12">
			<h1 class="display-3 font-weight-bold">Top Rated</h1>
		</div>
	</div>
	<!-- Top products section -->
	<div class="row">
		<div class="col-md-6 mb-2">
			<div class="row">
				<div class="col-md-12">
					<a href="<?= base_url('home/product_detail/'); ?>">
						<img src="<?= base_url('assets/images/header.webp'); ?>" alt="product image" class="img-fluid" title="image name...">
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 mb-2">
			<div class="row mb-3">
				<div class="col-md-6 mb-2">
					<a href="<?= base_url('home/product_detail/') ?>">
						<img src="<?= base_url('assets/images/head-1.jpeg'); ?>" alt="product image" class="img-fluid" title="image name...">
					</a>
				</div>
				<div class="col-md-6">
					<a href="<?= base_url('home/product_detail/') ?>">
						<img src="<?= base_url('assets/images/head-2.jpeg'); ?>" alt="product image" class="img-fluid" title="image name...">
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 mb-2">
					<a href="<?= base_url('home/product_detail/') ?>">
						<img src="<?= base_url('assets/images/head-3.jpeg'); ?>" alt="product image" class="img-fluid" title="image name...">
					</a>
				</div>
				<div class="col-md-6">
					<a href="<?= base_url('home/product_detail/') ?>">
						<img src="<?= base_url('assets/images/head-4.jpeg'); ?>" alt="product image" class="img-fluid" title="image name...">
					</a>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<!-- heading... -->
	<div class="row mb-1 mt-3">
		<div class="col-md-12">
			<h1 class="font-weight-bold">Shop</h1>
		</div>
	</div>
	<!-- proucts list... -->
	<div class="row mt-3 mb-3">
		<?php for($i = 1; $i < 9; $i++): ?>
			<div class="col-md-3 mb-4">
				<div class="card rounded-0">
					<div class="card-body">
						<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22843%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20843%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17f6fd83be4%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A42pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17f6fd83be4%22%3E%3Crect%20width%3D%22843%22%20height%3D%22250%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22314.06640625%22%20y%3D%22144.35%22%3E843x250%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="profile image" class="img-fluid">
						<h5 class="card-title mt-3 mb-0">G-Shock, 2019</h5>
						<p class="font-weight-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit...</p>
						<a href="<?= base_url('home/product_detail/'); ?>" class="btn btn-primary btn-sm mb-2 rounded-0">Buy Now</a> &raquo; Price: $100
						<br>
						<?php for($j = 1; $j <= 5; $j++): ?>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
							</svg>
						<?php endfor; ?>
					</div>
				</div>
			</div>
		<?php endfor; ?>
	</div>
	<div class="row mb-4">
		<div class="col-md-12 text-right">
			<a href="#" class="btn btn-primary rounded-0">View More &raquo;</a>
		</div>
	</div>
	<div class="row mt-4 mb-3">
		<div class="col-md-12">
			<h1 class="font-weight-bold">Best Selling</h1>
			<div class="row">
				<?php for($j = 1; $j <= 4; $j++): ?>
					<div class="col-md-6 mb-4">
						<div class="card rounded-0">
							<div class="card-body">
								<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22843%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20843%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17f6fd83be4%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A42pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17f6fd83be4%22%3E%3Crect%20width%3D%22843%22%20height%3D%22250%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22314.06640625%22%20y%3D%22144.35%22%3E843x250%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="best selling" class="img-fluid">
								<h5 class="card-title mt-3 mb-0">G-Shock, 29029432 - <span class="text-secondary">$100</span></h5>
								<p class="font-weight-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum mollitia distinctio fuga ut repudiandae sit unde nulla earum doloribus dolor repellat explicabo deleniti id facilis similique animi, quidem culpa cum.</p>
								<a href="<?= base_url('home/product_detail/'); ?>" class="btn btn-primary btn-sm mb-2 rounded-0">Buy Now</a>
								<a href="" class="btn btn-light btn-sm mb-2 rounded-0">More Info</a>
								<br>
								<?php for($k = 1; $k <= 5; $k++): ?>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
									</svg>
								<?php endfor; ?>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<h1 class="font-weight-bold">New Arrivals <small class="text-muted font-weight-light">Stay up-to-date about new products.</small></h1>
			<form action="" method="post">
				<div class="input-group mb-3">
					<input type="text" class="form-control form-control-lg rounded-0" placeholder="Subscriber's Email..." aria-label="Subscriber's Email..." aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-primary rounded-0" type="button">Subscribe!</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
