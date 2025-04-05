<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geology extends CI_Model {
    // We define a class attribute that holds the data in a hard-coded associative array.
    // We are only using an array here to make the exercise easier - it would be better to
    // store this in a database.
    private $periods = array(
        'Triassic' => array(
            'period' => '237–201 millions of years ago',
            'landAnimals' => 'Archosaurs ("ruling lizards"); therapsids ("mammal-like reptiles")',
            'marineAnimals' => 'Plesiosaurs, ichthyosaurs, fish',
            'avianAnimals' => '',
            'plantLife' => 'Cycads, ferns, Gingko-like trees, and seed plants'
        ),
        'Jurassic' => array(
            'period' => '201–145 millions of years ago',
            'landAnimals' => 'Dinosaurs (sauropods, therapods); Early mammals; Feathered dinosaurs',
            'marineAnimals' => 'Plesiosaurs, fish, squid, marine reptiles',
            'avianAnimals' => 'Pterosaurs; Flying insects',
            'plantLife' => 'Ferns, conifers, cycads, club mosses, horsetail, flowering plants'
        ),
        'Cretaceous' => array(
            'period' => '145–66 millions of years ago',
            'landAnimals' => 'Dinosaurs (sauropods, therapods, raptors, hadrosaurs, herbivorous ceratopsians); Small, tree-dwelling mammals',
            'marineAnimals' => 'Plesiosaurs, pliosaurs, mosasaurs, sharks, fish, squid, marine reptiles',
            'avianAnimals' => 'Pterosaurs; Flying insects; Feathered birds',
            'plantLife' => 'Huge expansion of flowering plants'
        )
    );


    public function getPeriodData($p)
    {
        return $this->periods[$p];
    }
}