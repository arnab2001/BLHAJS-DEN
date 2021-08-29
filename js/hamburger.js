const hamBurger=document.querySelector('.ab-ham');
const NavLINK=document.querySelector('.ab-nav-links');
const line=document.querySelectorAll('.line')

hamBurger.addEventListener("click", () =>
{
  NavLINK.classList.toggle("open");
   line.forEach(line => {
     line.classList.toggle("gg");
   })
});