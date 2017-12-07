$(document).ready(function(){
    $.ajax({url: "http://aplikasifutsal.000webhostapp.com/php/read_jadwal.php", success: function(result){
        $(".jadwal").html(result);
    }});
});