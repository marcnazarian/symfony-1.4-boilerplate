Feature: Homepage contains all expected elements (website name, forum name, etc.)

Scenario: Website name is available on the home page
Given I am on "/"
Then I should see "Hello World!"