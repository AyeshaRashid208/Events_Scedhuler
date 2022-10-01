<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment</title>
    <!-- For Web Client View: import Web Meeting SDK CSS -->
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.2.0/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.2.0/css/react-select.css" />
</head>

<body>

    @php
        function generate_signature($api_key, $api_secret, $meeting_number, $role)
        {
            //Set the timezone to UTC
            date_default_timezone_set('UTC');
            $time = time() * 1000 - 30000; //time in milliseconds (or close enough)
            $data = base64_encode($api_key . $meeting_number . $time . $role);
            $hash = hash_hmac('sha256', $data, $api_secret, true);
            $_sig = $api_key . '.' . $meeting_number . '.' . $time . '.' . $role . '.' . base64_encode($hash);
            //return signature, url safe base64 encoded
            return rtrim(strtr(base64_encode($_sig), '+/', '-_'), '=');
        }

        $api_key =env('ZOOM_API_KEY', '');
        $api_secret = env('ZOOM_API_SECRET', '');
        $meeting_number ='89699221732';
        $role =1;
        // echo generate_signature($api_key, $api_secret, $meeting_number, $role);
        echo ZoomMtg.join(generate_signature($api_key, $api_secret, $meeting_number, $role));
    @endphp


    <!-- For either view: import Web Meeting SDK JS dependencies -->
    <script src="https://source.zoom.us/1.2.0/lib/vendor/react.min.js"></script>
    <script src="https://source.zoom.us/1.2.0/lib/vendor/react-dom.min.js"></script>
    <script src="https://source.zoom.us/1.2.0/lib/vendor/redux.min.js"></script>
    <script src="https://source.zoom.us/1.2.0/lib/vendor/redux-thunk.min.js"></script>
    <script src="https://source.zoom.us/1.2.0/lib/vendor/lodash.min.js"></script>

    <!-- For Component View -->
    <script src="https://source.zoom.us/1.2.0/zoom-meeting-embedded-1.2.0.min.js"></script>
    <!-- For Client View -->
    <script src="https://source.zoom.us/zoom-meeting-1.2.0.min.js"></script>
</body>

</html>
