console.log('menuList');

const bouton = document.querySelector(".menu-hamburger");
const menuList = document.querySelector(".menuList");
let lines=bouton.querySelectorAll(".line");

bouton.addEventListener("click", (event)=>{
    event.preventDefault();
let menuIsActive = event.target.getAttribute("aria-expanded");
document.getElementById("site-navigation").classList.remove("toggled");
if(menuIsActive){
    menuList.style.display = "flex";
//console.log(lines);
lines[1].style.visibility="hidden";
lines[0].style.transform="translateY(6px) rotate(45deg)";
lines[2].style.transform="translateY(-6px) rotate(-45deg)";
lines[0].classList.toggle("active");
}else{
    menuList.style.display = "none";
    lines[1].style.visibility="visible";
    lines[0].style.transform="translateY(0px) rotate(0deg)";
    lines[2].style.transform="translateY(0px) rotate(0deg)";
}
})