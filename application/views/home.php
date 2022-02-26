<div class="container">
	<!-- heading... -->
	<div class="row">
		<div class="col-md-12">
			<h1 class="display-3 font-weight-bold">Top products</h1>
		</div>
	</div>
	<!-- Top products section -->
	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-12">
					<img src="https://images.unsplash.com/photo-1645882945476-427ba383fde3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80" alt="" class="img-fluid rounded">
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row mb-3">
				<div class="col-md-6">
					<img src="https://images.unsplash.com/photo-1645830237228-c64994eccce1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="" class="img-fluid rounded">
				</div>
				<div class="col-md-6">
					<img src="https://images.unsplash.com/photo-1645871306587-bebaa2f1dfc0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="" class="img-fluid rounded">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img src="https://images.unsplash.com/photo-1638913976954-8f7b612867c2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="" class="img-fluid rounded">
				</div>
				<div class="col-md-6">
					<img src="https://images.unsplash.com/photo-1645821522744-d8793911bc62?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="" class="img-fluid rounded">
				</div>
			</div>
		</div>
	</div>
	<hr>
	<!-- heading... -->
	<div class="row mb-1 mt-3">
		<div class="col-md-12">
			<h1 class="font-weight-bold">Shop</h1>
		</div>
	</div>
	<!-- proucts list... -->
	<div class="row mt-3 mb-3">
		<?php for($i = 1; $i < 9; $i++): ?>
			<div class="col-md-3 mb-4">
				<div class="card">
					<div class="card-body">
						<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17f13ad2547%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17f13ad2547%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.19140625%22%20y%3D%2296.6%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="profile image" class="img-fluid">
						<h5 class="card-title mt-3 mb-0">G-Shock, 2019</h5>
						<p class="font-weight-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit...</p>
						<a href="#" class="btn btn-primary btn-sm mb-2">Buy Now</a> &raquo; Price: $100
						<br>
						<?php for($j = 1; $j <= 5; $j++): ?>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
								<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
							</svg>
						<?php endfor; ?>
					</div>
				</div>
			</div>
		<?php endfor; ?>
	</div>
	<div class="row mb-4">
		<div class="col-md-12 text-right">
			<a href="#" class="btn btn-primary">View More &raquo;</a>
		</div>
	</div>
	<div class="row mt-4 mb-3">
		<div class="col-md-12">
			<h1 class="font-weight-bold">Top Rated</h1>
		</div>
	</div>
</div>
