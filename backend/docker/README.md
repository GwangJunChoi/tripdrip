 
```
docker container ls #컨테이너 목록 확인
docker container stop {CONTAINER ID}
docker-compose up
docker-compose up -d #-d: 데몬으로 실행
docker-compose up --build #--build: 빌드한 다음 실행
docker stop $(docker ps -a -q)
docker rm $(docker ps -a -q)
docker rmi $(docker images -q) 
```