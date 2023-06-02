<html>

<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Button 1
            $('#button1').click(function() {

                var inputField = document.getElementById("inputField");
                var value = inputField.value;

                $.ajax({
                    url: 'http://127.0.0.1:8000/segitiga/?value='+value,
                    type: 'GET',
                    success: function(response) {
                        // Handle the response from the server
                        console.log(response.result);

                        $('#message').text("Got the Triangle");
                        $('#value').html("</br>" + response.result);
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.log(error);
                    }
                });
            });

            // Button 2
            $('#button2').click(function() {

                var inputField = document.getElementById("inputField");
                var value = inputField.value;

                $.ajax({
                    url: 'http://127.0.0.1:8000/ganjil/?value='+value,
                    type: 'GET',
                    success: function(response) {
                        // Handle the response from the server
                        console.log(response.odd_numbers);

                        $('#message').text("Got the Odd");
                        $('#value').text(response.odd_numbers);
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.log(error);
                    }
                });
            });

            // Button 3
            $('#button3').click(function() {

                var inputField = document.getElementById("inputField");
                var value = inputField.value;


                $.ajax({
                    url: 'http://127.0.0.1:8000/prima/?value='+value,
                    type: 'GET',
                    success: function(response) {
                        // Handle the response from the server
                        console.log(response.prime_numbers);

                        $('#message').text("Got the Prime");
                        $('#value').text(response.prime_numbers);
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.log(error);
                    }
                });
            });
        });
    </script>

</head>


<body>


    <input type="text" id="inputField">
    <button id="button1">Generate Segitiga</button>
    <button id="button2">Generate Bilangan Ganjil</button>
    <button id="button3">Generate Bilangan Prima</button>


    <div id="data-container">
    <p>Message: <span id="message"></span></p>
    <p>Value: <span id="value"></span></p>
    </div>



</body>

</html>