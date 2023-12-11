<?php

// Simple autoloader function
spl_autoload_register(function ($class) {
    $path = 'src/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

// Use the namespace
use TravelDealCrawler\Crawler;
use TravelDealCrawler\DealFormatter;

// Create an instance of the Crawler class
$crawler = new Crawler();

// Fetch travel deals from a specific URL
$url = "https://example-travel-site.com";
$deals = $crawler->findDeals($url);

// Check if any deals were found
if ($deals) {
    // Create an instance of the DealFormatter class
    $formatter = new DealFormatter();

    // Format and display each deal
    foreach ($deals as $deal) {
        echo $formatter->formatDeal($deal); // Assuming you have a method formatDeal
        echo "<br>";
    }
} else {
    echo "No deals found.";
}

// Example of using a helper function (if you have one)
echo "Converted currency: " . TravelDealCrawler\convertCurrency(100, 'USD', 'EUR'); // Assuming you have a convertCurrency function
