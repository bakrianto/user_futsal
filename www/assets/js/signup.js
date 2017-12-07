$(document).ready(function() {
	$('#signup').click(function(event) {
		event.preventDefault();
		var username = $('#username').val();
		var pass = $('#password').val();
		var nama = $('#nama_lengkap').val();
		var email = $('#email').val();
		var no = $('#no_telp').val();
		var alamat = $('#alamat_lengkap').val();
	});
});