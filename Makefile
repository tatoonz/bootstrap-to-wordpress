main: dev

dev:
	docker-compose up -d --remove-orphans
	docker-compose logs -f wordpress

stop: 
	docker-compose down

dump:
	docker exec b2w_mysql sh -c 'exec mysqldump -uroot -p"$$MYSQL_ROOT_PASSWORD" bootstrap2wordpress' > ./db.sql