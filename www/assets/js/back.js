document.addEventListener("deviceready", onDeviceReady, false);
function onDeviceReady() {
    document.addEventListener("backbutton", onBackKeyDown, false);
}

function onBackKeyDown(e){
    if($.mobile.activePage.is('#dept-list-page')){  
        //if the page checking doesnt work try:
        // $.mobile.activePage.attr("id") == '#dept-list-page'
        e.preventDefault();
        alert("back  button pressed");
        navigator.app.exitApp();

    }else{
        history.back();
    }
}