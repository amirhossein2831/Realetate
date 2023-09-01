const flashMessage = document.getElementById('flashMessage');

if (flashMessage) {
    flashMessage.style.opacity = '1';
    flashMessage.style.height = 'auto';

    setTimeout(function() {
        flashMessage.classList.add('hide');

        flashMessage.addEventListener('animationend', function() {
            flashMessage.remove();
        });
    }, 4000);
}
