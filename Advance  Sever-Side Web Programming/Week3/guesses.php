<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guesses extends CI_Model {
    private $names = array('Taylor Swift',"Lionel Messi","Dwayne Johnson","Brad Pitt","Rihanna");
    // the images must be in the same order as the names
    private $imageurls
       = array(
        'https://www.gannett-cdn.com/presto/2019/09/17/USAT/70408641-17f0-4a80-8f7c-596abf9da9a8-AP_People-Taylor_Swifts_House.JPG?width=540&height=&fit=bounds&auto=webp',
        'https://pmcwwd.files.wordpress.com/2019/05/messi-1.jpg?w=640&h=415&crop=1',
        'https://static.independent.co.uk/s3fs-public/thumbnails/image/2018/06/11/14/gettyimages-453906200.jpg?w968h681',
        'https://www.cheatsheet.com/wp-content/uploads/2019/10/brad-pitt-2-1024x683.jpg',
        'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/rihanna-attends-rihannas-5th-annual-diamond-ball-at-news-photo-1568339858.jpg?resize=540:*'
       );

    function __construct() {
        parent::__construct();
    }

    /*
     * Create a new guess.  We need two names, one right and one wrong,
     * as well as the id and image of the right one (the id will actually be
     * the array index of the right name).  Both the right and wrong names
     * will be chosen randomly.
     */
    function guess()
    {
        $max = count($this->names);
		$whopos = rand(0,$max - 1); // randomly-chosen number
		
		// use this randomly-chosen number to select a person
		$image = $this->imageurls[$whopos];
		$name = $this->names[$whopos];
		
		// now get a wrong name
		// can you work out what this is doing?
		$wrong = $whopos;
		while ($wrong == $whopos) {
			$wrong = rand(0,$max - 1);
		}
		
		// now get a wrong name
		$wrongname = $this->names[$wrong];

		// return $whopos as part of the result - this will make checking later easier
		return array('id' => $whopos,'image' => $image,'name' => $name,'wrongname' => $wrongname);
    }

    function iscorrect($id,$guessedname)
    {
        $correctname = $this->names[$id];
        $image = $this->imageurls[$id];
        $iscorrect = false;
        if ($correctname == $guessedname) {
            $iscorrect = true;
        }
        return array('iscorrect' => $iscorrect,
                     'name' => $guessedname,
                     'image' => $image);
    }
}