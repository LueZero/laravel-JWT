<h1>利用Laravel JWT Token 做基本驗證</h1>

## 先安裝Jwt套件

<li>第一步:composer create-project laravel/laravel jwtauth </li>

## Jwt基本設定

<li>第一步:到 config > app.php </li>

'providers' => [
    'Tymon\JWTAuth\Providers\JWTAuthServiceProvider',
],


'aliases' => [
   
    'JWTAuth' => 'Tymon\JWTAuth\Facades\JWTAuth',
    'JWTFactory' => 'Tymon\JWTAuth\Facades\JWTFactory',
],

## Laravel Sponsors

