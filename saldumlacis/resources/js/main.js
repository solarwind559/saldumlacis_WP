const x = document.getElementById("switch-to");
const lines = document.getElementById("switch-from");
const topnav = document.getElementById("navigation");


function myFunction() {
  var toggleBtn = document.getElementById("open");
  if (toggleBtn.style.display === "block") {
    toggleBtn.style.display = "none";
    lines.style.display = "block";
    x.style.display = "none";
    topnav.style.backgroundColor = "transparent";


  } else {
    toggleBtn.style.display = "block";
    lines.style.display = "none";
    x.style.display = "block";
    topnav.style.backgroundColor = "white";
  }
}