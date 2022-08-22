<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="<?= base_url('home/search_blog'); ?>" method="get">
				<div class="input-group mb-3">
					<input type="text" class="form-control rounded-0" placeholder="Search articles..." aria-label="Search articles..." aria-describedby="basic-addon2" name="search" required>
					<div class="input-group-append">
						<button class="btn btn-secondary rounded-0" type="submit">Search</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2 class="font-weight-light mb-4" title="Stories you might be interested in...">
				<?= empty($results) ? 'List of articles published' : 'Search results for <strong class="text-light bg-secondary p-1 rounded">'.$_GET['search'].'</strong>'; ?>
			</h2>
			<div class="row">
				<?php if(!empty($articles)): foreach($articles as $data): ?>
				<div class="col-md-6">
					<div class="row mb-4">
						<div class="col-md-5">
							<a href="<?= base_url('blog/'.$data->slug); ?>">
								<img src="<?= !empty($data->attachment) ? base_url('attachments/'.$data->attachment) : base_url('assets/images/no-image.jpg'); ?>" alt="<?= $data->slug; ?>" class="img-thumbnail rounded-0">
							</a>
						</div>
						<div class="col-md-7">
							<h4 class="font-weight-light mb-0">
								<a href="<?= base_url('blog/'.$data->slug); ?>"><?= $data->title; ?></a>
							</h4>
							<p class="text-muted mb-2">
								<small>Posted by: <a href=""><?= $data->fullname; ?></a> on <?= date('D, M jS, Y', strtotime($data->created_at)); ?></small>
							</p>
							<p><?= substr($data->blog_description, 0, 150).' &hellip;'; ?></p>
							<a href="<?= base_url('blog/'.$data->slug); ?>">read more...</a>
						</div>
					</div>
				</div>
				<?php endforeach; elseif(!empty($results)): ?>
					<?php foreach($results as $data): ?>
						<div class="col-md-6">
							<h4 class="font-weight-light mb-0">
								<a href="<?= base_url('blog/'.$data->slug); ?>"><?= $data->title; ?></a>
							</h4>
							<p class="text-muted mb-2">
								<small>Posted by: <a href=""><?= $data->fullname; ?></a> on <?= date('D, M jS, Y', strtotime($data->created_at)); ?></small>
							</p>
							<p>
								<?= substr($data->blog_description, 0, 200).' &hellip;'; ?>
							</p>
							<a href="<?= base_url('blog/'.$data->slug); ?>">read more...</a>
						</div>
					<?php endforeach; else: echo 'No articles published.'; endif; ?>
				</div>
			<?php echo $this->pagination->create_links(); ?>
		</div>
	</div>
</div>
