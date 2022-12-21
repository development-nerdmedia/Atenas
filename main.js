$(document).ready(function (argument) {    
    document.querySelector(".marquee-with-options").marquee({
        speed: 15000,
        gap: 50,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: true,
    });
})
console.log("corriendo");