#!/bin/bash
if [ "$(docker ps -q -f name='epam-conteiner')" ]; then
		echo "container and image exist";
	if [ "$(docker ps -aq -f status=running)" ]; then
		docker stop epam-conteiner;
		echo "container stoped";
	fi
	docker rm epam-conteiner;
	docker rmi epam-image;
	echo "container and image was deleted"

fi

	docker build -t epam-image .
	echo "new image was built"
	docker run -d -p 80:80 --name epam-conteiner epam-image
	echo "new container was started"




