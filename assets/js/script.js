// function myFunction() {


//     const test = document.querySelector('.formu');

//     test.addEventListener('click', e =>{
       
//       console.log(e);
//       e.preventDefault();
//       var xmlHttp = new XMLHttpRequest();
      

//       xmlHttp.onreadystatechange = function () {
//         if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
//          const name = document.querySelector('#name');
//          const p = document.querySelector(".send");
//           const m = name.value;
//           p.innerText = m;
//           console.log(xmlHttp.responseText);
        
//         }
//       }
//       xmlHttp.open("post", "ajax.php", true);
//       xmlHttp.send(test);

//     })
    
// }

$(document).ready(function(){

    $(document).on('change','#file',function(){

        var image = $("#file").val();
        $("#file-label").html(image);

    })
})

