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
					<tr>
						<td>1</td>
						<td>Test Article</td>
						<td>test-article</td>
						<td>Admin</td>
						<td>
							<a href="" class="btn btn-primary btn-sm">edit</a>
							<a href="" class="btn btn-danger btn-sm">delete</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
