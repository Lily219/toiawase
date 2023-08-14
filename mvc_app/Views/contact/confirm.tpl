<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>お問い合わせ画面</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
                
<div class="p-4 container-field form-orange">
<div class="row justify-content-center">
    <div class="col-lg-6 mx-auto col-md-8">
        <h2 class="mb-4">お問い合わせ内容確認</h2>

<form action="/contact/complete" method="post">
       
    <div class="form-group">
        <label for="name">名前</label>
        <input type="text" class="form-control" name="name" readonly="readonly" value="{$name|default:''}">
        <p class="error-text">{$errorMessages["name"]|default:''}</p>
        </div>
    <div class="form-group">
        <label for="kana">フリガナ</label>
        <input type="text"  class="form-control" name="kana" readonly="readonly" value="{$kana|default:''}">
        <p class="error-text">{$errorMessages['kana']|default:''}</p>
    </div>
    <div class="form-group">
    <label for="tel">電話番号</label>
    <input type="tel" class="form-control" name="tel" readonly="readonly" value="{$tel|default:''}">
    <p class="error-text">{$errorMessages['tel']|default:''}</p>
    </div>
    <div class="form-group">
    <label for="email">メールアドレス</label>
        <input type="email" class="form-control" name="email" readonly="readonly" value="{$email|default:''}">
        <p class="error-text">{$errorMessages['email']|default:''}</p>
        
    </div>
    <div class="form-group">
        <label for="body">メッセージ</label>
        {* <input type="textarea" class="form-control" name="body"  cols="100" rows="3" readonly="readonly" value="{$body|default:''}"> *}
        <textarea name="body" class="form-control" cols="100" rows="3" readonly="readonly">{$body}</textarea>
        <p class="error-text">{$errorMessages['body']|default:''}</p>
        </div>   
        <input type="hidden" name="csrf_token" value="{$_SESSION["csrf_token"]|default:''}">
    <input class="btn" type="button" value="修正" onclick="history.back(-1)"> 
     <input class="btn" type="submit" value="送信" name="submit"></input> 
</form>


</html>
