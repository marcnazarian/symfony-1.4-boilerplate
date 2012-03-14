<?php

require_once 'mink/autoload.php';

use Behat\Behat\Context\BehatContext,
    Behat\Behat\Context\Step\Then;

class FeatureContext extends Behat\Mink\Behat\Context\MinkContext
{
    /**
     * @Then /^I should see (\d+) messages$/
     */
    public function iShouldSeeMessages($nbMessagesToFind)
    {
        $messageXPath = 'li.message';
        return new Then("I should see $nbMessagesToFind \"$messageXPath\" elements");
        
    }

}