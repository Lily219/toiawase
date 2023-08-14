<?php
/* Smarty version 4.3.1, created on 2023-08-14 17:18:30
  from 'C:\xampp\htdocs\mvc_app\Views\contact\contactform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d9e35650ad96_31651210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47f8f3e5c8f2b2bbdf18b8084dd46f1ebe23555c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\contact\\contactform.tpl',
      1 => 1692001103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d9e35650ad96_31651210 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
                <input type="text" class="form-control" name="name" placeholder="山田太郎" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value["name"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value["name"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
            </div>
            <div class="form-group">
                <label for="kana">フリガナ</label>
                <input type="text" class="form-control" name="kana" placeholder="ヤマダタロウ" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value["kana"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value["kana"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
            </div>
            <div class="form-group">
                <label for="tel">電話番号</label>
                <input type="tel" class="form-control" name="tel" placeholder="08012345678" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value["tel"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value["tel"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
            </div>
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" class="form-control"  name="email" placeholder="exemple@cin-group.co.jp" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value["email"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value["email"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
            </div>
            <div class="form-group">
                <label for="body">お問い合わせ内容</label>
                <textarea name="body" class="form-control" cols="100" rows="3"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value["body"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</textarea>
                </div>
                <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value["body"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['_SESSION']->value["csrf_token"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"> 
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
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['record']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
      <tr><td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['row']->value['name'], ENT_QUOTES, 'UTF-8');?>
</td>
      <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['row']->value['kana'], ENT_QUOTES, 'UTF-8');?>
</td>>
      <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['row']->value['tel'], ENT_QUOTES, 'UTF-8');?>
</td>>
      <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['row']->value['email'], ENT_QUOTES, 'UTF-8');?>
</td>>
      <td><?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['row']->value['body'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
echo nl2br((string) $_prefixVariable1, (bool) 1);?>
</td>
      <td>
      <form action="/contact/edit" method="post"> 
      <input type="submit" name="edit" value="編集"></input>
       <input type="hidden" name="edit_id" value="<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
echo htmlspecialchars((string) $_prefixVariable2, ENT_QUOTES, 'UTF-8');?>
"> 
      </form> 
      </td>
      <td>
        <form action="/contact/delete" method="post">  
        <input type="submit" name="delete" value="削除" onclick="return confirm('本当に削除しますか?')"></input>  
        <input type="hidden" name="delete_id" value="<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
echo htmlspecialchars((string) $_prefixVariable3, ENT_QUOTES, 'UTF-8');?>
">   
       </form>   
      </td></tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<?php echo '<script'; ?>
 src="../js/validate.js"><?php echo '</script'; ?>
>   
</body>
</html><?php }
}
