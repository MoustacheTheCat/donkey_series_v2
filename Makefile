.PHONY: help

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

install: ## Install all the project
	symfony composer install
	php bin/console lexik:jwt:generate-keypair
	symfony console d:d:c
	make rebuild

rebuild: ## Rebuild the database
	symfony console d:d:d -f
	symfony console d:d:c
	symfony console d:s:u -f
	symfony console d:f:l -n


scss-build:
	php bin/console sass:build
	php bin/console asset-map:compile
	