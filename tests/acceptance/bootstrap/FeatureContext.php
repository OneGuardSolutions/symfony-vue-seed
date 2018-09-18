<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;

class FeatureContext implements Context {
    /**
     * @Given /^I am on "([^"]*)" page$/
     */
    public function iAmOnPage($path) {
        throw new PendingException();
    }

    /**
     * @Then /^I see page is loaded$/
     */
    public function iSeePageIsLoaded() {
        throw new PendingException();
    }
}
