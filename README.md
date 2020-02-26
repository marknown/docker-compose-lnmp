# 一键构建 Docker 环境下的 Linux、Nginx、Mysql、PHP、Redis 开发环境
通过 docker-compose 配制文件创建Linux、Nginx、Mysql、PHP、Redis等统一开发环境。

## 注意事项
1. mysql root 密码为 123456 端口 3306
2. 所有配置文件均在 etc 目录中
3. 所有代码都放在 html 目录中
4. 可以把 php 代码放在 html 目录中，站点配置可以在 etc/nginx-default.conf 中自行添加
5. 额外的php扩展请在 etc/dockerfile-php 中添加

## 下载
```
git clone https://github.com/marknown/docker-compose-lnmp.git
cd docker-compose-lnmp
```

## 开启
```
docker-compose up -d
```

## 关闭
```
docker-compose down
```

## 常用链接
```
http://127.0.0.1/index.html
http://127.0.0.1/index.php
http://127.0.0.1/mysql.php
http://127.0.0.1/redis.php
```