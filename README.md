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
cd front
npm install
npm run serve
```

## 使い方
TDDでAPIを作ってTODOアプリを完成させてください。
フロントは[localhost:8080](http://localhost:8080)で起動します。

### PHPunit
phpunitを使ってTDDで進めてください。

```bash
docker-compose exec app vendor/bin/phpunit
```

### 実装すること
Taskの新規作成・一覧・更新・削除のAPIを作成してください。

### 新規作成
POST /api/tasks

request
```javascript
{
  name: String
}
```

response
```javascript
{
  id: Number,
  name: String
}
```

### 一覧
GET /api/tasks

response
```javascript
[
  {
    id: Number,
    name: String
  }
]
```

### 更新
PUT /api/tasks/:id

request
```javascript
{
  name: String
}
```

response
```javascript
{
  id: Number,
  name: String
}
```

### 削除
DELETE /api/tasks/:id
