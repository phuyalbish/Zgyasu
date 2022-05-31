
function ShowHideDashboard(cookie=0){

    if(cookie == 1){
        document.getElementById('getstarted1').style.display = "none";
        document.getElementById('getstarted2').style.display = "none";
        document.getElementById('getstarted3').style.display = "none";
        document.getElementById('getstarted4').style.display = "none";
        document.getElementById('getstarted5').style.display = "none";
        document.getElementById('getstarted6').style.display = "none";
        document.getElementById('getstarted7').style.display = "none";

        document.getElementById('opendashboard1').style.display = "inline";
        document.getElementById('opendashboard2').style.display = "inline";
        document.getElementById('opendashboard3').style.display = "inline";
        document.getElementById('opendashboard4').style.display = "inline";
        document.getElementById('opendashboard5').style.display = "inline";
        document.getElementById('opendashboard6').style.display = "inline";
        document.getElementById('opendashboard7').style.display = "inline";

    }
    else{
        document.getElementById('opendashboard1').style.display = "none";
        document.getElementById('opendashboard2').style.display = "none";
        document.getElementById('opendashboard3').style.display = "none";
        document.getElementById('opendashboard4').style.display = "none";
        document.getElementById('opendashboard5').style.display = "none";
        document.getElementById('opendashboard6').style.display = "none";
        document.getElementById('opendashboard7').style.display = "none";

        document.getElementById('getstarted1').style.display = "inline";
        document.getElementById("getstarted2").style.display = "inline";
        document.getElementById('getstarted3').style.display = "inline";
        document.getElementById('getstarted4').style.display = "inline";
        document.getElementById('getstarted5').style.display = "inline";
        document.getElementById('getstarted6').style.display = "inline";
        document.getElementById('getstarted7').style.display = "inline";

    }
    // window.localStorage.setItem('user', JSON.stringify(user));
    //document.getElementById('demo').innerHTML = localStorage.getItem('user');
}

function ShowHideDashboardNav(cookie=0){
        if(cookie == 1){
            document.getElementById('getstarted1').style.display = "none";
            document.getElementById('opendashboard1').style.display = "inline";

        }
        else{
            document.getElementById('opendashboard1').style.display = "none";
            document.getElementById('getstarted1').style.display = "inline";
        }
}
function popupclose(){
    document.getElementById('signinpopup').style.display = "none";
}
function openpopup(){
    document.getElementById('signinpopup').style.display = "block";
}


