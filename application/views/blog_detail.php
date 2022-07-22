<div class="container">
	<?php if($article): ?>
		<div class="row">
			<div class="col-md-4">
				<h3 class="font-weight-light">Recently Published</h3>
				<div class="card card-secondary rounded-0">
					<div class="card-body">
						<?php if(!empty($articles)): foreach($articles as $data): ?>
							<a href="<?= base_url('blog/'.$data->slug); ?>">
								<img src="<?= !empty($data->attachment) ? base_url('attachments/'.$data->attachment) : base_url('assets/images/no-image.jpg'); ?>" alt="<?= $data->slug; ?>" class="img-fluid">
							</a>
							<h3 class="font-weight-light mb-0">
								<a href="<?= base_url('blog/'.$data->slug); ?>"><?= $data->title; ?></a>
							</h3>
							<p class="text-muted mb-3">
								<small><?= date('D, M jS, Y', strtotime($article->created_at)); ?></small>
							</p>
						<?php endforeach; else: echo 'No articles published yet!'; endif; ?>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<h1 class="font-weight-light mb-0"><?= $article->title; ?></h1>
				<p class="text-muted mb-2">
					<small>Posted by: <a href=""><?= $article->fullname; ?>
						</a> on <?= date('D, M jS, Y', strtotime($article->created_at)); ?>,
						Last updated: <?= date('D, M jS, Y', strtotime($article->updated_at)); ?>
					</small>
				</p>
				<img src="<?= !empty($article->attachment) ? base_url('attachments/'.$article->attachment) : base_url('assets/images/no-image.jpg'); ?>" alt="<?= $article->slug; ?>" class="img-fluid mb-3" style="width: 100%; height: 50%;">
				<p class="text-justify"><?= $article->blog_description; ?></p>
			</div>
		</div>
	<?php else: ?>
		<div class="row">
			<div class="col-md-12 text-center pb-4 mb-4 mt-5">
				<h1 class="font-weight-light mb-0">404<br> Page Not Found!</h1>
				<p>The Article's either deleted or updated!</p>
				<a href="<?= base_url('blog'); ?>" class="btn btn-outline-secondary">Back Home</a>
			</div>
		</div>
	<?php endif; ?>
</div>
