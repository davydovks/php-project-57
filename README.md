# Task Manager
[![Actions Status](https://github.com/davydovks/php-project-57/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/davydovks/php-project-57/actions)
[![Actions Status](https://github.com/davydovks/php-project-57/actions/workflows/coverage.yml/badge.svg)](https://github.com/davydovks/php-project-57/actions)
[![Maintainability](https://api.codeclimate.com/v1/badges/500f7ea2ebf6932335b6/maintainability)](https://codeclimate.com/github/davydovks/php-project-57/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/500f7ea2ebf6932335b6/test_coverage)](https://codeclimate.com/github/davydovks/php-project-57/test_coverage)

Task manager written with Laravel.

Users can register, log in and out, create tasks, statuses and labels. Tasks can be assigned to users, have status and several labels. Task list page allows to filter tasks by status, creator and responsible person.

You can test the app here: https://task-manager-76kf.onrender.com/ (please wait 30-50 seconds for server to awake).

## Setup
```
make setup
```

## Start app locally
```
make start-frontend
make start
```

## Run linter and tests
```
make lint
make test
```
