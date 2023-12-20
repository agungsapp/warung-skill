@extends('admin.layouts.main')
@section('content')

<div class="row">
	<div class="col-12 col-sm-6 col-md-3">
		<div class="info-box">
			<span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">CPU Traffic</span>
				<span class="info-box-number">
					10
					<small>%</small>
				</span>
			</div>

		</div>

	</div>

	<div class="col-12 col-sm-6 col-md-3">
		<div class="info-box mb-3">
			<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Likes</span>
				<span class="info-box-number">41,410</span>
			</div>

		</div>

	</div>


	<div class="clearfix hidden-md-up"></div>
	<div class="col-12 col-sm-6 col-md-3">
		<div class="info-box mb-3">
			<span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Sales</span>
				<span class="info-box-number">760</span>
			</div>

		</div>

	</div>

	<div class="col-12 col-sm-6 col-md-3">
		<div class="info-box mb-3">
			<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">New Members</span>
				<span class="info-box-number">2,000</span>
			</div>

		</div>

	</div>

</div>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title">Monthly Recap Report</h5>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse">
						<i class="fas fa-minus"></i>
					</button>
					<button type="button" class="btn btn-tool" data-card-widget="remove">
						<i class="fas fa-times"></i>
					</button>
				</div>
			</div>

			<div class="card-body" style="display: block;">
				<div class="row">
					<div class="col-md-8">
						<p class="text-center">
							<strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
						</p>
						<div class="chart">
							<div class="chartjs-size-monitor">
								<div class="chartjs-size-monitor-expand">
									<div class=""></div>
								</div>
								<div class="chartjs-size-monitor-shrink">
									<div class=""></div>
								</div>
							</div>

							<canvas id="salesChart" height="180" style="height: 180px; display: block; width: 878px;" width="878" class="chartjs-render-monitor"></canvas>
						</div>

					</div>

					<div class="col-md-4">
						<p class="text-center">
							<strong>Goal Completion</strong>
						</p>
						<div class="progress-group">
							Add Products to Cart
							<span class="float-right"><b>160</b>/200</span>
							<div class="progress progress-sm">
								<div class="progress-bar bg-primary" style="width: 80%"></div>
							</div>
						</div>

						<div class="progress-group">
							Complete Purchase
							<span class="float-right"><b>310</b>/400</span>
							<div class="progress progress-sm">
								<div class="progress-bar bg-danger" style="width: 75%"></div>
							</div>
						</div>

						<div class="progress-group">
							<span class="progress-text">Visit Premium Page</span>
							<span class="float-right"><b>480</b>/800</span>
							<div class="progress progress-sm">
								<div class="progress-bar bg-success" style="width: 60%"></div>
							</div>
						</div>

						<div class="progress-group">
							Send Inquiries
							<span class="float-right"><b>250</b>/500</span>
							<div class="progress progress-sm">
								<div class="progress-bar bg-warning" style="width: 50%"></div>
							</div>
						</div>

					</div>

				</div>

			</div>

			<div class="card-footer" style="display: block;">
				<div class="row">
					<div class="col-sm-3 col-6">
						<div class="description-block border-right">
							<span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
							<h5 class="description-header">$35,210.43</h5>
							<span class="description-text">TOTAL REVENUE</span>
						</div>

					</div>

					<div class="col-sm-3 col-6">
						<div class="description-block border-right">
							<span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
							<h5 class="description-header">$10,390.90</h5>
							<span class="description-text">TOTAL COST</span>
						</div>

					</div>

					<div class="col-sm-3 col-6">
						<div class="description-block border-right">
							<span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
							<h5 class="description-header">$24,813.53</h5>
							<span class="description-text">TOTAL PROFIT</span>
						</div>

					</div>

					<div class="col-sm-3 col-6">
						<div class="description-block">
							<span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
							<h5 class="description-header">1200</h5>
							<span class="description-text">GOAL COMPLETIONS</span>
						</div>

					</div>
				</div>

			</div>

		</div>

	</div>

</div>

@endsection