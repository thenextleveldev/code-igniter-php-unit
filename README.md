# How To Use PHPUnit with CodeIgniter

1. Install the PHPUnit version that it is compatible with your PHP version.
- For example, if you have PHP 7, use composer and install: 
composer require --dev phpunit/phpunit ^6
Link: https://phpunit.de/

2. Download the latest release of CI PHP Unit Test, unzip it, then copy the tests folder in "ci-phpunit-test-0.16.1/application/tests" into your application folder, so in the end your project will have a tests folder too.
Link: https://github.com/kenjis/ci-phpunit-test/

3. Go to your application/tests folder in Code Igniter and run ../../vendor/bin/phpunit --version to test if your PHP Unit has been installed.

4. Create your test file, then run it by calling phpunit inside your tests folder.
../vendor/bin/phpunit Random_test.php

The Next Level Dev
channel.thenextlevel.dev
