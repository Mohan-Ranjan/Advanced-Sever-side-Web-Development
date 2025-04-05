Class Catz extends CI_Controller {
    function _construct() {
        parent::_construct();
        this -> load -> model('catz_model');
    }

    public function select()
    {
        $newcat = $this -> catz_model -> getcatz();
        // build a full webpage containing the URL
        $this -> load -> view('catzview', array('cat' => $newcat));    
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dictionary extends CI_Controller {

    public function index() {
        $this->load->view('dictionary_view');
    }

    public function get_definition() {
        $word = $this->input->post('word');

        // You would typically have some logic here to get the definition of the word
        // For demonstration purposes, we'll just return a static definition

        $definition = "This is the definition of the word '$word'.";

        echo $definition;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dictionary</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#searchForm").submit(function(event){
                event.preventDefault(); // Prevent the form from submitting normally

                var word = $("#word").val(); // Get the value of the input field

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('dictionary/get_definition'); ?>",
                    data: { word: word }, // Send the word to the server
                    success: function(response){
                        $("#definition").html(response); // Display the definition
                    },
                    error: function(){
                        alert("An error occurred while processing your request.");
                    }
                });
            });
        });
    </script>
</head>
<body>

    <h2>Dictionary</h2>
    
    <form id="searchForm">
        <label for="word">Enter a word:</label>
        <input type="text" id="word" name="word">
        <button type="submit">Search</button>
    </form>

    <div id="definition"></div>

</body>
</html>
