<!-- Modal login -->

<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
						<div class="modal-login d-flex justify-content-between flex-column align-content-between align-items-center gap-3">
								<img src="{{ asset('user') }}/img/logo.webp" alt="" srcset="">

								{{-- main login --}}
								<div class="main-login d-flex justify-content-between align-content-between align-items-center flex-column">
										<div class="title text-center">
												<h4>Login</h4>
												<p>Untuk Lanjut Belajar</p>
										</div>
										<div class="mb-3">
												<input type="text" wire:model="email" class="form-control is-invalid" placeholder="Email">
												@error('email')
														<span class="error">{{ $message }}</span>
												@enderror
										</div>
										<div class="mb-3">
												<input type="password" wire:model="password" placeholder="Password">
												@error('password')
														<span class="error">{{ $message }}</span>
												@enderror
										</div>


										<div class="d-flex w-100 justify-content-between">
												<button wire:click="submit" class="btn btn-warning fw-bold px-3">Masuk</button>
												<a href="#" class="text-decoration-none">Lupa password ?</a>
										</div>

								</div>

								<div class="d-flex flex-column text-center">
										<p class="mb-1">Belum punya akun ?</p>
										<h5>Buat Akun</h5>
								</div>

						</div>

				</div>
		</div>
</div>
