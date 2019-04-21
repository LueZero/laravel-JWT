<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>註冊</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" style="margin-top:20px;">
    <p class="h4">註冊畫面</p>
        <div class="form-group">
          <label for="exampleInputEmail1">姓名</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="name" placeholder="輸入姓名" name="name">
        </div>
        <div class="form-group">
            <label for="email">信箱</label>
            <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="輸入信箱" name="email">
            </div>
        <div class="form-group">
            <label for="pws">密碼</label>
            <input type="password" class="form-control" id="pws" placeholder="輸入密碼" name="password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
</div>
<script>

    //送出資料
    $('#submit').on('click',function(){
        var name = $('input[name=name]').val();
        var email = $('input[name=email]').val();
        var password = $('input[name=password]').val();
        $.ajaxSetup({
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
        $.ajax({
            type:'POST',
            url:'./index' ,
            dataType: "json",
            data: {
                'name':name,
                'email':email,
                'password':password,
            },
            success: function(msg){

            }
        });

    })
</script>
</body>
</html>