let path = document.querySelector('path.cls-1');
let pathLength = path.getTotalLength();
let down = document.querySelector('img.down');

path.style.strokeDasharray = pathLength + ' ' + pathLength;
path.style.strokeDashoffset = pathLength;

window.addEventListener('scroll', () => {
    var scrollPercentage = (document.documentElement.scrollTop + document.body.scrollTop) / 
        (document.querySelector('main.manufacturing').scrollHeight - document.documentElement.clientHeight);

    scrollPercentage = Math.min(Math.max(scrollPercentage, 0), 1);
    var drawLength = pathLength * scrollPercentage;
    path.style.strokeDashoffset = Math.max(pathLength - drawLength, 0)

    down.classList.toggle("hidden", window.scrollY > 0);
});
