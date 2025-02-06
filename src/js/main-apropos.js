document.addEventListener("DOMContentLoaded", () => {
    const capsules = document.querySelectorAll(".capsules");
    const quisommesnous = document.querySelector('.quisommesnous1');
    const nosengagements = document.querySelector('.nosengagements');
    const territoire = document.querySelector('.territoire');

    capsules.forEach(capsule => {
        capsule.addEventListener("click", () => {
            capsules.forEach(c => c.classList.remove("active"));
            capsule.classList.add("active");

            if (capsule.classList.contains("quiSommesNousCap")) {
                quisommesnous.classList.remove("desactive");
                nosengagements.classList.add("desactive");
                territoire.classList.add("desactive");
            }

            if (capsule.classList.contains("engagementsCap")) {
                quisommesnous.classList.add("desactive");
                nosengagements.classList.remove("desactive");
                territoire.classList.add("desactive");
            }

            if (capsule.classList.contains("territoireCap")) {
                quisommesnous.classList.add("desactive");
                nosengagements.classList.add("desactive");
                territoire.classList.remove("desactive");
            }
        });
    });
});