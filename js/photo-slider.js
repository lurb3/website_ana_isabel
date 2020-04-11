let sliderImages = [];
let currentImageIndex = '';
let slideControl = false;

document.addEventListener("DOMContentLoaded", function(event) { 
    const photoSliderImage = document.querySelectorAll('.photo-slider-image');
    
    for(let i = 0; i < photoSliderImage.length; i++) {
        sliderImages.push(photoSliderImage[i].src);
    }
});

document.onkeydown = (event) => {
    if(slideControl) {
        switch(event.key) {
            case "ArrowLeft" :
                prevSlide();
                break;

            case "ArrowRight" :
                nextSlide();
                break;
        }
    }

}

const openSlider = (element) => {
    const currentPhoto = document.getElementById('slider-current-photo');
    const photoSlider = document.getElementById('photo-slider');

    currentPhoto.src = element.src;
    photoSlider.style.display = 'block';

    for(let i = 0; i < sliderImages.length; i++) {
        if(sliderImages[i] == element.src) {
            currentImageIndex = sliderImages.indexOf(sliderImages[i])
        }
        
    }

    slideControl = true;
}

const closeSlider = () => {
    const photoSlider = document.getElementById('photo-slider');

    photoSlider.style.display = 'none';
}

const prevSlide = () => {
    if(currentImageIndex == 0) {
        currentImageIndex = sliderImages.length;
    }

    const currentPhoto = document.getElementById('slider-current-photo');
    
    currentPhoto.src = sliderImages[currentImageIndex-1];
    currentImageIndex = currentImageIndex-1;
}

const nextSlide = () => {
    console.log(currentImageIndex);
    if(currentImageIndex == sliderImages.length - 1) {
        currentImageIndex = -1;
    }

    const currentPhoto = document.getElementById('slider-current-photo');
    
    currentPhoto.src = sliderImages[currentImageIndex+1];
    currentImageIndex = currentImageIndex+1;
}