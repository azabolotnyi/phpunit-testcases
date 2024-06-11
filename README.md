Running tests with process isolation does not pass over auto_prepend_file into the child processes.

How to run the tests:
1. `composer install`
2. `composer tests` - this will success because no process isolation is configured in `phpunit.xml`
3. `composer tests-isolated` - **this will fail, but should succeed.**