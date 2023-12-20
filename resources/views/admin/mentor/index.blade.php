@extends('admin.layouts.main')
@section('content')
<section class="container-fluid mt-4">
	<div class="col-12 col-md-12">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Input Data Mentor Baru</h3>
			</div>
			<form role="form" action="{{ route('admin.mentor.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="row">
						<div class="form-group col-md-6">
							<label for="first_name">First Name</label>
							<input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" placeholder="Masukan first name" value="{{ old('first_name') }}">
							@error('first_name')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group col-md-6">
							<label for="last_name">Last Name</label>
							<input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="Masukan last name" value="{{ old('last_name') }}">
							@error('last_name')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-6">
							<label for="email">Email</label>
							<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan email" value="{{ old('email') }}">
							@error('email')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group col-md-6">
							<label for="username">Username</label>
							<input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Masukan username" value="{{ old('username') }}">
							@error('username')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-6">
							<label for="password">Password</label>
							<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukan password">
							@error('password')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group col-md-6">
							<label>Gender</label>
							<select class="form-control @error('gender') is-invalid @enderror select2" name="gender" style="width: 100%;">
								<option value="">-- Pilih Gender --</option>
								<option value="Laki" {{ old('gender') == 'Laki' ? 'selected' : '' }}>Laki</option>
								<option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
							</select>
							@error('gender')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-6">
							<label for="experience">Experience</label>
							<input type="text" class="form-control @error('experience') is-invalid @enderror" id="experience" name="experience" placeholder="Masukan experience" value="{{ old('experience') }}">
							@error('experience')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group col-md-6">
							<label for="photo">Photo Profile</label>
							<br>
							<input type="file" id="photo" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
							@error('photo')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>

					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>

	<div class="col-12 col-md-12">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Input Data Mentor Dari User</h3>
			</div>
			<form role="form" action="{{ route('admin.mentor.mentorUser') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="row">
						<div class="form-group col-md-6">
							<label>Pilih User</label>
							<select class="form-control @error('user') is-invalid @enderror select2" name="user" style="width: 100%;">
								<option value="">-- Pilih user --</option>
								@foreach($users as $user)
								<option value="{{ $user->id }}" {{ old('user') == $user->id ? 'selected' : '' }}>
									{{ $user->username }}
								</option>
								@endforeach
							</select>
							@error('user')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group col-md-6">
							<label for="experience">Experience</label>
							<input type="text" class="form-control @error('experience') is-invalid @enderror" id="experience" name="experience" placeholder="Masukan experience" value="{{ old('experience') }}">
							@error('experience')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Data User</h3>
				</div>
				<div class="card-body">
					{{-- <div class="row mb-3">
						<div class="col-md-4">
							<div id="date-range-filter">
								<label for="date-range-picker">Last Login Filter</label>
								<input type="text" id="date-range-picker" class="form-control" placeholder="Select date range" />
							</div>
						</div>
					</div> --}}
					<table id="userTable" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Photo</th>
								<th>Email</th>
								<th>Username</th>
								<th>Gender</th>
								<th>Job</th>
								<th>Experience</th>
								<th>Status Online</th>
								<th>Last Login</th>
								<th style="width: 140px;">Action</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Update User Modal -->
<div class="modal fade" id="updateUserModal" tabindex="-1" role="dialog" aria-labelledby="updateUserModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="updateUserModalLabel">Update User Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="updateUserForm" role="form" method="POST" action="" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<input type="hidden" name="user_id" id="user_id" value="">
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-md-6">
							<label for="modal_first_name">First Name</label>
							<input type="text" class="form-control" id="modal_first_name" name="first_name" placeholder="Masukan first name">
						</div>
						<div class="form-group col-md-6">
							<label for="modal_last_name">Last Name</label>
							<input type="text" class="form-control" id="modal_last_name" name="last_name" placeholder="Masukan last name">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="modal_username">Username</label>
							<input type="text" class="form-control" id="modal_username" name="username" placeholder="Masukan username">
						</div>
						<div class="form-group col-md-6">
							<label for="modal_email">Email</label>
							<input type="email" class="form-control" id="modal_email" name="email" placeholder="Masukan email">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="modal_password">Password</label>
							<input type="password" class="form-control" id="modal_password" name="password" placeholder="Masukan password">
						</div>
						<div class="form-group col-md-6">
							<label for="modal_gender">Gender</label>
							<select class="form-control" id="modal_gender" name="gender">
								<option value="">-- Pilih Gender --</option>
								<option value="Laki">Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="photo">Photo Profile</label>
							<br>
							<input type="file" id="photo" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
							@error('photo')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection

@push('script')
<script>
	var storageBaseUrl = "{{ Storage::url('') }}";

	function formatDate(dateString) {
		var options = {
			year: 'numeric',
			month: 'long',
			day: 'numeric',
			hour: '2-digit',
			minute: '2-digit',
			second: '2-digit',
			hour12: false
		};
		return new Date(dateString).toLocaleDateString("id-ID", options);
	}

	$(document).ready(function() {
		$('.select2').select2()

		var table = $('#userTable').DataTable({
			processing: true,
			serverSide: true,
			ajax: {
				url: "{{ route('admin.mentor.index') }}",
				type: "GET",
			},
			order: [
				[0, 'desc']
			],
			columns: [{
					data: 'id',
					name: 'id'
				},
				{
					data: 'user.first_name',
					name: 'first_name'
				},
				{
					data: 'user.last_name',
					name: 'last_name'
				},
				{
					data: 'user.image',
					name: 'image',
					render: function(data, type, row) {
						if (data) {
							var imagePath = storageBaseUrl + data;
							return '<a href="' + imagePath + '" data-lightbox="profile"><img src="' + imagePath + '" alt="Profile" width="50"></a>';
						} else {
							return 'Tidak ada gambar';
						}
					}
				},
				{
					data: 'user.email',
					name: 'email'
				},
				{
					data: 'user.username',
					name: 'username'
				},
				{
					data: 'user.gender',
					name: 'gender'
				},
				{
					data: 'user.job',
					name: 'job',
					render: function(data, type, row) {
						return data ? data : 'Tidak ada'
					}
				},
				{
					data: 'experience',
					name: 'experience',
					render: function(data, type, row) {
						return data ? data : 'Tidak ada'
					}
				},
				{
					data: 'user.status_online',
					name: 'status_online',
					render: function(data, type, row) {
						return data === true ? 'online' : 'offline';
					}
				},
				{
					data: 'user.last_login',
					name: 'last_login',
					render: function(data, type, row) {
						return data !== null ? formatDate(data) : 'Belum login';
					}
				},
				{
					data: 'action',
					name: 'action',
					orderable: false,
					searchable: false,
				},
			]
		});

		$('#userTable tbody').on('click', 'button.edit', function() {
			var userId = $(this).data('user.id'); // Get the user ID from the button's data-id attribute
			var tr = $(this).closest('tr');
			var data = table.row(tr).data();

			// Populate the modal form fields with data from the row
			$('#modal_first_name').val(data.user.first_name);
			$('#modal_last_name').val(data.user.last_name);
			$('#modal_username').val(data.user.username);
			$('#modal_email').val(data.user.email);
			$('#modal_gender').val(data.user.gender).trigger('change');
			$('#user_id').val(userId); // Set the hidden user_id input's value

			// Set the form's action attribute dynamically, inserting the user ID
			var actionUrl = "{{ route('admin.mentor.update', '') }}/" + userId;
			$('#updateUserForm').attr('action', actionUrl);

			// Show the modal
			$('#updateUserModal').modal('show');
		});

		$(document).on('click', '.show_confirm', function(e) {
			e.preventDefault();
			var form = $(this).closest('form');
			event.preventDefault();
			swal({
					title: `Delete Data ?`,
					text: "data yang di hapus tidak dapat dipulihkan!",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				})
				.then((willDelete) => {
					if (willDelete) {
						form.submit();
					}
				});
		});

		// Initialize the date range picker
		// $('#date-range-picker').daterangepicker({
		// 	autoUpdateInput: false,
		// 	locale: {
		// 		cancelLabel: 'Clear'
		// 	}
		// });

		// $('#date-range-picker').on('apply.daterangepicker', function(ev, picker) {
		// 	// Set the value of the input to the date range
		// 	$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));

		// 	// Update the global AJAX parameters for the DataTable
		// 	$.ajaxSetup({
		// 		data: {
		// 			startDate: picker.startDate.format('MM/DD/YYYY'),
		// 			endDate: picker.endDate.format('MM/DD/YYYY')
		// 		}
		// 	});

		// 	// Redraw the table to trigger the AJAX request with the new parameters
		// 	table.draw();
		// });


		// $('#date-range-picker').on('cancel.daterangepicker', function(ev, picker) {
		// 	$.ajaxSetup({
		// 		data: {
		// 			startDate: null,
		// 			endDate: null
		// 		}
		// 	});

		// 	// Redraw the table to trigger the AJAX request with the new parameters
		// 	table.draw();
		// });

	});

	$('#updateUserModal').on('shown.bs.modal', function() {
		$('#modal_gender').select2({
			dropdownParent: $('#updateUserModal')
		});
	});

	$('#updateUserModal').on('hidden.bs.modal', function() {
		$('#modal_gender').select2('destroy');
	});
</script>
@endpush