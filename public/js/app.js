$('.to-top a').on('click', function (e) {
    if (this.hash !== '') {
        e.preventDefault();
        const url = this.hash;
        $('html, body').animate({
            scrollTop: $(url).offset().top
        }, 800);
    }
});

window.onscroll = () => {
    const y = scrollY;
    if (y > 100) {
        document.querySelector('.to-top').classList.add('show');
    } else {
        document.querySelector('.to-top').classList.remove('show');
    }
}