<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="" class="brand-link">
		<img src="{{asset('user/img/logo.webp')}}" alt="WarungSkill Logo" class="brand-image" style="opacity: .8">
		<span class="brand-text font-weight-light">Admin</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel d-flex mb-3 mt-3 pb-3">
			<div class="info">
				<a href="#" class="d-block">
					{{ Auth::guard('admin')->user()->first_name . ' ' . Auth::guard('admin')->user()->last_name }}
				</a>
			</div>
		</div>
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="{{ route('admin.dashboard.index') }}" class="nav-link {{ \Route::is('admin.dashboard.*') ? 'active' : '' }}">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>

				{{-- master user --}}
				<li class="nav-item {{ \Route::is('admin.user.*') || \Route::is('admin.mentor.*') ? 'menu-open' : '' }}">
					<a href="#" class="nav-link {{ \Route::is('admin.user.*') || \Route::is('admin.mentor.*') ? 'active' : '' }}">
						<i class="nav-icon fa fa-user"></i>
						<p>
							Data User
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.user.index') }}" class="nav-link {{ \Route::is('admin.user.*') ? 'active' : '' }}">
								<i class="far fa-circle nav-icon"></i>
								<p>Data Customer</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.mentor.index') }}" class="nav-link {{ \Route::is('admin.mentor.*') ? 'active' : '' }}">
								<i class="far fa-circle nav-icon"></i>
								<p>Data Mentor</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item">
					<a href="{{ route('admin.logout') }}" class="nav-link">
						<i class="nav-icon fas fa-sign-out-alt"></i>
						<p>
							Logout
						</p>
					</a>
				</li>

			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>