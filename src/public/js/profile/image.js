const profileImage = document.getElementById('profileImage');
const fileInput = document.getElementById('fileInput');
console.log('Hello');
profileImage.addEventListener('click', function() {
    fileInput.click();
    console.log('Hello');
});

function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function() {
        const output = document.getElementById('profileImage');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
