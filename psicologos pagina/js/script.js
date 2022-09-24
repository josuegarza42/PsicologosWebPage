const btn = document.getElementById('menu-btn')
const nav = document.getElementById('menu')

btn.addEventListener('click', () => {
    btn.classList.toggle('open')
    nav.classList.toggle('flex')
    nav.classList.toggle('hidden')
})

// CARUOSELL TEST
currentSlideID = 1;
sliderElement = document.getElementById('slider');
totalSlides = sliderElement.childElementCount;

function next(){
    if(currentSlideID < totalSlides){
        currentSlideID++;
        showSlide();
    }else if(currentSlideID == totalSlides){
        currentSlideID = 1;
        showSlide();
    }
}

function prev(){
    if(currentSlideID > 1){
        currentSlideID--;
        showSlide();
    }else if(currentSlideID == 1){
        currentSlideID = totalSlides;
        showSlide();
    }
}

function showSlide(){
    slides = document.getElementById('slider').getElementsByTagName('li');
    for(let index = 0; index < totalSlides; index++){
        const element = slides[index];
        if(currentSlideID==index+1){
            element.classList.remove('hidden');
        }else{
            element.classList.add('hidden');
        }
    }
}