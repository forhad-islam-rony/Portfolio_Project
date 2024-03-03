
const toggleBtn = document.querySelector('.hamburger')
const toggleBtnIcon = document.querySelector('.hamburger i')
const dropDownMenu = document.querySelector('.dropdown-menu')

toggleBtn.onclick = function(){
    dropDownMenu.classList.toggle('open')
    const isOpen = dropDownMenu.classList.contains('open')

    toggleBtnIcon.classList = isOpen
    ? 'fa-solid fa-xmark'
    : 'fa-solid fa-bars'
}

var typed = new Typed(".typing",{
    strings: ["Student","Programmer"],
    typeSpeed: 150,
    backSpeed: 150,
    loop: true
})

const resumeHeading = document.querySelector(".tab-titles");
const resumeTabs = document.querySelectorAll(".tab-content");

resumeHeading.onclick = (event) => {
  event.preventDefault();
  const clickedItemId = event.target.dataset.id;
  if (clickedItemId) {
    resumeHeading.querySelector(".active").classList.remove("active");
    event.target.classList.add("active");

    resumeTabs.forEach((tab) => {
      tab.classList.remove("active");
    });
    const correspondingTab = document.getElementById(clickedItemId);
    correspondingTab.classList.add("active");
  }
};

const toTop = document.querySelector(".scrollTop");

window.addEventListener("scroll", ()=> {
  if(window.pageYOffset >100){
    toTop.classList.add("active");
  }
  else{
    toTop.classList.remove("active");
  }
})


// const dots=[];
// const cursor = {
//   x:0,
//   y:0,
// };

// for(let i=0;i<40;i++){
//   const dot = 
//   document.createElement("div");
//   dot.className = "dot";
//   document.body.appendChild(dot);
//   dots.push(dot);
// }

// document.addEventListener("mousemove",(e)=>{
//   cursor.x = e.clientX;
//   cursor.y = e.clientY;
// });

// function draw(){
//   let x= cursor.x;
//   let y=cursor.y;

//   dots.forEach((dot, index)=>{
//     const nextDot = dots[index + 1] ||
//     dots[0];

//      dot.style.left = x + "px";
//      dot.style.top = y + "px";
    
//     x+=(nextDot.offsetLeft - 
//       dot.offsetLeft) *.5;
//       y += (nextDot.offsetTop -
//         dot.offsetTop) *.5;
//   });
// }
// setInterval(draw,10);

//Scroll Reveal

const sr = ScrollReveal({
  reset: true,
  distance: "60px",
  duration: 2500,
  delay: 400,
});

sr.reveal(".about-intro, .section-title, .contact_data, .left, .title, .logo, .row2", {
  origin: "left",
});
sr.reveal(
  ".tab-titles,.about-text,.row,.portfolio-wrapper,.contact,.contact-form",
  {
    origin: "bottom",
  }
);
sr.reveal(".right, .fa-brands, .row1, .navlist", {
  origin: "top",
});
