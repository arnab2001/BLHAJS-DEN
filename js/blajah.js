const evo=document.getElementById('evolve');
const fill1=document.getElementById('fil-1');
const fill2=document.getElementById('fil-2');
const main=document.getElementById('main');
evo.addEventListener('click',start);
evo.addEventListener('mouseenter',rotate);
evo.addEventListener('mouseleave',rotateagain);

var audio = new Audio('../dancin.mpeg');

function rotateagain(){
    fill2.style.transform='rotateZ(0)' 
}

function rotate(){
    fill2.style.transform='rotateZ(145deg)'
}
function start(){
 fill1.style.opacity='0';
 fill2.style.opacity='0';
 audio.play();
 main.style.display='block';
}