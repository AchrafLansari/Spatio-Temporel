 //------------ LOCAL WEATHER ----------------

    function GetLocalWeather(query) {

        var localWeatherInput = {
            query: query,
            format: 'JSON',
            num_of_days: '2',
            date: '',
            fx: '',
            cc: '',
            includelocation: '',
            show_comments: '',
            callback: 'LocalWeatherCallback'
        };
        
        JSONP_LocalWeather(localWeatherInput);
        //e.preventDefault();
    }

    function LocalWeatherCallback(localWeather) {
        
        
        if(localWeather.data.error == null ){
            
        //output = "<br/> Cloud Cover: " + localWeather.data.current_condition[0].cloudcover;
        output += "<br/> Humidity: " + localWeather.data.current_condition[0].humidity+"%";
        output += "<br/> Temp C: " + localWeather.data.current_condition[0].temp_C+"°C";
        //output += "<br/> Visibility: " + localWeather.data.current_condition[0].weatherDesc[0].value;
        output += "<img width=125px height=90px src=" + localWeather.data.current_condition[0].weatherIconUrl[0].value +"></img>";
       // output += "<br/> Observation Time: " + localWeather.data.current_condition[0].observation_time;
       // output += "<br/> Pressue: " + localWeather.data.current_condition[0].pressure;
        
        resultContainer.empty();
        resultContainer.html(output);
        }
    
    }

    //-------------------------------------------


    //------------ SEARCH LOCATION ----------------

    function SearchLocation(e) {

        var searchLocationInput = {
            query: 'Meknes',
            format: 'JSON',
            timezone: 'yes',
            popular: '',
            num_of_results: '',
            callback: 'SearchLocationCallback'
        };

        JSONP_SearchLocation(searchLocationInput);
        e.preventDefault();
    }

    function SearchLocationCallback(searchLocation) {
        
        output = "<br/> Area Name: " + searchLocation.search_api.result[0].areaName[0].value;
        output += "<br/> Country: " + searchLocation.search_api.result[0].country[0].value;
        output += "<br/> Latitude: " + searchLocation.search_api.result[0].latitude;
        output += "<br/> Longitude: " + searchLocation.search_api.result[0].longitude;
        output += "<br/> Population: " + searchLocation.search_api.result[0].population;
        output += "<br/> Region: " + searchLocation.search_api.result[0].region[0].value;

        resultContainer.empty();
        resultContainer.html(output);

    }
