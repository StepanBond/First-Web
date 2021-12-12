let header = document.querySelector('.header');

window.onscroll = function(){
    let top = window.scrollY;//gaunam pikselius
    if(top >= 50){
        header.classList.add('active')
    }else{
        header.classList.remove('active');
    }
}