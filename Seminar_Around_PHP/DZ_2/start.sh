# shellcheck disable=SC2006
path=`pwd`
project=$1
containerName=$2

cd "$path" && clear
docker-compose -p "$project" --file "docker/docker-compose.yml" up -d && clear
docker exec -it "$containerName" sh && clear
docker-compose -p "$project" --file "docker/docker-compose.yml" down