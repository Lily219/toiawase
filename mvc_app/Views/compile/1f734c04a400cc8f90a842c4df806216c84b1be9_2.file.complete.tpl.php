<?php
/* Smarty version 4.3.1, created on 2023-08-14 12:26:31
  from 'C:\xampp\htdocs\mvc_app\Views\contact\complete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d99ee71f8538_02078346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f734c04a400cc8f90a842c4df806216c84b1be9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\contact\\complete.tpl',
      1 => 1691563272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d99ee71f8538_02078346 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>お問い合わせ</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
                
<div class="p-4 container-field form-orange">
<div class="row justify-content-center">
    <div class="col-lg-6 mx-auto col-md-8">
        <h2 class="mb-4">お問い合わせ送信完了</h2>
        <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['token'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
          <p>お問い合わせ内容を送信しました。</p>
          <p>ありがとうざいました。</p>

          <div class="m-1">
          <a href="/">トップページへ</a>
      </div>
       
</head>
</html><?php }
}
