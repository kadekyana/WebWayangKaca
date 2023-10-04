let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let body = document.querySelector('body');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active')
})

closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})