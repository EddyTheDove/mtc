
npm run prod

rsync -rav --delete --exclude-from=.excludes ./ eddythedove@dreamhost:/home/eddythedove/gicmtc.com
