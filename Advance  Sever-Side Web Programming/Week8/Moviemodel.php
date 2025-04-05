<?php

class Moviemodel extends CI_Model {
    private $movies =
        array(
            '1984' => array(
                'title' => 'The Terminator',
                'img' => 'terminator1.jpg'
            ),
            '1991' => array(
                'title' => 'Terminator 2: Judgement Day',
                'img' => 'terminator2.jpg'
            )
        );
    function getmovie_xml($yr)
    {
        $t = $this->movies[$yr]['title'];
        $img = $this->movies[$yr]['img'];

        $dom = new DOMDocument();
        
        $root = $dom->createElement('films');
        $dom->appendChild($root);
        // <films></films>
        $film = $dom->createElement('film');
        $film->setAttribute('img',$img);
        $root->appendChild($film);
        // <films><film></film></films>
        $title = $dom->createElement('title',$t);
        // <title>The Terminator</title>
        $film->appendChild($title);
        /*
           <films>
             <film img='terminator2.jpg'>
                <title>
                    The Terminator
                </title>
             </film>
           </films>
        */
        return $dom;
    }

    function getmovie($yr)
    {
        $title = $this->movies[$yr]['title'];
        $img = $this->movies[$yr]['img'];
        $movie = array(
            'title' => $title,
            'img' => $img
        );

        return $movie;
    }
}