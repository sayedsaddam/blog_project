<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="font-weight-light">Read our articles on Agriculture Research</h1>
			<h4 class="font-weight-light text-info">...written by our research team, at AgroLabs, Peshawar region.</h4>
			<div class="row mt-5">
				<?php for($i = 1; $i < 10; $i++): ?>
					<div class="col-md-4 mb-4">
						<h2 class="font-weight-light"><a href="<?= base_url('blog'); ?>">Blog title <?= $i; ?></a></h2>
						<small>
							<a href="<?= base_url('home/blog/category/news'); ?>" class="badge badge-success px-2 py-1">news</a> | 
							<a href="<?= base_url('home/blog/category/construction'); ?>" class="badge badge-info px-2 py-1">construction</a> | 
							<a href="<?= base_url('home/blog/category/entertainment'); ?>" class="badge badge-dark px-2 py-1">entertainment</a>
						</small>
						<p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, suscipit distinctio...</p>
						<small>Posted on: <?= date('l jS M, Y'); ?></small><br>
						<a href="<?= base_url('blog'); ?>">read more</a>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-right">
			<nav aria-label="Page navigation example">
				<ul class="pagination pagination-sm justify-content-end">
					<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1">Previous</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>
