PHP_VERSION ?= 8.2
IMAGE_NAME = php-jms-poc
VERSIONS := 7.4 8.0 8.1 8.2 8.3 8.4

build:
	@$(foreach version, $(VERSIONS), docker build --build-arg PHP_VERSION=$(version) -t $(IMAGE_NAME):$(version) .;)

run:
	docker run --rm $(IMAGE_NAME):$(PHP_VERSION) php /app/src/index.php

sh:
	docker run -it --rm $(IMAGE_NAME):$(PHP_VERSION) sh

clean:
	@$(foreach version, $(VERSIONS), docker rmi $(IMAGE_NAME):$(version))
