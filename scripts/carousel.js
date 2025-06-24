const carousel = document.querySelector('.carousel');
const items = Array.from(document.querySelectorAll('.carousel-item'));

let isDragging = false;
let startX = 0;
let currentTranslate = 0;
let prevTranslate = 0;
let currentIndex = 2; // Empezamos en la primera imagen
let animationID = 0;

// Función para actualizar el carrusel y aplicar la clase 'selected'
function updateCarousel() {
    const offset = -currentIndex * 65; // Calcula el desplazamiento en porcentaje
    carousel.style.transition = 'transform 0.5s ease-in-out';
    carousel.style.transform = `translateX(${offset}%)`;

    // Actualizar la clase 'selected' para marcar la imagen principal
    items.forEach((item, index) => {
        if (index === currentIndex) {
            item.classList.add('selected');
        } else {
            item.classList.remove('selected');
        }
    });
}

// Función para manejar el arrastre
function touchStart() {
    return function (event) {
        isDragging = true;
        startX = getPositionX(event);
        prevTranslate = currentTranslate;
        cancelAnimationFrame(animationID);
    };
}

// Durante el arrastre
function touchMove(event) {
    if (!isDragging) return;
    const currentPosition = getPositionX(event);
    currentTranslate = prevTranslate + currentPosition - startX;
    carousel.style.transform = `translateX(${currentTranslate}%)`;
}

// Finalizar el arrastre
function touchEnd() {
    isDragging = false;
    const movedBy = currentTranslate - prevTranslate;

    // Cambiar de imagen si se ha movido lo suficiente
    if (movedBy < -20) {
        currentIndex++;
    } else if (movedBy > 20) {
        currentIndex--;
    }

    // Hacer que el carrusel sea infinito: no hay último ni primer elemento
    if (currentIndex >= items.length) {
        currentIndex = 0; // Vuelve a la primera imagen
    } else if (currentIndex < 0) {
        currentIndex = items.length - 1; // Vuelve a la última imagen
    }

    setPositionByIndex();
}

// Calcular la posición del clic o toque
function getPositionX(event) {
    return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX;
}

// Ajustar la posición del carrusel según el índice actual
function setPositionByIndex() {
    currentTranslate = -currentIndex * 100; // Calcula la nueva posición
    prevTranslate = currentTranslate;
    updateCarousel();
}

// Agregar eventos a las imágenes
items.forEach((item, index) => {
    const image = item.querySelector('img');
    image.addEventListener('dragstart', (e) => e.preventDefault());

    // Eventos táctiles
    item.addEventListener('touchstart', touchStart(index));
    item.addEventListener('touchmove', touchMove);
    item.addEventListener('touchend', touchEnd);

    // Eventos del mouse
    item.addEventListener('mousedown', touchStart(index));
    item.addEventListener('mousemove', touchMove);
    item.addEventListener('mouseup', touchEnd);
    item.addEventListener('mouseleave', () => {
        if (isDragging) touchEnd();
    });
});

// Configuración inicial del carrusel
updateCarousel();
