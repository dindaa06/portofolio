const nb = document.getElementById('navbar');

window.addEventListener('scroll', () => {
    if(window.scrollY > 0) {
        nb.classList.add('solid-bg-cs');
    }
    else{
        nb.classList.remove('solid-bg-cs');
    }
});