SHELL := /bin/bash
MK_FILE_DIR=$(dir $(realpath $(firstword $(MAKEFILE_LIST))))

list:
	docker-compose ps

start:
	docker-compose up -d

down:
	docker-compose down

restart:
	docker-compose down && docker-compose up -d

disable-xdebug:
	docker-compose exec backend sh -c "dxd || true" ;\

enable-xdebug:
	docker-compose exec backend sh -c "exd || true" ;\

back:
	docker-compose exec backend bash

back-install:
	docker-compose exec backend sh -c "composer install"
