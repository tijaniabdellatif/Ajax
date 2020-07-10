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

        <form action="">

            <!-- onclick="myFunction(); return false;"-->
            <button type="button" class="btn btn-success" id="btn">Enter</button>

        </form>

        <div class="land">

            <p class="send"></p>


        </div>
    </div>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $("#btn").click(function() {

                $.post("ajax.php", function(response) {

                    console.log(response);
                }).fail(function(error) {

                    console.log(error.statusText);
                });
            });
        });
    </script>

</body>

</html>