# shellcheck disable=SC2006
path=`pwd`
project=$1

cd "$path" && clear
docker-compose -p "$project" --file "docker/docker-compose.yml" build