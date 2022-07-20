<div class="container">
	<div class="row mb-4">
		<div class="col-md-6">
			<h1 class="font-weight-light">Articles List</h1>
		</div>
		<div class="col-md-6 text-right">
			<a href="<?= base_url('admin/add_article'); ?>" class="btn btn-primary">Add Article</a>
			<a href="<?= base_url('admin'); ?>" class="btn btn-outline-primary">Dashboard</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-condensed table-hover table-sm">
				<caption>Total Number of Articles published, <?= count($articles); ?></caption>
				<thead>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Slug</th>
						<th>Author</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php if(!empty($articles)): foreach($articles as $data): ?>
					<tr>
						<td><?= $data->id; ?></td>
						<td><?= $data->title; ?></td>
						<td><?= $data->slug; ?></td>
						<td><?= $data->fullname; ?></td>
						<td>
							<a href="<?= base_url('admin/article/'.$data->slug); ?>" class="btn btn-primary btn-sm">edit</a>
							<a href="<?= base_url('admin/delete_article/'.$data->slug); ?>" class="btn btn-danger btn-sm">delete</a>
						</td>
					</tr>
					<?php endforeach; else: echo '<tr class="table-danger"><td colspan="5" align="center">No articles found.</td></tr>'; endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
