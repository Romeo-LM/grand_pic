const element = document.querySelectorAll('div.composant');

element.forEach(composant => {
    let width = composant.offsetWidth;
    composant.computedStyleMap.setPorperty('--width', `${width}px`);
});
