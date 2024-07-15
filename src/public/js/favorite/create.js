function triggerFileInput(inputId) {
    document.getElementById(inputId).click();
}

function previewImage(event, elementId) {
    const reader = new FileReader();
    reader.onload = function() {
        const output = document.getElementById(elementId);
        output.src = reader.result;
        output.style.display = 'block';
        output.previousElementSibling.style.display = 'none';
    };
    reader.readAsDataURL(event.target.files[0]);
}

document.addEventListener('DOMContentLoaded', function() {
    const details1 = document.getElementById('details1');
    const details2 = document.getElementById('details2');
    const details3 = document.getElementById('details3');
    const details4 = document.getElementById('details4');

    details1.addEventListener('toggle', function() {
        if (details1.open) {
            details2.classList.remove('image-hidden');
        } else {
            details2.classList.add('image-hidden');
            details3.classList.add('image-hidden');
            details4.classList.add('image-hidden');
        }
    });

    details2.addEventListener('toggle', function() {
        if (details2.open) {
            details3.classList.remove('image-hidden');
        } else {
            details3.classList.add('image-hidden');
            details4.classList.add('image-hidden');
        }
    });

    details3.addEventListener('toggle', function() {
        if (details3.open) {
            details4.classList.remove('image-hidden');
        } else {
            details4.classList.add('image-hidden');
        }
    });
});