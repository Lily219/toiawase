<?php
/* Smarty version 4.3.1, created on 2023-08-08 18:26:42
  from 'C:\xampp\htdocs\mvc_app\Views\contact\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d20a528517f7_82347011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4a3bf51193112fdc880a5b107af12696e76c2cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\contact\\edit.tpl',
      1 => 1691486791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d20a528517f7_82347011 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>更新画面</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
                
<div class="p-4 container-field form-orange">
<div class="row justify-content-center">
    <div class="col-lg-6 mx-auto col-md-8">
        <h2 class="mb-4">内容更新</h2>

<form action="/contact/update" method="post">
        <input type="hidden" class="form-control" name="id" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value->id ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"> 
    <div class="form-group">
        <label for="name">名前</label>
        <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value["name"] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value->name ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
        <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value["name"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
        </div>
    <div class="form-group">
        <label for="kana">フリガナ</label>
        <input type="text"  class="form-control" name="kana" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value["kana"] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value->kana ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
        <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value["kana"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
    </div>
    <div class="form-group">
        <label for="email">メールアドレス</label>
        <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value["email"] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value->email ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
        <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value["email"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
    </div>
    <div class="form-group">
        <label for="tel">電話番号</label>
        <input type="tel" class="form-control" name="tel" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value["tel"] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value->tel ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
        <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value["tel"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
    </div>
    <div class="form-group">
        <label for="body">メッセージ</label>
                <textarea name="body" class="form-control" cols="100" rows="3"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value["body"] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value->body ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</textarea>
        <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value["body"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
    </div>   
    <div>
         <p> 上記の内容でよろしいですか？ </p>
    </div>
       <input class="btn" type="button" value="キャンセル" onclick="history.back(-1)"> 
       <input class="btn" type="submit" value="更新" name="submit">
       <input type="hidden" name="update_id" value="<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
echo htmlspecialchars((string) $_prefixVariable1, ENT_QUOTES, 'UTF-8');?>
">
</form>


</html>
<?php }
}
