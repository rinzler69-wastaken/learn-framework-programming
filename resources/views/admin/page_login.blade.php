@extends('layouts.admin')

{{-- login ga butuh header & sidebar --}}
@section('title', 'Login Staf | Studio Admin')
@section('no-header', true)
@section('app-class', 'app-full-height app-without-header')

{{-- form sign in admin --}}
@section('content')
<!-- BEGIN login -->
<div class="login">
	<!-- BEGIN login-content -->
	<div class="login-content">
		<form action="{{ route('admin.index') }}" method="GET" name="login_form">
			<h1 class="text-center">Sign In Admin</h1>
			<div class="text-muted text-center mb-4">
				Masuk ke sistem manajemen operasional & membership gym.
			</div>
			<div class="mb-3">
				<label class="form-label">Email Staf</label>
				<input type="text" class="form-control form-control-lg fs-15px" value="admin@fitness-center.id" placeholder="admin@fitness-center.id">
			</div>
			<div class="mb-3">
				<div class="d-flex">
					<label class="form-label">Password</label>
					<a href="#" class="ms-auto text-muted">Lupa password?</a>
				</div>
				<input type="password" class="form-control form-control-lg fs-15px" value="secret123" placeholder="Masukkan password">
			</div>
			<div class="mb-3">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" checked value="" id="customCheck1">
					<label class="form-check-label fw-500" for="customCheck1">Ingat saya</label>
				</div>
			</div>
			<button type="submit" class="btn btn-theme btn-lg d-block w-100 fw-500 mb-3">Masuk Dashboard</button>
			<div class="text-center text-muted">
				Bukan admin? <a href="{{ route('landing.index') }}">Kembali ke Beranda</a>.
			</div>
		</form>
	</div>
	<!-- END login-content -->
</div>
<!-- END login -->
@endsection
