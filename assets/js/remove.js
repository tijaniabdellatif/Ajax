$(document).ready(function(){

    $('.close').click(function(){

        $('.flash').hide();
    })

    setTimeout(() => {
        
        $('.flash').fadeOut("slow");

    }, 3000);
});

// function close() {

//     const flash = document.querySelector('.close');
//     flash.addEventListener('click', e => {

//         e.preventDefault();
//         const f = document.querySelector('.flash');
//         f.style.visibility = "hidden";

//     })
// }

// close();
