


<!-- application/views/form_view.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Form</title>
</head>
<body>

    <form id="searchForm">
        <input type="text" id="searchInput" placeholder="Enter name...">
        <button type="submit" id="submitButton">Search</button>
    </form>

    <div id="results"></div>

    <!-- Include jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Your script goes here -->
    <script>
        // Your jQuery or JavaScript code for handling form submission and displaying results goes here
    </script>

</body>
</html>



<!-- application/views/form_view.php -->

<!-- Your HTML code for the form and empty div goes here -->

<script>
    $(document).ready(function(){
        $('#searchForm').submit(function(e){
            e.preventDefault();
            var name = $('#searchInput').val();
            
            // AJAX call to get celebrity information
            $.ajax({
                url: '<?php echo site_url("formcontroller/get_celebrity_info"); ?>',
                method: 'POST',
                data: {name: name},
                dataType: 'json',
                success: function(response) {
                    if (response !== null) {
                        // Display celebrity information
                        $('#results').html('<h2>' + response.name + '</h2>');
                        $('#results').append('<p>Age: ' + response.age + '</p>');
                        $('#results').append('<img src="' + response.url + '" alt="' + response.name + '">');
                        $('#results').append('<h3>Top Films</h3>');
                        $('#results').append('<ul>');
                        $.each(response.films, function(index, film) {
                            $('#results ul').append('<li>' + film + '</li>');
                        });
                        $('#results').append('</ul>');
                    } else {
                        // Display message if celebrity not found
                        $('#results').html('<p>Celebrity not found</p>');
                    }
                }
            });
        });
    });
</script>
