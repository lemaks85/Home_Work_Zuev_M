
async function fetchPhotos() {
    try {
        const response = await fetch(`https://api.unsplash.com/photos/random?client_id=Jp7Pd4UwlOWbSfHxrdA5pvmNNvH-P0bFnqVMv9IH8Uo`);
        const photo = await response.json();
        return photo;
    } catch (error) {
        console.error('Error when uploading photos:', error);
        return {};
    }
}

async function renderPhoto() {
    const photo = await fetchPhotos();
    if (photo) {
        const imageBox = document.querySelector('.image_box');
        const img = document.createElement('img');
        img.classList.add('image');

        img.src = photo.urls.small;
        img.alt = photo.alt_description;
        imageBox.appendChild(img);

        const photographerName = document.querySelector(
            '.image_photographer-name'
        );
        photographerName.textContent = `${photo.user.name}`;

        const imageLikesCounterSpan = document.querySelector(
            '.image_likes-counter'
        );
        imageLikesCounterSpan.textContent = `${photo.likes}`;
    }
}

window.addEventListener('load', () => {
    renderPhoto();
});

const counterButton = document.querySelector('.image_likes-button');
counterButton.addEventListener('click', function () {increaseCounter();});
function increaseCounter() {
    const likesCounter = document.querySelector('.image_likes-counter');
    const photographerName = document.querySelector('.image_photographer-name');
    const name = photographerName.textContent;
    const currentCounter = parseInt(likesCounter.textContent, 10);
    likesCounter.textContent = currentCounter + 1;
    counterButton.disabled = true;
    localStorage.setItem(`${name}`, JSON.stringify('лайкнул')); // записать
}

const btnNext = document.querySelector('.next');
btnNext.addEventListener('click', () => {
    const photographerName = document.querySelector('.image_photographer-name');
    const name = photographerName.textContent;
    Object.keys(localStorage).forEach((key) => {
        if (key === name) {
            counterButton.disabled = true;
        }
    });
    location.reload();
});

