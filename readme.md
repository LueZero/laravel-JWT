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

<hr>


<li>第二步:現在進行令牌加密，通過運行以下代碼行來生成密鑰</li>

php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\JWTAuthServiceProvider"

<hr>

<li>第三步:要在Laravel中發布配置文件，您需要運行以下代碼行</li>


php artisan jwt:generate


## Laravel Sponsors

