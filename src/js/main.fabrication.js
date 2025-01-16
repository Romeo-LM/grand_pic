let path = document.querySelector('path');
let pathLenght = path.getTotalLength();

path.style.strokeDasharray = pathLenght + ' ' + pathLenght;

path.style.strokeDashoffset = pathLenght;
