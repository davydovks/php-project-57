start:
	php artisan serve --host 0.0.0.0

start-frontend:
	npm run dev

install:
	composer install
	make fix-fakerphp
	cp -n .env.testing .env
	php artisan key:gen --ansi
	php artisan migrate:fresh --seed
	npm ci
	npm run build

watch:
	npm run watch

migrate:
	php artisan migrate

console:
	php artisan tinker

log:
	tail -f storage/logs/laravel.log

test:
	php artisan test

test-coverage:
	XDEBUG_MODE=coverage php artisan test --coverage-clover build/logs/clover.xml

deploy:
	git push heroku

lint:
	composer exec phpcs -v

lint-fix:
	composer exec phpcbf

compose:
	docker-compose up

compose-test:
	docker-compose run web make test

compose-bash:
	docker-compose run web bash

compose-setup: compose-build
	docker-compose run web make setup

compose-build:
	docker-compose build

compose-db:
	docker-compose exec db psql -U postgres

compose-down:
	docker-compose down -v

ide-helper:
	php artisan ide-helper:eloquent
	php artisan ide-helper:gen
	php artisan ide-helper:meta
	php artisan ide-helper:mod -n

fix-fakerphp:
	cp -f src/Person.php vendor/fakerphp/faker/src/Faker/Provider/ru_RU/Person.php
