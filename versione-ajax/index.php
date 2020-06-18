<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../public/css/app.css">
    </head>
    <body>
        <div class="cds-container container">

        </div>

        <script id="entry-template" type="text/x-handlebars-template">

                <div class="cd {{classe}}">
                    <img src="{{poster}}" alt="">
                    <h3>{{title}}</h3>
                    <span class="author">{{author}}</span>
                    <span class="year">{{year}}</span>
                    <span class="genre">{{genre}}</span>
                </div>

        </script>

    <script src="../public/js/app.js" charset="utf-8"></script>
    </body>
</html>
