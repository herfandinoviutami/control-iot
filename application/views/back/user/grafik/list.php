<div class="content-wrapper">

	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Chart and Diagram</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Chart and Diagram</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<section class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">List Chart and Diagram</h3>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead class="table-primary">
								<tr>
									<th>Channel Name</th>
									<th>Channel ID</th>
								</tr>
							</thead>
							<tbody>
								<?php if (!empty($list_chanel)) {
									foreach ($list_chanel as $item) { ?>
										<tr>
											<td>
												<a href="<?= base_url('user/grafikId/' . $item->id_chanel) ?>" class="channel-link" data-id="<?= $item->id_chanel ?>">
													<?= $item->nama ?>
												</a>
											</td>
											<td><?= $item->id_chanel ?></td>
										</tr>
								<?php }
								} ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
