var icon = document.getElementsByClassName("custom-icon")[0];
var nav = document.getElementsByClassName("mobile-nav")[0];
var myName = document.getElementById("name");
var nameLink = document.getElementById("name-wrap");

function manageNav() {
  if (nav.className === "container-fluid header-container mobile-nav d-lg-none display-hide" ) {
    nav.classList.remove("display-hide");
    nav.classList.add("display-show");
    icon.setAttribute("src","public/media/close.png");
  } else {
    nav.classList.remove("display-show");
    nav.classList.add("display-hide");
    icon.setAttribute("src","public/media/menu.jpg");
  }
};

if (screen.width<992){
  myName.addEventListener("click", manageNavOnName);

  function manageNavOnName() {
    if (nav.className === "container-fluid header-container mobile-nav d-lg-none display-show" ) {
      nav.classList.remove("display-show");
      nav.classList.add("display-hide");
      icon.setAttribute("src","public/media/menu.jpg");
    } 
  };
} else {
  nameLink.removeAttribute("href");
}
