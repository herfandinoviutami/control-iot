<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Channel List</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">My Chanel</li>
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
					<h4 class="card-title">API Documentation</h4>
				</div>
				<div class="card-body">
					<div class="header-doc">
						<h3>Write Data</h3>
					</div>
					<div class="content-content">
						<h5 class="w-100">Request</h5>
						<span class="badge badge-danger">HTTP Method</span>
						<p><i>GET</i></p>
						<span class="badge badge-danger">URL</span>
						<br>
						<code class="literal">
							<?= base_url() ?> insertChanel?api_key=<em>API_Keys</em>&chanel_id=<em>chanel_id</em>&field1=0
						</code>
						<br>
						<span class="badge badge-danger mb-3">URL Parameters</span>
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead class="table-primary">
									<tr>
										<th>Name</th>
										<th>Description</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<em> < chanel_id > </em>
										</td>
										<td>
											<em>(Required) Channel ID for the channel of interest. </em>
										</td>
									</tr>
									<tr>
										<td> < api_key > </td>
										<td>
											<em>(Required) api key for the channel of interest. </em>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<span class="badge badge-danger mb-3">URL Parameters</span>
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead class="table-primary">
									<tr>
										<th>Name</th>
										<th>Description</th>
										<th>Value Type</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>api_key</td>
										<td>(Required for private channels). Specify Read API Key for this specific channel. The Read API Key is found on the API Keys tab of the channel view.</td>
										<td>String</td>
									</tr>
									<tr>
										<td>results</td>
										<td>(Optional) Number of entries to retrieve. The maximum number is 8,000.</td>
										<td>Integer</td>
									</tr>
									<tr>
										<td>start</td>
										<td>(Optional) Start date in format YYYY-MM-DD%20HH:NN:SS.</td>
										<td>Datetime</td>
									</tr>
									<tr>
										<td>end</td>
										<td>(Optional) End date in format YYYY-MM-DD%20HH:NN:SS.</td>
										<td>datetime</td>
									</tr>
									<tr>
										<td>status</td>
										<td>(Optional) Include status updates in feed by setting "status=true".</td>
										<td>true or false</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
