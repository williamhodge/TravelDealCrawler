<?php

require_once 'CaribbeanResort.php';

// Instantiate two CaribbeanResort objects
$resort1 = new CaribbeanResort("Sunny Beach Resort", "Bahamas", 200);
$resort2 = new CaribbeanResort("Paradise Island", "Jamaica", 250, "5 Stars");

// Display details of the resorts
echo "Resort 1 Details: " . $resort1->getDetails() . "\n";
echo "Resort 2 Details: " . $resort2->getDetails() . "\n";

// Update the nightly rate of resort1
$resort1->setNightlyRate(180);

// Display updated details of resort1
echo "Updated Resort 1 Details: " . $resort1->getDetails() . "\n";
