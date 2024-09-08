const carouselContainer = document.querySelector('.carousel-container');

// Array of background classes to cycle through
const backgrounds = ['bg1', 'bg2', 'bg3'];

let currentIndex = 0;

function changeBackground() {
    // Remove the current background class
    carouselContainer.classList.remove(backgrounds[currentIndex]);

    // Update the index to the next background
    currentIndex = (currentIndex + 1) % backgrounds.length;

    // Add the new background class
    carouselContainer.classList.add(backgrounds[currentIndex]);
}

// Change background every 5 seconds (5000 milliseconds)
setInterval(changeBackground, 2500);

const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);
const slideWidth = slides[0].getBoundingClientRect().width;

// Clone slides to create an infinite loop effect
const firstSlide = slides[0].cloneNode(true);
const lastSlide = slides[slides.length - 1].cloneNode(true);
track.appendChild(firstSlide);
track.insertBefore(lastSlide, slides[0]);

let currentIndexx = 0;

function moveToSlide(index) {
    track.style.transform = `translateX(-${slideWidth * (index + 1)}px)`;
    currentIndexx = index;
}

$(document).ready(function(){
    // Cloning the carousel div and appending it
    // $('.carousel-track').append($('.carousel-track div').clone());

    // // Define the animation duration
    // let animationDuration = 15; // Change the duration here

    // // Create an infinite timeline with GSAP
    // let tl = gsap.timeline({ repeat: -1 });
    // tl.to($('.carousel-track'), { 
    //     duration: animationDuration, // Use the new duration
    //     x: -($('.carousel').width() / 2), 
    //     ease: "Power0.easeNone",
    //     onComplete: function() {
    //         // Reset the position of the track to create the seamless loop
    //         gsap.set($carouselTrack, { x: 0 });
    //     } 
    // });


    // gsap.to(".img1", {
    //     duration: ,
    //     ease: "none",
    //     x: "+=1200", //move each box 500px to right
    //     modifiers: {
    //       x: gsap.utils.unitize(x => parseFloat(x) % 500) //force x value to be between 0 and 500 using modulus
    //     },
    //     repeat: -1
    //   });
});



  