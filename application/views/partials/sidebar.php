<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary  elevation-4">
	<!-- Brand Logo -->
	<a href="" class="brand-link">
		<img src="<?= base_url() ?>back_assets/img/logo.png" alt="AdminLTE Logo"
			 class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Dashboard Panel</span>
	</a>
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url() ?>back_assets/img/default.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#"
				   class="d-block"> <?= $this->session->userdata('username') ?></a>
			</div>
		</div>
		<!-- Sidebar Menu -->
		<?php if (isset($listing_role)) {
			if ($listing_role['role'] == 'admin') { ?>
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<li class="nav-item">
							<a href="<?= base_url('admin/dashboard') ?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/chanel') ?>" class="nav-link">
								<i class="nav-icon fas fa-book-open pl-2"></i>
								<p>
									Channel
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/user') ?>" class="nav-link">
								<i class="nav-icon fas fa-user pl-2"></i>
								<p>
									User
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/token') ?>" class="nav-link">
								<i class="nav-icon fas fa-pencil-alt"></i>
								<p>
									Token
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('documentation') ?>" class="nav-link">
								<i class="nav-icon fas fa-book-reader pl-2"></i>
								<p>
									Documentation
								</p>
							</a>
						</li>
					</ul>
				</nav>
			<?php } else if ($listing_role['role'] == 'user') { ?>
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<li class="nav-item">
							<a href="<?= base_url('user/dashboard') ?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('user/chanel') ?>" class="nav-link">
								<i class="nav-icon fas fa-book-open pl-2"></i>
								<p>
									Channel
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('user/grafik') ?>" class="nav-link">
								<i class="nav-icon fas fa-pencil-alt pl-2"></i>
								<p>
									Chart and Diagram
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('documentation') ?>" class="nav-link">
								<i class="nav-icon fas fa-book-reader pl-2"></i>
								<p>
									Documentation
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('setting') ?>" class="nav-link">
								<i class="nav-icon fas fa-cog pl-2"></i>
								<p>
									Setting
								</p>
							</a>
						</li>
					</ul>
				</nav>
			<?php }
		} ?>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>

<script>
	const navLinks = document.querySelectorAll('.nav-link'); // Select all nav links

	navLinks.forEach(link => {
		link.addEventListener('click', function () {
			// Remove 'active' class from all nav links
			navLinks.forEach(link => {
				link.classList.remove('active');
			});
			this.classList.add('active');
		});
	});
</script>
