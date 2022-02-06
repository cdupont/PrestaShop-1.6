Fucina shop
-----------

Based on Prestashop 1.6.1.6



Deploy
------

SSH login:
```
$ ssh u48-fyumhetqgk9r@35.214.245.16 -p 18765
```

Mirroring:
```
$ rsync -avh --no-perms --no-owner --no-group --delete -e "ssh -i ~/.ssh/id_rsa -p 18765" --exclude-from=./skip u48-fyumhetqgk9r@35.214.245.16:~/www/maschere.it/public_html/shop/ ./
```
Always add `--dry-run` on the first try.

Databases
---------

copy remote DB to local:
```
$ mysqldump -h c60429.sgvps.net -P 3306 -u uocpma1imyyg6 -pdywolyxsq4k6 angelob6_maschere_02 > db-remote-26092021
$ mysql -u cdupont -p<weak> -D fucina -h 127.0.0.1 < db-remote-15012022.sql
$ mysql -u cdupont -p<weak> -D fucina -h 127.0.0.1 < local_db.sql

```

