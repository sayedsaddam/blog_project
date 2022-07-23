<div class="container-fluid">
	<div class="row">
		<div class="col-md-7">
			<h1 class="font-weight-light"><?= !empty($article) ? 'Update Article' : 'Add Article'; ?> &raquo; <a href="javascript:history.go(-1)" class="btn btn-outline-primary rounded-0">Dashboard</a></h1>
		</div>
		<div class="col-md-5">
			<h1 class="font-weight-light">Recently Published</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<form action="<?= empty($article) ? base_url('admin/publish_article') : base_url('admin/update_article'); ?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="blog_id" value="<?= !empty($article) ? $article->id : ''; ?>">
				<div class="form-group">
					<label for="title">Article Title</label>
					<input type="text" name="title" class="form-control rounded-0" placeholder="Article title..." value="<?= !empty($article) ? $article->title : ''; ?>">
				</div>
				<div class="form-group">
					<label for="content">Article Content</label>
					<textarea name="content" class="form-control rounded-0" rows="10" placeholder="Write your article here..."><?= !empty($article) ? $article->blog_description : ''; ?></textarea>
				</div>
				<div class="custom-file mb-3">
					<input type="file" name="attachment" class="custom-file-input" id="validatedCustomFile">
					<label class="custom-file-label rounded-0" for="validatedCustomFile">Feature image...</label>
					<?php if(empty($article)): ?>
						<span class="text-danger">Image once set, can not be modified later.</span>
					<?php endif; ?>
				</div>
				<div class="form-group mt-3">
					<button type="submit" class="btn btn-primary rounded-0">Save Changes</button>
					<button type="reset" class="btn btn-danger rounded-0">Reset Changes</button>
				</div>
			</form>
		</div>
		<div class="col-md-5">
			<?php if(!empty($articles)): foreach($articles as $data): ?>
				<div class="row mb-3">
					<div class="col-md-3">
						<a href="<?= base_url('blog/'.$data->slug); ?>">
							<img src="<?= !empty($data->attachment) ? base_url('attachments/'.$data->attachment) : base_url('assets/images/no-image.jpg'); ?>" alt="<?= $data->slug; ?>" class="img-thumbnail rounded-0">
						</a>
					</div>
					<div class="col-md-9">
						<a href="<?= base_url('blog/'.$data->slug); ?>">
							<h3 class="font-weight-light mb-0"><?= $data->title; ?></h3>
						</a>
						<p class="text-muted mb-0 font-weight-light">Posted by: <a href=""><?= $data->fullname; ?></a> on <?= date('D, M jS, Y', strtotime($data->created_at)); ?></p>
						<p class="font-weight-light"><?= substr($data->blog_description, 0, 70).' ...'; ?></p>
					</div>
				</div>
			<?php endforeach; else: echo 'No articles published yet!'; endif; ?>
		</div>
	</div>
</div>
