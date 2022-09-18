const nav = document.querySelector("nav")
const a = document.querySelectorAll("nav a")

a.forEach(a => {
  a.style.color = "black"
});

document.addEventListener("scroll", function(ev) {
  if(ev.target.scrollingElement.scrollTop > 0) {
    nav.style.backgroundColor = "#212529"
    nav.style.boxShadow = "0 5px 10px rgba(0, 0, 0, .2)"
    nav.style.transition = "0.2s"
    a.forEach(a => {
      a.style.color = "white"
    });
    buttonRes.style.backgroundColor = "white"
  }
  else {
    nav.style.transition = ".6s"
    nav.style.backgroundColor = "transparent"
    nav.style.boxShadow = "none"
    a.forEach(a => {
      a.style.color = "black"
    });
  }
})