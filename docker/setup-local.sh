#!/usr/bin/env bash

echo '
   _____          __                         __  .__                __  .__
  /  _  \  __ ___/  |_  ____   _____ _____ _/  |_|__| ___________ _/  |_|__| ____   ____ ________________________
 /  /_\  \|  |  \   __\/  _ \ /     \\__  \\   __\  |/  ___/\__  \\   __\  |/  _ \ /    \\___   /\___   /\___   /
/    |    \  |  /|  | (  <_> )  Y Y  \/ __ \|  | |  |\___ \  / __ \|  | |  (  <_> )   |  \/    /  /    /  /    /
\____|__  /____/ |__|  \____/|__|_|  (____  /__| |__/____  >(____  /__| |__|\____/|___|  /_____ \/_____ \/_____ \
        \/                         \/     \/             \/      \/                    \/      \/      \/      \/
                                       __                 .__                       .__
                          ______ _____/  |_ __ ________   |  |   ____   ____ _____  |  |
                         /  ___// __ \   __\  |  \____ \  |  |  /  _ \_/ ___\\__  \ |  |
                         \___ \\  ___/|  | |  |  /  |_> > |  |_(  <_> )  \___ / __ \|  |__
                        /____  >\___  >__| |____/|   __/  |____/\____/ \___  >____  /____/
                             \/     \/           |__|                      \/     \/
                                          ________  _______________   ____
                                          \______ \ \_   _____/\   \ /   /
                                           |    |  \ |    __)_  \   Y   /
                                           |    `   \|        \  \     /
                                          /_______  /_______  /   \___/
                                                  \/        \/                                                  '


mkdir -p ../vendor
docker run -v $(pwd)/../:/app --rm --name composer registry.muc.internetx.com/docker/ix-composer-isac bash -c "composer install"
echo COPY .env.local to .env
cp ../.env.local ../.env
echo COPY docker-compose_LOCAL.yml to docker-compose.yml
cp ./docker-compose_LOCAL.yml ./docker-compose.yml



arg="

starting the dev environment
from terminal with:

cd docker
docker-compose up --build -d
"
for (( i=0; i < ${#arg}; i+=1 )) ; do
echo -n "${arg:$i:1}"
sleep 0.08
done
echo

