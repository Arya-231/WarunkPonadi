<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($con,"SELECT * FROM users WHERE username='$username'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if (password_verify($password, $data['password'])) {
		// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		$_SESSION['login'] = true;
		// alihkan ke halaman dashboard admin
		header("location:ADMIN/index.php");

	// cek jika user login sebagai user
	}else if($data['level']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";
		$_SESSION['login'] = true;
		// alihkan ke halaman dashboard user
		header("location:USER/haluser.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:frmlogn.php?pesan=gagal");
	}	
	}
	
}else{
	header("location:frmlogn.php?pesan=gagal");
}



?>