<div class="container">
	<div class="row mb-4">
		<div class="col-md-6 col-sm-12">
			<h1 class="font-weight-light">Trashed Products &raquo; 
				<a href="<?= base_url('product/products'); ?>" class="btn btn-outline-secondary btn-sm rounded-0">Published Products</a>
			</h1>
		</div>
		<div class="col-md-6 col-sm-12 text-sm-right">
			<a href="<?= base_url('product/create_product'); ?>" class="btn btn-primary rounded-0">Add Product</a>
			<a href="<?= base_url('admin'); ?>" class="btn btn-outline-primary rounded-0">Dashboard</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-condensed table-hover table-sm">
				<caption>Total Number of Products published, <?= count($products); ?></caption>
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Code</th>
						<th>Price</th>
						<th>Qty</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php if(!empty($products)): foreach($products as $data): ?>
					<tr id="<?= $data->id; ?>">
						<td><?= $data->id; ?></td>
						<td><?= $data->product_name; ?></td>
						<td><?= $data->product_code; ?></td>
						<td><?= $data->price; ?></td>
						<td><?= $data->product_qty; ?></td>
						<td>
							<a href="<?= base_url('product/product/'.$data->id); ?>" class="btn btn-outline-primary btn-sm rounded-0">edit</a>
							<button type="submit" class="btn btn-outline-danger btn-sm remove rounded-0">delete</button>
						</td>
					</tr>
					<?php endforeach; else: echo '<tr class="table-danger"><td colspan="6" align="center">No products found.</td></tr>'; endif; ?>
				</tbody>
			</table>
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>

<script type="text/javascript">
$(".remove").click(function(){
	var id = $(this).parents("tr").attr("id");
	swal({
		title: "Are you sure?",
		text: "The product will be trashed.",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: "btn-danger rounded-0",
		confirmButtonText: "Yes, delete it!",
		cancelButtonClass: "btn-primary rounded-0",
		cancelButtonText: "No, cancel!",
		closeOnConfirm: false,
		closeOnCancel: false
	},
	function(isConfirm){
		if(isConfirm){
			$.ajax({
				url: '<?= base_url('product/delete_product/') ?>'+id,
				type: 'DELETE',
				error: function(){
					alert("Oops! Something went wrong!");
				},
				success: function(data){
					$("#"+id).remove();
					swal("Deleted!", "You've deleted the product.", "success");
				}
			});
		}else{
			swal("Cancelled", "You've cancelled the delete action. :)", "error");
		}
	});
});
</script>
