<?php

namespace TravelDealCrawler;

class Crawler {
    // Properties and methods for crawling travel deals
    public function findDeals($url) {
        // Implementation for finding deals
    }

    // Other methods as needed
}

class DealFormatter {
    // Methods for formatting and processing deal information
    public function formatPrice($price) {
        // Format price
    }

    // Other methods as needed
}

// You can also include functions in the namespace
function convertCurrency($amount, $fromCurrency, $toCurrency) {
    // Currency conversion logic
}

// Usage example
$crawler = new Crawler();
$deals = $crawler->findDeals("https://example-travel-site.com");