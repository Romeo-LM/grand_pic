document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('section.heroBiere img.bierehero');
    const ani = document.querySelectorAll('img.anihero');
    const tablist = document.querySelectorAll('div.tablist');
    const hero = document.querySelectorAll('div.nb1, section.heroBiere>img');

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

    // Fonction pour synchroniser la classe 'selected' en fonction de la margin-left actuelle
    const syncSelectedClass = () => {
        // Boucle sur tous les éléments de hero
        hero.forEach((el) => {
            // Vérifie que l'élément est bien de type Element avant de continuer
            if (!(el instanceof Element)) return;

            // Obtenir la valeur actuelle de margin-left de l'élément hero
            const marginLeft = parseFloat(getComputedStyle(el).marginLeft); // Récupère la valeur en pixels
            const index = Math.abs(Math.round(marginLeft / window.innerWidth)); // Convertir en index basé sur 100vw

            // Mettre à jour les classes 'selected' dans toutes les tablist
            tablist.forEach(divTablist => {
                const children = Array.from(divTablist.children);
                children.forEach((child, childIndex) => {
                    if (childIndex === index) {
                        child.classList.add('selected');
                    } else {
                        child.classList.remove('selected');
                    }
                });
            });
        });
    };

    hero.forEach(el => {
        el.addEventListener('transitionend', (event) => {
            if (event.propertyName === 'margin-left') {
                syncSelectedClass();
            }
        });
    });

    tablist.forEach((divTablist) => {
        const children = Array.from(divTablist.children); // Obtenir les enfants de tablist
        children.forEach((child, childIndex) => {
            child.addEventListener('click', () => {
                const marginValue = `-${childIndex * 100}vw`;
                hero.forEach(el => {
                    el.style.marginLeft = marginValue;
                });
            });
        });
    });
    syncSelectedClass();
});
