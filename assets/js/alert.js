const btn = document.querySelector('.btn');
btn.addEventListener('click',e =>{
    
    e.preventDefault();
    
    const input = document.querySelector("#new");
    const input2 = document.querySelector("#new1");

    

    if(input.value === input2.value && input.value != '' && input2.value != ""){

Swal.fire(
    'Good job!',
    'You changed the password',
    'success'
);
 setTimeout(() => {
     window.location.replace("http://localhost/application_chat/Ajax/Ajax/index.php");
 }, 3000);
    } 
    else {

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
               
            })
    }
    

})