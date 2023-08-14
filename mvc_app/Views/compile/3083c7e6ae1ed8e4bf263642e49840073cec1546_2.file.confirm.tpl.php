<?php
/* Smarty version 4.3.1, created on 2023-08-14 17:18:45
  from 'C:\xampp\htdocs\mvc_app\Views\contact\confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d9e365734411_34408305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3083c7e6ae1ed8e4bf263642e49840073cec1546' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\contact\\confirm.tpl',
      1 => 1692001091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d9e365734411_34408305 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
        <input type="text" class="form-control" name="name" readonly="readonly" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['name']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
        <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value["name"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
        </div>
    <div class="form-group">
        <label for="kana">フリガナ</label>
        <input type="text"  class="form-control" name="kana" readonly="readonly" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['kana']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
        <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
    </div>
    <div class="form-group">
    <label for="tel">電話番号</label>
    <input type="tel" class="form-control" name="tel" readonly="readonly" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['tel']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
    </div>
    <div class="form-group">
    <label for="email">メールアドレス</label>
        <input type="email" class="form-control" name="email" readonly="readonly" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['email']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
        <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
        
    </div>
    <div class="form-group">
        <label for="body">メッセージ</label>
                <textarea name="body" class="form-control" cols="100" rows="3" readonly="readonly"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['body']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
        <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
        </div>   
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['_SESSION']->value["csrf_token"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    <input class="btn" type="button" value="修正" onclick="history.back(-1)"> 
     <input class="btn" type="submit" value="送信" name="submit"></input> 
</form>


</html>
<?php }
}
