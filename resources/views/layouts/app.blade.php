<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sign in</title>

    <!-- Styles -->
    {{ HTML::style('bower/font-awesome/css/font-awesome.min.css', ['rel' => 'stylesheet', 'type' => 'text/css' ]) }}
    {{ HTML::style('css/app.css', array('rel' => 'stylesheet')) }}
</head>
<body>
<div id="app">
    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}">
     function getFormResponse() {
    'use strict';
    // var itemResponses = e.response.getItemResponses();
    var records = '[';
     var inp = document.getElementById("id_email");
    
    records += Utilities.formatString('{"Email": { "value": "%s" }', inp;

    for (var i = 0; i < itemResponses.length; i++) {
        var itemResponse = itemResponses[i];
        records += ',';
        switch (itemResponse.getItem().getTitle()) {
            case 'Would you like to participate in this event?':
                records += Utilities.formatString('"attend" : { "value": "%s" }',
                    inp);
                break;
            case 'The number of participants':
                records += Utilities.formatString('"number_of_participants" : { "value": "%s" }',
                    inp);
                break;
            case 'Please enter the names of the participants':
                records += Utilities.formatString('"names_of_participants" : { "value": "%s" }',
                    inp);
                break;
        }
    }
    records += '}]';
    Logger.log('Response JSON is "%s"', records);
    return records;
}

function sendToKintone() {
    'use strict';
    Logger.log('Form submitted');
    var subdomain = 'nguyenngocdong.cybozu.com'; // change URL to your kintone domain 
    var apps = {
        YOUR_APPLICATION1: { appid: 6, name: 'kintone connect google form', token: '7aFAFtccb2bMTbQRqLUnASa5QwVLRZeZZUpyWhfP' }
    };
    var manager = new KintoneManager.KintoneManager(subdomain, apps);// Initialize library
    var str = getFormResponse();
    str = str.replace(/\n/g, "\\n").replace(/\r/g, "\\r").replace(/\t/g, "\\t");
    var records = JSON.parse(str);// Convert to JSON
    var response = manager.create('YOUR_APPLICATION1', records); //Create a record in kintone
    // Status code 200 will return for successful requests
    var code = response.getResponseCode();
    Logger.log('Response code is "%s"', code);
}
</script>
</body>
</html>
