<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1 class="font-weight-light"><?= !empty($article) ? 'Update Article' : 'Add Article'; ?> &raquo; <a href="javascript:history.go(-1)" class="btn btn-outline-primary">Dashboard</a></h1>
		</div>
		<div class="col-md-4">
			<h1 class="font-weight-light">Recently Published</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<form action="<?= base_url('admin/publish_article'); ?>" method="post">
				<div class="form-group">
					<label for="title">Article Title</label>
					<input type="text" name="title" class="form-control" placeholder="Article title..." value="<?= !empty($article) ? $article->title : ''; ?>">
				</div>
				<div class="form-group">
					<label for="content">Article Content</label>
					<textarea name="content" class="form-control" rows="10" placeholder="Write your article here..."><?= !empty($article) ? $article->blog_description : ''; ?></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Save Changes</button>
					<button type="reset" class="btn btn-danger">Reset Changes</button>
				</div>
			</form>
		</div>
		<div class="col-md-4">
			<?php if(!empty($articles)): foreach($articles as $data): ?>
				<h3 class="font-weight-light"><?= $data->title; ?></h3>
				<p class="text-muted">Posted by: <a href=""><?= $data->fullname; ?></a> on <?= date('D, M jS, Y', strtotime($data->created_at)); ?></p>
				<p><?= substr($data->blog_description, 0, 100).' ...'; ?></p>
				<a href="<?= base_url('admin/article/'.$data->slug); ?>">read the article</a>
				<hr>
			<?php endforeach; else: echo 'No articles published yet!'; endif; ?>
		</div>
	</div>
</div>
