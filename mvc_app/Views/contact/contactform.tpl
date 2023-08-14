<!doctype html>
<html lang="ja">
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
        <h2 class="mb-4">お問い合わせ</h2>
        <form action="/contact/confirm" method="post" id='contact_form' class="bg-white p-3 rounded mb-5" >
        
            <div class="form-group">
                <label for="name">名前</label>
                <input type="text" class="form-control" name="name" placeholder="山田太郎" value="{$post["name"]|default:''}">
                <p class="error-text">{$errorMessages["name"]|default:''}</p>
            </div>
            <div class="form-group">
                <label for="kana">フリガナ</label>
                <input type="text" class="form-control" name="kana" placeholder="ヤマダタロウ" value="{$post["kana"]|default:''}">
                <p class="error-text">{$errorMessages["kana"]|default:''}</p>
            </div>
            <div class="form-group">
                <label for="tel">電話番号</label>
                <input type="tel" class="form-control" name="tel" placeholder="08012345678" value="{$post["tel"]|default:''}">
                <p class="error-text">{$errorMessages["tel"]|default:''}</p>
            </div>
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" class="form-control"  name="email" placeholder="exemple@cin-group.co.jp" value="{$post["email"]|default:''}">
                <p class="error-text">{$errorMessages["email"]|default:''}</p>
            </div>
            <div class="form-group">
                <label for="body">お問い合わせ内容</label>
                <textarea name="body" class="form-control" cols="100" rows="3">{$post["body"]|default:''}</textarea>
                </div>
                <p class="error-text">{$errorMessages["body"]|default:''}</p>
                <input type="hidden" name="csrf_token" value="{$_SESSION["csrf_token"]|default:''}"> 
             <button class="btn bg-warning my-2">内容を確認</button>   
            </form>
        </div>
    </div>

    <div>
    
    <link rel="stylesheet" href="../css/layout.css" type="text/css" /> 
    <div class='table'>
    
     <table border="1" align="center">
      <tr><th>名前</th>
      <th>ふりがな</th>
      <th>電話番号</th>
      <th>メールアドレス</th>
      <th>お問い合わせ内容</th>
      <th></th>
      <th></th>
      </tr>
      {foreach $record as $row}
      <tr><td>{$row['name']}</td>
      <td>{$row['kana']}</td>>
      <td>{$row['tel']}</td>>
      <td>{$row['email']}</td>>
      <td>{{$row['body']}|nl2br nofilter}</td>
      <td>
      <form action="/contact/edit" method="post"> 
      <input type="submit" name="edit" value="編集"></input>
       <input type="hidden" name="edit_id" value="{{$row['id']}}"> 
      </form> 
      </td>
      <td>
        <form action="/contact/delete" method="post">  
        <input type="submit" name="delete" value="削除" onclick="return confirm('本当に削除しますか?')"></input>  
        <input type="hidden" name="delete_id" value="{{$row['id']}}">   
       </form>   
      </td></tr>
      {/foreach}
    </table>   
    </div>
   </link>
    <div>
        <div class="row justify-content-md-center text-center">
            <div class="col-lg-6 mx-auto col-md-8">
                <div class="bg-white p-3 rounded mb-5">
                    
                    <div class="m-1">
                        <p><a href="/">トップページへ</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
<script src="../js/validate.js"></script>   
</body>
</html>