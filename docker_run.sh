#!/bin/bash
docker build -t test-images .
docker run -d -p 80:80 --name test-conteiner test-images
