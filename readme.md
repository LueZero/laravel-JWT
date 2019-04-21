<h1>利用Laravel JWT Token 做基本驗證</h1>

## 先安裝Jwt套件

<li>第一步:composer create-project laravel/laravel jwtauth</li>

## Jwt基本設定

<li>第一步:到 config > app.php </li>

<div>
    
    'providers' => [

        'Tymon\JWTAuth\Providers\JWTAuthServiceProvider',

    ],


    'aliases' => [

        'JWTAuth' => 'Tymon\JWTAuth\Facades\JWTAuth',
        'JWTFactory' => 'Tymon\JWTAuth\Facades\JWTFactory',
    ],

</div>
<hr>


<li>第二步:現在進行令牌加密，通過運行以下代碼行來生成密鑰</li>

<div>
   
     php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\JWTAuthServiceProvider"。

</div>


<hr>


<li>第三步:要在Laravel中發布配置文件，您需要運行以下代碼行</li>

<div>
        
        php artisan jwt:generate。
        
</div>

<li>如果在點擊上面的命令後發現這樣的錯誤</li>

<div>
        
       ReflectionException : Method Tymon\JWTAuth\Commands\JWTGenerateCommand::handle() does not exist
       請到JWTGenerateCommand.php，將public function fire() { $this->fire(); } 的fire 改成 handle()
        
</div>
