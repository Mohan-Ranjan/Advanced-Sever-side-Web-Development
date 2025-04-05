// application/models/Celebrity_model.php

class Celebrity_model extends CI_Model {

    public function get_celebrity_info($name) {
        // Example data for celebrities
        $celebrities = array(
            'Emma Stone' => array(
                'name' => 'Emma Stone',
                'age' => 35,
                'url' => 'http://www.example.com/emmastone.png',
                'films' => array('Poor Things', 'La La Land', 'The Favourite')
            ),
            // Add more celebrities as needed
        );

        // Check if the celebrity exists in the data
        if (array_key_exists($name, $celebrities)) {
            return $celebrities[$name];
        } else {
            return null;
        }
    }

}