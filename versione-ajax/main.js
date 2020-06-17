$(document).ready(function() {
	//Chiamata ajax
    $.ajax({
        // qui parte l'oggetto dei dischi dieci musicali
        // /boolean/php-ajax-dischi/database/api.php
        'url': '../database/api.php',
        'method': 'GET',
        'success': function(disco) {

            console.log(disco);

            stampahtml(disco);
            // selectgeneri(infodisco);
        },
        'error': function(data) {
            console.log(data.responseText);
        }
    }// fine oggetto
    );

    function stampahtml(infodischi) {
        var schedadisco = $('#entry-template').html();
        var template_function = Handlebars.compile(schedadisco);

        for (var i = 0; i < infodischi.length; i++) {
            var info= infodischi[i];
            var disco = {
                'poster': info.poster,
                'title' : info.title,
                'author': info.author,
                'year': info.year,
                'genre': info.genre,
                'classe': info.genre,
            }
            var html_finale = template_function(disco);
            $('.cds-container.container').append(html_finale);
        }
    }
});
