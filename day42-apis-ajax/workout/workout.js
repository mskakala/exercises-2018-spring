function renderGenres(element_id, data) {
    var data = google.visualization.arrayToDataTable(data);

    var options = {
        sliceVisibilityThreshold: .1
    };

    var chart = new google.visualization.PieChart(document.getElementById(element_id));

    chart.draw(data, options);
}


function renderRatings(element_id, data) {
    var data = google.visualization.arrayToDataTable(data);

    var options = {};

    var chart = new google.visualization.LineChart(document.getElementById(element_id));

    chart.draw(data, options);
}