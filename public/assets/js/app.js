/* REVEAL */

const ratio = 0.1;
const options = {
root: null,
rootMargin: "0px",
threshold: ratio,
};

const handleIntersect = function(entries, observer){
entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio ){
        entry.target.classList.add('reveal-visible')
        observer.unobserve(entry.target)
    }
});
}

const observer = new IntersectionObserver(handleIntersect, options);
document.querySelectorAll('.reveal').forEach(function(reveal){
    observer.observe(reveal)
})

/* SLIDER */

const slider = document.querySelector(".items");
const slides = document.querySelectorAll(".item");
const button = document.querySelectorAll(".button");

let current = 0;
let prev = 14;
let next = 1;

for (let i = 0; i < button.length; i++) {
button[i].addEventListener("click", () => i == 0 ? gotoPrev() : gotoNext());
}

const gotoPrev = () => current > 0 ? gotoNum(current - 1) : gotoNum(slides.length - 1);

const gotoNext = () => current < 13 ? gotoNum(current + 1) : gotoNum(0);

const gotoNum = number => {
current = number;
prev = current - 1;
next = current + 1;

for (let i = 0; i < slides.length; i++) {
	slides[i].classList.remove("active");
	slides[i].classList.remove("prev");
	slides[i].classList.remove("next");
}

if (next == 14) {
	next = 0;
}

if (prev == -1) {
	prev = 14;
}

slides[current].classList.add("active");
slides[prev].classList.add("prev");
slides[next].classList.add("next");
}



const navLinks = [...document.querySelectorAll("nav a")]
const sections = [...document.querySelectorAll("section")]
let sectionsPosition;

function positionCalcul () {
    sectionsPosition = sections.map(section=>section.offsetTop)
} 

positionCalcul()

navLinks.forEach(link => link.addEventListener("click", addScrollSmooth))

function addScrollSmooth(e){
    const linkIndex = navLinks.indexOf(e.target)
    window.scrollTo({
        top: sectionsPosition[linkIndex],
        behavior: "smooth"
    })
}

window.addEventListener("resize", positionCalcul)

/* BUTTON UP */

const btn = document.querySelector('.btn');

btn.addEventListener("click", addScrollUp)

function addScrollUp(){
    window.scrollTo ({
        top: 0,
        left: 0,
        behavior: "smooth"
    })
}

/* ZOOM GALLERY */

document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".img-responsive");
    const modalBackdrop = document.querySelector('.modal-backdrop');

    const toggleModal = () => {
        const modalDialog = document.querySelector('.modal-dialog');
        modalDialog.classList.toggle('show');
        modalBackdrop.classList.toggle('show');
    };

    const closeModal = () => {
        const modalDialog = document.querySelector('.modal-dialog');
        modalDialog.classList.remove('show');
        modalBackdrop.classList.remove('show');
    };

    images.forEach(function (image) {
        image.addEventListener("click", function () {
            const src = image.getAttribute("src");
            const modalContent = "<img src='" + src + "' class='modal-img'>";
            const modalBody = document.querySelector(".modal-body");
            modalBody.innerHTML = modalContent;
            const modal = document.querySelector("#myModal");
            modal.style.display = "block";
            toggleModal();
        });
    });

    // Ajout de l'événement de clic pour fermer la modal lorsque l'utilisateur clique dessus
    const modalDialog = document.querySelector('.modal-dialog');
    modalDialog.addEventListener("click", function (event) {
        closeModal();
    });
});