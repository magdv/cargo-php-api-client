help:
	@echo "\n\
Usage: \n\n\
    make \n\
		 | init                         Поднять приложение с нуля\n\
		 | up                           Запустить установленные контейнеры\n\
		 | down                         Остановить и уничтожить все контейнеры приложения\n\
		 | restart                      Перезапуск контейнеров\n\
		 | test                         Запуск тестов\n\
         | shell-php					Запустить консоль контейнера\n\
         \n\
"

init: docker-down-clear \
	docker-pull docker-build up \
	app-init
up: docker-up
down: docker-down
restart: down up
test: app-test

docker-up:
	docker compose up -d

docker-down:
	docker compose down --remove-orphans

docker-down-clear:
	docker compose down -v --remove-orphans

docker-pull:
	docker compose pull --include-deps

docker-build:
	docker compose build

app-composer-install:
	docker compose run --rm app-php-cli composer install

app-init: app-composer-install

app-test:
	docker compose run --rm app-php-cli composer test

shell-php:
	docker compose exec app-php-cli bash
