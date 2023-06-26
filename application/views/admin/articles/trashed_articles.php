<div class="container">
	<div class="row mb-2">
		<div class="col-md-6 col-sm-12">
		<h1 class="font-weight-light">Trashed Articles &raquo; 
				<a href="<?= base_url('admin/articles'); ?>" class="btn btn-outline-secondary btn-sm rounded-0">Published Articles</a>
			</h1>
		</div>
		<div class="col-md-6 col-sm-12 text-sm-right">
			<a href="<?= base_url('admin/add_article'); ?>" class="btn btn-primary rounded-0">Add Article</a>
			<a href="<?= base_url('admin'); ?>" class="btn btn-outline-primary rounded-0">Dashboard</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<small>You can restore/republish the articles by clicking the restore button!</small>
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
					<tr id="<?= $data->id; ?>">
						<td><?= $data->id; ?></td>
						<td><?= $data->title; ?></td>
						<td><?= $data->slug; ?></td>
						<td><?= $data->fullname; ?></td>
						<td>
							<!-- <a href="<?= base_url('admin/article/'.$data->slug); ?>" class="btn btn-outline-primary btn-sm rounded-0">edit</a> -->
							<button type="submit" class="btn btn-outline-danger btn-sm remove rounded-0">restore</button>
						</td>
					</tr>
					<?php endforeach; else: echo '<tr class="table-danger"><td colspan="5" align="center">No articles found.</td></tr>'; endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
$(".remove").click(function(){
	var id = $(this).parents("tr").attr("id");
	swal({
		title: "Are you sure?",
		text: "The article will be restored and republished.",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: "btn-success rounded-0",
		confirmButtonText: "Yes, restore it!",
		cancelButtonClass: "btn-danger rounded-0",
		cancelButtonText: "No, cancel!",
		closeOnConfirm: false,
		closeOnCancel: false
	},
	function(isConfirm){
		if(isConfirm){
			$.ajax({
				url: '<?= base_url('admin/delete_article/') ?>'+id,
				type: 'DELETE',
				error: function(){
					alert("Oops! Something went wrong!");
				},
				success: function(data){
					$("#"+id).remove();
					swal("Restored!", "You've restored the article.", "success");
				}
			});
		}else{
			swal("Cancelled", "You've cancelled the restore action. :)", "error");
		}
	});
});
</script>
