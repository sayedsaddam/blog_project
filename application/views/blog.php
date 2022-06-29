<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="#" method="get">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Search articles..." aria-label="Search articles..." aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-secondary" type="button">Search</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2 class="font-weight-light mb-4" title="Stories you might be interested in...">List of articles published</h2>
			<div class="row">
				<?php if(!empty($articles)): foreach($articles as $data): ?>
				<div class="col-md-6">
					<h4 class="font-weight-light mb-0">
						<a href="<?= base_url('blog/'.$data->slug); ?>"><?= $data->title; ?></a>
					</h4>
					<p class="text-muted mb-2">
						<small>Posted by: <a href=""><?= $data->fullname; ?></a> on <?= date('D, M jS, Y', strtotime($data->created_at)); ?></small>
					</p>
					<p><?= substr($data->blog_description, 0, 200).' &hellip;'; ?></p>
					<a href="<?= base_url('blog/'.$data->slug); ?>">read more...</a>
				</div>
				<?php endforeach; else: echo 'No articles published yet!'; endif; ?>
			</div>
		</div>
	</div>
</div>
