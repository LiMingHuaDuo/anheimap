#!/bin/bash
cd /www/wwwroot/blog.anheimao.com
git add -A
git commit -m "backup"
ssh-add /root/liminghuaduo
git push -u origin master
