function Train(name, departure_time) {
    this.name = name;
    this.departure = departure_time;
    this.stops = [];
    this.delayed = false;

    this.depart = function() {
        console.log('Departing the station');
    }

    this.arriveTo = function(stop_nr) {
        var name_of_train = this.name;
        var stop_name = this.stops[stop_nr];

        console.log(name_of_train + ' is arriving to ' + stop_name);
    }

    this.getStops = function() {
        return this.stops;
    }
}

// var train = {
//     name: 'Southern Express',
//     departure: '5:55',
//     stops: [
//         'Ceske Budejovice',
//         'Tabor',
//         'Praha'
//     ],
//     delayed: false,

    
// }