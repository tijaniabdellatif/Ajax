<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>ajax basics</title>
</head>

<body>


    <div class="container" style="margin-top : 40px;">

        <form action="" class="formu">

            <div class="form-group">

                <input type="text" id="name" name="text" class="form-control" placeholder="Enter name ...">

            </div>

            <div class="form-group">
                <!-- onclick="myFunction(); return false;"-->
                <button type="button" class="btn btn-success" id="btn"  >Enter</button>
            </div>
        </form>

        <div class="land">

            <p class="send">

            </p>


        </div>
    </div>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery.min.js"></script>

    
    <script>
        $(document).ready(function() {
            $("#btn").click(function() {
                var name = $("#name").val();
                $.get("ajax.php", {ajax_name:name}, function(response) {
                    $('.send').html(response);
                }).fail(function(error) {
                    console.log(error.statusText);
                });


            // $.ajax({
                  
            //     type : 'POST',
            //     url : 'ajax.php',
            //     data : {ajax_name:name},
            //     success : function(response){
        
            //         $(".send").html(response);
            //     }

            // }).fail(function(error){

            //     alert(error.statusText);
            // })
             });

        });
    </script>
   

</body>

</html>