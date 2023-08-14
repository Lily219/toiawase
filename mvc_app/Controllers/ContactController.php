<?php
require_once ROOT_PATH.'Controllers/Controller.php';
require_once ROOT_PATH.'Models/Contact.php';
class ContactController extends Controller
{

    public function contactForm(){
        $contact = new Contact;
        $record = $contact->index();

        // //エスケープ処理
        // function escape($str){
        //     return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
        // }
          //トークンの生成（CSRF対策）
          $toke_byte = openssl_random_pseudo_bytes(32);
          $csrf_token = bin2hex($toke_byte);
      
          $_SESSION['csrf_token'] = $csrf_token;

        $this->view('contact/contactform', compact('record'));
    }
   
 
    public function confirm(){
        
          //エスケープ処理
          function escape($str){
            return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
        }

        session_start();
    
        $name = "";
        $kana = "";
        $email = "";
        $tel = "";
        $body = "";
        $errorMessages = [];
       

        if(empty($_POST["name"]) || mb_strlen($_POST["name"]) > 10) {
           $errorMessages['name'] = "氏名を10文字以内で入力してください。";
        }

        if(empty($_POST["kana"]) || mb_strlen($_POST["kana"]) > 10){
           $errorMessages['kana'] = 'ふりがなを10文字以内で入力してください。';
        }

        if(empty($_POST["tel"])){
            ;
        }
        else{
            if(!preg_match('/^0\d{9,10}$/', $_POST["tel"])){
              $errorMessages['tel'] = '電話番号を正しく入力してください。';   
            }
        }
        
        if(empty($_POST['email']) || !preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/', $_POST['email'])){
        $errorMessages['email'] = 'メールアドレスを正しく入力してください。';
        }

        if(empty($_POST['body'])){
        $errorMessages['body'] = 'お問い合わせ内容を入力してください。';
        }
   

    if(!empty($errorMessages)){
         
            $this->view('contact/contactform', ['post' => $_POST, 'errorMessages' => $errorMessages]);
        }else{
             //トークンの生成（CSRF対策）
            $toke_byte = openssl_random_pseudo_bytes(32);
            $csrf_token = bin2hex($toke_byte);
            $_SESSION['csrf_token'] = $csrf_token;

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = isset($_POST["name"])? $_POST["name"] : "";
                $kana = isset($_POST["kana"])? $_POST["kana"] : "";
                $email = isset($_POST["email"])? $_POST["email"] : "";
                $tel = isset($_POST["tel"])? $_POST["tel"] : "";
                $body = isset($_POST["body"])? $_POST["body"] : "";

                $this->view('contact/confirm', compact('name', 'kana', 'email', 'tel', 'body'));
              
        }else{
            //フォームボタン以外からこのページにアクセスした場合（URL直接入力など）、トップページに戻る
            header("location: /");
            exit;
        }
       }
    
    }
    
   

    public function complete(){
        $_SESSION['csrf_token'] = '';
        if($_SESSION['csrf_token'] == $_POST['csrf_token'] ){
      
        $contact = new Contact;
        $result = $contact->complete(
            $_POST['name'],
            $_POST['kana'],
            $_POST['email'],
            $_POST['tel'],
            $_POST['body']
        );

        if(is_numeric($result)){
            session_start();
            $_SESSION['auth'] = $result;
        $this->view('contact/complete');
        }
    }else{
          //フォームボタン以外からこのページにアクセスした場合（URL直接入力など）、トップページに戻る
          header('Location: /');
          exit;
    }
   
    
    }

    public function edit(){
        session_start();

        if(!empty($_POST["edit_id"])){
           $edit_id = $_POST["edit_id"];

           $contact = new Contact;
           $result = $contact->getContact($edit_id);
        }
          $this->view('contact/edit',  ['data' => $result, 'auth' => $edit_id]);   
    }

    public function update(){
        session_start();
            $errorMessages = [];

            if(empty($_POST["name"]) || mb_strlen($_POST["name"]) > 10) {
               $errorMessages['name'] = "氏名を10文字以内で入力してください。";
            } 
            
            if(empty($_POST["kana"]) || mb_strlen($_POST["kana"]) > 10){
               $errorMessages['kana'] = 'ふりがなを10文字以内で入力してください。';
            }
        
             if(empty($_POST['email']) || !preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/', $_POST['email'])){
               $errorMessages['email'] = 'メールアドレスを正しく入力してください。';
            }

            if(empty($_POST["tel"])){
                ;
            }
            else{
                if(!preg_match('/^0\d{9,10}$/', $_POST["tel"])){
                 $errorMessages['tel'] = '電話番号を正しく入力してください。';   
            }}

            if(empty($_POST['body'])){
               $errorMessages['body'] = 'お問い合わせ内容を入力してください。';
            }

        if(!empty($errorMessages)){
            $this->view('contact/edit', ['post' => $_POST, 'errorMessages' => $errorMessages]);
        }else{
            if(!empty($_POST["update_id"])){
                $contactId = $_POST["id"];

           $contact = new Contact;
           $result = $contact->updateContact(
            $contactId,
            $_POST['name'],
            $_POST['kana'],
            $_POST['tel'],
            $_POST['email'],
            $_POST['body']
            );
        

            if($result == true){
                header('Location: /contact/contactform');
                exit();
            }
            //   // exit;
            //  }else{
            //    $this->view('contact/edit', ['post' => $_POST, 'errorMessages' => $errorMessages]);
            // }
        }
    }
   
      
    }

    public function delete(){
        session_start();
        if(!empty($_POST["delete_id"])){
            $delete_id = $_POST["delete_id"];
            $contact = new Contact;
            $contact->deleteContact($delete_id);
            
        }
       
        if($contact == true){
           header('Location: /contact/contactform');
           exit;
        }
    }
}
