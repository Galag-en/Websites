$( document ).ready(function() {
    // Handler for .ready() called.
    $.getJSON("https://www.cbr-xml-daily.ru/daily_json.js", function(data) {
        $('#EUR').text(data.Valute.EUR.Value.toFixed(2));
        $('#USD').text(data.Valute.USD.Value.toFixed(2));
    });
    
});