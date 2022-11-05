let scrollpos = window.scrollY

const nav = document.getElementById("nav")
const scrollChange = 1

const add_class_on_scroll = () => nav.classList.add("fixed-top")
const remove_class_on_scroll = () => nav.classList.remove("fixed-top")

window.addEventListener('scroll', function() {
  scrollpos = window.scrollY;

  if (scrollpos >= scrollChange) { add_class_on_scroll() }
  else { remove_class_on_scroll() }

})


