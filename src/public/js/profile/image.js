const profileImage = document.getElementById('profileImage');
const fileInput = document.getElementById('fileInput');

profileImage.addEventListener('click', function() {
    fileInput.click();
});

function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function() {
        const output = document.getElementById('profileImage');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
