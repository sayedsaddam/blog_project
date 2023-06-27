<div class="container">
	<div class="row mb-4">
		<div class="col-md-12">
			<h1 class="font-weight-light">Dashboard</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h2 class="font-weight-bold">Articles</h2>
			<div class="row">
				<div class="col-md-6">
					<h4 class="font-weight-light">Articles Published</h4>
				</div>
				<div class="col-md-6">
					<h4 class="font-weight-light"><?= $articles; ?></h4>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-6">
					<a href="<?= base_url('admin/articles'); ?>" class="btn btn-primary rounded-0">List Articles</a>
					<a href="<?= base_url('admin/add_article'); ?>" class="btn btn-secondary rounded-0">Write an Article</a>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<h2 class="font-weight-bold">Products</h2>
			<div class="row">
				<div class="col-md-6">
					<h4 class="font-weight-light">Products in stock</h4>
				</div>
				<div class="col-md-6">
					<h4 class="font-weight-light">09</h4>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-6">
					<a href="<?= base_url('product/products'); ?>" class="btn btn-primary rounded-0">List Product</a>
					<a href="<?= base_url('product/create_product'); ?>" class="btn btn-secondary rounded-0">Add a Product</a>
				</div>
			</div>
		</div>
	</div>
</div>
