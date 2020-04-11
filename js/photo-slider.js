let sliderImages = [];
let currentImageIndex = '';

document.addEventListener("DOMContentLoaded", function(event) { 
    const photoSliderImage = document.querySelectorAll('.photo-slider-image');
    
    for(let i = 0; i < photoSliderImage.length; i++) {
        sliderImages.push(photoSliderImage[i].src);
    }
});

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

    console.log(currentImageIndex);
}

const nextSlide = () => {

    const currentPhoto = document.getElementById('slider-current-photo');
    
    currentPhoto.src = sliderImages[currentImageIndex+1];
    currentImageIndex = currentImageIndex+1;

    if(currentImageIndex == sliderImages.length) {
        currentImageIndex = 0;
    }
 
}