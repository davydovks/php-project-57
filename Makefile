install:
	composer install

lint:
	composer exec --verbose phpcs

stan:
	composer exec --verbose phpstan analyze app bootstrap config database public routes tests

test:
	composer exec --verbose phpunit tests

test-coverage:
	composer exec --verbose phpunit tests -- --coverage-clover build/logs/clover.xml
