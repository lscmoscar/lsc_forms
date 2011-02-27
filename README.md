# Liberty Science Center's form & card processing template using [BrainTree's Payment Gateway PHP API](https://github.com/braintree/braintree_php)
#### Minus CSS stylesheets, various javascript/jquery libraries, and BrainTree API info
#### This example is specific to the [gala 2011 form](https://www.lsc.org/lsc_secure/gala2011)


# What is this repo?
This repository contains some of the code used for Liberty Science Center's credit card processing forms (used for donations, specific events, and women's leadership council so far). 

- gala2011.php (located in the *files* folder) contains the bulk of the code (a mixture of html and php) and is where [BrainTree's Transparent Redirect](http://www.braintreepaymentsolutions.com/credit-card-storage/tokenization) comes into play (more info in the link)

- gala2011_db.php & gala2011_email.php provide functions for the confirmation email and input of info into a mysql database table; html_header.php provides loading of css, js files and libraries

- gala2011.js (mostly using [jquery](https://github.com/jquery/jquery) library) provides change and click front-end functions specific to the form and keeps values intact if a credit card error occurs, giving the user the chance to re-input their credit card info and submit quickly