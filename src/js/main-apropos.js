document.addEventListener("DOMContentLoaded", () => {
    const capsules = document.querySelectorAll(".capsules, .capsules1, .capsules2");
    const quisommesnous = document.querySelector('.quisommesnous1');
    const nosengagements = document.querySelector('.nosengagements');
    const territoire = document.querySelector('.territoire');



    capsules.forEach(capsule => {
        capsule.addEventListener("click", () => {
            capsules.forEach(c => c.classList.remove("active"));
            capsule.classList.add("active");

            if (capsule.classList.contains("capsules")) {
                quisommesnous.classList.remove("desactive");
                nosengagements.classList.add("desactive");
                territoire.classList.add("desactive");
            }

            if (capsule.classList.contains("capsules1")) {
                quisommesnous.classList.add("desactive");
                nosengagements.classList.remove("desactive");
                territoire.classList.add("desactive");
            }

            if (capsule.classList.contains("capsules2")) {
                quisommesnous.classList.add("desactive");
                nosengagements.classList.add("desactive");
                territoire.classList.remove("desactive");
            }
        });

    });

});