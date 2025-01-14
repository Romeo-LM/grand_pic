document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('section.heroBiere img.bierehero');
    const ani = document.querySelectorAll('img.anihero');

    elements.forEach(image => {
        image.addEventListener('load', () => {
            let width = image.offsetWidth;
            image.style.setProperty('--width', `${width}px`);
        });

        if (image.complete) {
            let width = image.offsetWidth;
            image.style.setProperty('--width', `${width}px`);
        }
    });

    ani.forEach(image => {
        image.addEventListener('load', () => {
            let width = image.offsetWidth;
            let height = image.offsetHeight;
            image.style.setProperty('--width', `${width}px`);
            image.style.setProperty('--height', `${height}px`);
        });

        if (image.complete) {
            let width = image.offsetWidth;
            let height = image.offsetHeight;
            image.style.setProperty('--width', `${width}px`);
            image.style.setProperty('--height', `${height}px`);
        }
    });

    console.log('main-index.js exécuté');
});
