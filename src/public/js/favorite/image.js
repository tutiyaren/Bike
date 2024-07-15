document.querySelectorAll('.favorite-card__top').forEach(slider => {
    const images = slider.querySelectorAll('.favorite-card__image');
    let currentIndex = 0;

    if (images.length > 0) {
        images[0].style.display = 'block';
        setInterval(() => {
            images[currentIndex].style.display = 'none'; 
            currentIndex = (currentIndex + 1) % images.length; 
            images[currentIndex].style.display = 'block'; 
        }, 4000);
    }
});