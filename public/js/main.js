//alert ('hi');

let addlike = document.querySelector('.like');
let likenum = document.querySelector('.likenum');

addlike.addEventListener('click', ()=>{
 likenum.value = parseInt(likenum.value)+1;
});