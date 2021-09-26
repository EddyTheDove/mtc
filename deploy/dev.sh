
# npm run prod

rsync -rav --delete --exclude-from=.excludes ./ root@digital:/var/www/mtc
