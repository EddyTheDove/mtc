npm run prod-backend
npm run prod

rsync -rav --delete --exclude-from=.excludes ./ root@criterium:/var/www/criterium && ssh root@criterium "cd /var/www/criterium && sh ./post-deploy.sh"
