<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- link BBOTSTRAP-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <title>PHP</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- In action richiamo il file PHP e uso il metodo POST per inviare i dati al back-end -->
                    <form class="mt-5" action="myphp.php" method="post">
                        <input type="text" name="text" id="text">
                        <textarea name="censored" id="censored" cols="30" rows="2"></textarea>
                        <input type="submit" value="Invia">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>