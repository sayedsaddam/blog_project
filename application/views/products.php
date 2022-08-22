<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="<?= base_url('home/search_products'); ?>" method="get">
				<div class="input-group mb-3">
					<input type="text" class="form-control rounded-0" placeholder="Search products..." aria-label="Search products..." aria-describedby="basic-addon2" name="search" required>
					<div class="input-group-append">
						<button class="btn btn-secondary rounded-0" type="submit">Search</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row mb-2">
		<div class="col-md-3">
			<h2 class="font-weight-light" title="Products you might be interested in...">
				<?= empty($results) ? 'Products' : 'Search results for <strong class="text-light bg-secondary p-1 rounded">'.$_GET['search'].'</strong>'; ?>
			</h2>
		</div>
		<div class="col-md-9 text-sm-left text-md-right">
			<span class="text-muted">Quick search</span>
			<a href="" class="btn btn-outline-secondary btn-sm rounded-0">Smoking</a>
			<a href="" class="btn btn-outline-secondary btn-sm rounded-0">Electronics</a>
			<a href="" class="btn btn-outline-secondary btn-sm rounded-0">Edible</a>
		</div>
	</div>
	<div class="row">
		<?php for($i = 1; $i <= 9; $i++): ?>
			<div class="col-md-4 mb-3">
				<div class="card rounded-0">
					<div class="card-body">
						<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22843%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20843%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17f6fd83be4%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A42pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17f6fd83be4%22%3E%3Crect%20width%3D%22843%22%20height%3D%22250%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22314.06640625%22%20y%3D%22144.35%22%3E843x250%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="best selling" class="img-fluid">
						<h5 class="card-title mt-3 mb-0">G-Shock, 29029432 - <span class="text-secondary">$100</span></h5>
						<p class="font-weight-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum mollitia distinctio fuga ut repudiandae sit unde nulla earum doloribus dolor repellat explicabo deleniti id facilis similique animi, quidem culpa cum.</p>
						<a href="<?= base_url('home/product_detail/'); ?>" class="btn btn-primary btn-sm mb-2 rounded-0">Buy Now</a>
						<a href="<?= base_url('home/product_detail'); ?>" class="btn btn-outline-info btn-sm mb-2 rounded-0">More info &raquo;</a>
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
