<?php

class CaribbeanResort {
    // Constant
    const DEFAULT_RATING = 'Not Rated';

    // Properties
    private $name;
    private $location;
    private $rating;
    private $nightlyRate;

    // Constructor
    public function __construct($name, $location, $nightlyRate, $rating = self::DEFAULT_RATING) {
        $this->name = $name;
        $this->location = $location;
        $this->nightlyRate = $nightlyRate;
        $this->rating = $rating;
    }

    // Methods
    public function getName() {
        return $this->name;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getRating() {
        return $this->rating;
    }

    public function getNightlyRate() {
        return $this->nightlyRate;
    }

    public function setNightlyRate($newRate) {
        $this->nightlyRate = $newRate;
    }

    public function getDetails() {
        return "{$this->name} located in {$this->location}, Rating: {$this->rating}, Nightly Rate: \${$this->nightlyRate}";
    }
}
