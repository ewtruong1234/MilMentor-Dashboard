import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    const prevButtons = document.querySelectorAll(".carousel-button.prev");
    const nextButtons = document.querySelectorAll(".carousel-button.next");

    prevButtons.forEach(button => {
        setupCarousel(button.dataset.type);
    });

    nextButtons.forEach(button => {
        // Prevents duplicate setup in case both buttons exist
        const type = button.dataset.type;
        const alreadyInitialized = button.closest(`.recommended-${type}s-container`).dataset.initialized;
        if (!alreadyInitialized) {
            setupCarousel(type);
            button.closest(`.recommended-${type}s-container`).dataset.initialized = "true";
        }
    });

    function setupCarousel(type) {
        const container = document.querySelector(`.recommended-${type}s-container`);
        const prevButton = container.querySelector(`.carousel-button.prev[data-type="${type}"]`);
        const nextButton = container.querySelector(`.carousel-button.next[data-type="${type}"]`);
        const wrapper = container.querySelector(".carousel-wrapper");
        const track = container.querySelector(`.carousel-${type}-container`);
        const items = track.querySelectorAll(`.${type}-box`);

        const styles = getComputedStyle(document.documentElement);
        const itemsPerSlide = parseInt(styles.getPropertyValue('--boxes-visible')) || 3;
        const totalItems = items.length;
        let currentIndex = 0;

        const boxWidth = parseInt(styles.getPropertyValue('--mentor-box-width')) || 250;
        const boxMargin = parseInt(styles.getPropertyValue('--box-margin')) || 20;
        
        const groupWidth = (boxWidth + boxMargin) * itemsPerSlide;

        const totalGroups = Math.ceil(totalItems / itemsPerSlide);
        wrapper.style.width = `${groupWidth - boxMargin}px`;

        function updateCarousel() {
            track.style.transform = `translateX(-${currentIndex * groupWidth}px)`;
        }

        prevButton.addEventListener("click", () => {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = totalGroups - 1;
            }
            updateCarousel();
        });

        nextButton.addEventListener("click", () => {
            if (currentIndex < totalGroups - 1) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            updateCarousel();
        });
    };
});

