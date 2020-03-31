# Laratorial
LaravelでのAPI開発の練習レポジトリです。

## setup
.env作成
```bash
cp src/.env.default src/.env
```

## 起動
```bash
docker-compose build #初回のみ
docker-compose up
docker-compose composer install
docker-compose exec app php artisan key:generate #初回のみ
```
