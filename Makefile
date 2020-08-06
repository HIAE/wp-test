start:
	docker-compose up -d --build

healthcheck:
	docker-compose run --rm healthcheck

down:
	docker-compose down

install: start healthcheck

configure:
	docker-compose -f docker-compose.yml -f wp-auto-config.yml run --rm wp-auto-config

autoinstall: start
	docker-compose -f docker-compose.yml -f wp-auto-config.yml run --rm wp-auto-config