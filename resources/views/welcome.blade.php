@extends('layouts.master')

@section('content')
<h2>Selamat Datang</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			<input type="text" class="form-control mb-3" placeholder="Name" />
			<input type="email" class="form-control mb-3" placeholder="Email"/>
			<input type="password" class="form-control mb-3" placeholder="Password"/>
			<select name="cars" id="mySelect" class="form-select" class="mb-3" onchange="myFunction()">
                <option value="">Pilih Daftar sebgai</option>
                <option value="umkm">UMKM</option>
                <option value="pelanggan">Pelanggan</option>
            </select>
            <div id="demo" style="display:none;" class="w-100">
                <input type="text" class="form-control mt-3" placeholder="KTP" />
            </div>
			<button class="mt-3">Daftar Sekarang</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Masuk</h1>
			<input type="email" class="form-control mb-3" placeholder="Email"/>
			<input type="password" class="form-control mb-3" placeholder="Password"/>
			<a href="#" style="color:blue">Lupa password?</a>
			<button>MASUK</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">MASUK</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Daftar Sekarang</button>
			</div>
		</div>
	</div>
</div>
@endsection