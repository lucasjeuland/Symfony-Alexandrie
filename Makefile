server-up: ## Lancement du serveur de dev
	docker-compose up --build --remove-orphans
	docker-compose exec php php bin/console doctrine:fixtures:load

