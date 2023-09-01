const headerInput = document.querySelector('#header_image');
const profileInput = document.querySelector('#profile_image');
const imgHeader = document.querySelector('#header_image_none');
const imgProfile = document.querySelector('#profile_image_none');

headerInput.addEventListener('change', function() {
    const selectedFile = headerInput.files[0];
    if (selectedFile) {
        const reader = new FileReader();
        reader.onload = function(e) {
            imgHeader.src = e.target.result;
            imgHeader.style.display = 'block';
        };
        reader.readAsDataURL(selectedFile);
    }
});
profileInput.addEventListener('change', function() {
    const selectedFile = profileInput.files[0];
    if (selectedFile) {
        const reader = new FileReader();
        reader.onload = function(e) {
            imgProfile.src = e.target.result;
            imgProfile.style.display = 'block';
        };
        reader.readAsDataURL(selectedFile);
    }
});
