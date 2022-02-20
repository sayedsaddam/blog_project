<div class="container">
	<div class="row">
		<div class="col-md-8">
			<form action="<?= base_url('admin/publish_article'); ?>" method="post">
				<div class="form-group">
					<label for="title">Article Title</label>
					<input type="text" name="title" class="form-control" placeholder="Article title...">
				</div>
				<div class="form-group">
					<label for="content">Article Content</label>
					<textarea name="content" class="form-control" rows="10" placeholder="Write your article here..."></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Save Changes</button>
					<button type="reset" class="btn btn-danger">Reset Changes</button>
				</div>
			</form>
		</div>
		<div class="col-md-4">
			<h1 class="font-weight-light">Recently published</h1>
			<h3 class="font-weight-light">Blog title 1</h3>
			<p>Posted by: <a href="">Admin</a> on <?= date('l, M jS, Y'); ?></p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, explicabo ratione corporis, eaque adipisci eveniet, corrupti in quaerat esse nam debitis odit dolore. Molestiae aliquam doloribus officia a aliquid ipsam...</p>
			<a href="">read the article</a>
			<hr>
			<h3 class="font-weight-light">Blog title 2</h3>
			<p>Posted by: <a href="">Khalid</a> on <?= date('l, M jS, Y'); ?></p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, explicabo ratione corporis, eaque adipisci eveniet, corrupti in quaerat esse nam debitis odit dolore. Molestiae aliquam doloribus officia a aliquid ipsam...</p>
			<a href="">read the article</a>
		</div>
	</div>
</div>
