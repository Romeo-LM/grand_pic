document.addEventListener('DOMContentLoaded', () => {
    const checkBox = document.querySelector('div.checkbox input');
    const enterButton = document.querySelector('div.buttonsbox button');
    const popUp = document.querySelector('div.popUp');
    const body = document.body;

    if (localStorage.getItem('majeur') !== 'true') {
        body.classList.add('no-scroll');
    } else {
        popUp.classList.add('hidden');
    }

    enterButton.addEventListener('click', () => {

        if (checkBox.checked) {
            localStorage.setItem('majeur', 'true');
            body.classList.remove('no-scroll');
            popUp.classList.add('hidden');

        } else {
            alert('Vous devez certifier avoir 18 ans ou plus pour accéder à ce contenu.');
        }
    });

    window.addEventListener("scroll", function () {
        const header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    });
});