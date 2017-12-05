$(document).ready(function(){
    $.ajax({url: "php/read_jadwal.php", success: function(result){
        $(".jadwal").html(result);
    }});
});