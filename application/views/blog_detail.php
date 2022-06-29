<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h3 class="font-weight-light">Recently Published</h3>
			<div class="card card-secondary">
				<div class="card-body">
					<?php if(!empty($articles)): $counter = 0; foreach($articles as $data): ?>
						<h3 class="font-weight-light mb-0">
							<a href="<?= base_url('blog/'.$data->slug); ?>"><?= $data->title; ?></a>
						</h3>
						<p class="text-muted mb-2">
							<small>Posted by: <a href=""><?= $article->fullname; ?></a> on <?= date('D, M jS, Y', strtotime($article->created_at)); ?></small>
						</p>
						<p><?= substr($data->blog_description, 0, 100).' ...'; ?></p>
						<a href="<?= base_url('blog/'.$data->slug); ?>">read more...</a>
						<hr>
					<?php endforeach; else: echo 'No articles published yet!'; endif; ?>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<h1 class="font-weight-light mb-0"><?= $article->title; ?></h1>
			<p class="text-muted mb-2">
				<small>Posted by: <a href=""><?= $article->fullname; ?></a> on <?= date('D, M jS, Y', strtotime($article->created_at)); ?></small>
			</p>
			<p class="text-justify"><?= $article->blog_description; ?></p>
		</div>
	</div>	
</div>
