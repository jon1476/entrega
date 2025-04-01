.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t entrega .

build-container:
	docker run -dt --name entrega -v .:/540/Boilerplate entrega
	docker exec entrega composer install

start:
	docker start entrega

test: start
	docker exec entrega ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it entrega /bin/bash

stop:
	docker stop entrega

clean: stop
	docker rm entrega
	rm -rf vendor
