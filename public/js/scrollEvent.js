
function landinghideNav() {
    if (document.documentElement.scrollTop > 500) {
        document.getElementById("landingpage_hide_nav").style.display = "block";
    } else {
        document.getElementById("landingpage_hide_nav").style.display = "none";
    }
}