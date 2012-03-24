Feature: As a user 
         I want to see a welcome message and the forum messages on the homepage
         So that I can easily browse the messages of the forum

Scenario: Website name is available on the home page
Given I am on "/"
Then I should see "Hello World!"
And I should see 3 messages