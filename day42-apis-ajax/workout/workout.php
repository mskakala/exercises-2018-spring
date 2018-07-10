<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actor-o-matic</title>

    <script
  src="http://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {'packages':['corechart']});
        // google.charts.setOnLoadCallback(drawChart);
    </script>

    <script src="workout.js"></script>
</head>
<body>

    <div id="page">
    
        <nav>
            <a href="#" data-id="22616" onclick="drawCharts(22616);">Bruce Willis</a>
            <a href="#" data-id="19302" onclick="drawCharts(19302);">Salma Hayek</a>
        </nav>

        <div class="main">
        
            <h1 class="name"></h1>

            <div class="movies-total">
                <h2>Movies total</h2>
                <div class="data"></div>
            </div>

            <div class="ratings">
                <h2>Movie ratings over time</h2>
                <div id="ratings-data" class="data"></div>
            </div>

            <div class="genres">
                <h2>Genres</h2>
                <div id="genres-data" class="data"></div>
            </div>

        </div>

    </div>

    <script>
// your code here
function load_actor(actor_id) {
    $.ajax({
        method: 'get',
        url: 'https://classes.codingbootcamp.cz/assets/classes/workouts/actor-o-matic/actor/'+actor_id,
        dataType: 'json', // json is default
        success: function(data, status) {
            $('h1.name').html(data.name);
            $('.movies-total .data').html(data.movies_total);
        }
    })
}

function load_ratings(actor_id) {

    $.ajax({
        method: 'get',
        url: 'https://classes.codingbootcamp.cz/assets/classes/workouts/actor-o-matic/actor/'+actor_id+'/ratings',
        dataType: 'json', // json is default
        success: function(data, status) {
            renderRatings('ratings-data', data);
        }
    })
}

function load_genres(actor_id) {
    $.ajax({
        method: 'get',
        url: 'https://classes.codingbootcamp.cz/assets/classes/workouts/actor-o-matic/actor/'+actor_id+'/genres',
        dataType: 'json', // json is default
        success: function(data, status) {
            renderGenres('genres-data', data);
        }
    })
}

function drawCharts(actor_id) {
    load_actor(actor_id);
    load_ratings(actor_id);
    load_genres(actor_id);
}

// call drawCharts when (and only when) google charts
// libraries are fully loaded
// google.charts.setOnLoadCallback(drawCharts);

    </script>
    
</body>
</html>