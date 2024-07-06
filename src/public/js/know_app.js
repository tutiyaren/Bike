document.addEventListener("DOMContentLoaded", function() {
    const boxes = document.querySelectorAll('.know-inner__life, .know-app__app, .know-app__lastMessage, .know-app__bye');
    
    let observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('is-active');
                }, index * 3000);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    boxes.forEach(box => {
        observer.observe(box);
    });
});