<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Setting</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Setting</li>
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
					<h3 class="card-title">Information : </h3>
					<br>
					<ul>
						<li>
							<small class=" badge badge-danger">This setting is only to regulate the time interval for data retrieval from the server to be visualized in the graph that is created</small>
						</li>
						<li>
							<small class="badge badge-danger">There is an edit button and also a reset button that will be used by the user to start the reset and update the JQuery time</small>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr class="text-center">
									<th>No</th>
									<th>Time</th>
									<th>Updated</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php if (!empty($setting)) {
									$no = 1;
									foreach ($setting as $item) { ?>
										<tr class="text-center">
											<td><?= $no++ ?></td>
											<td><?= $item->waktu ?> second</td>
											<td><?= $item->last_update ?></td>
											<td>
												<button class="btn btn-primary" data-toggle="modal" data-target="#editWaktu"><i class="fas fa-edit"></i></button>
												<button class="btn btn-danger" data-toggle="modal" data-target="#resetWaktu"><i class="fas fa-times-circle"></i></button>
											</td>
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

<div class="modal fade" id="editWaktu">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Edit Setting</h3>
			</div>
			<?php foreach ($setting as $item) { ?>
				<form action="<?= base_url('setting/update') ?>" method="post">
					<div class="modal-body">
						<div class="form-group">
							<label for="waktu">Time</label>
							<input type="hidden" name="id" id="id" value="<?= $item->id ?>">
							<input type="text" name="waktu" id="waktu" class="form-control" value="<?= $item->waktu ?>">
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
						<button class="btn btn-primary" type="submit">Save</button>
					</div>
				</form>
			<?php } ?>
		</div>
	</div>
</div>

<div class="modal fade" id="resetWaktu">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Time Reset</h3>
			</div>
			<?php foreach ($setting as $item) { ?>
				<form action="<?= base_url('setting/update') ?>" method="post">
					<div class="modal-body">
						<div class="form-group">
							<input type="hidden" name="id" id="id" value="<?= $item->id ?>">
							<input type="hidden" name="waktu" id="waktu" value="1.5">
							Do you want to reset the time...?
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button class="btn btn-danger" type="submit">Reset</button>
					</div>
				</form>
			<?php } ?>
		</div>
	</div>
</div>