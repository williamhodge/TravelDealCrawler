<?php

// Include the necessary files
require_once 'Crawler.php';
require_once 'DealFormatter.php';
require_once 'Helpers.php';

// Use the namespace
use TravelDealCrawler\Crawler;
use TravelDealCrawler\DealFormatter;

// Create an instance of the Crawler class
$crawler = new Crawler();

// Fetch travel deals from a specific URL
$url = "https://example-travel-site.com";
$deals = $crawler->findDeals($url);

// If you have any deals, format them
if ($deals) {
    $formatter = new DealFormatter();
    foreach ($deals as $deal) {
        // Format each deal (assuming you have a method for this in DealFormatter)
        echo $formatter->formatDeal($deal);
        echo "<br>";
    }
} else {
    echo "No deals found.";
}

// Example of using the helper function
echo "Converted currency: " . TravelDealCrawler\convertCurrency(100, 'USD', 'EUR');
