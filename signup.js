$(document).ready(function() {
	$('#signup').click(function() {
		var username = $('#username').val();
		var password = $('#password').val();
		var nama_lengkap = $('#nama_lengkap').val();
		var email = $('#email').val();
		var no = $('#no_telp').val();
		var alamat = $('#alamat_lengkap').val();
		var dataString = "username="+username+"&password="+password+"&nama_lengkap="+nama_lengkap+"&email="+email+"&no_telp="+no+"&alamat_lengkap="+alamat+"&signup";
	alert ("tombol submit ditekan");
/*		if ($.trim(username).length>0 & $.trim(password).length>0 & $.trim(nama_lengkap).length>0 & $.trim(email).length>0 & $.trim(no).length>0 & $.trim(alamat).length>0) {
			$.ajax({
				type:'post',
				url:'http://localhost/user_futsal/api/signup.php',
				data:dataString,
				success:function(data){
					if (data=='berhasil') {
						alert('berhasil registrasi');
					} else if (data=='gagal'){
						alert ('gagal');
					} 
				}
			});
		}*/
	});
});