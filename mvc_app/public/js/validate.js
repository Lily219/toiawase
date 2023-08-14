//定数formを定義
const form = document.getElementById('contact_form');

//関数宣言

// 空チェック関数
//  (...args) -> 可変長引数
const isValidRequiredInput = (...args) => {
  let validator = true;
  for (let i=0; i < args.length; i=(i+1)|0) {
      if (args[i] === "") {
          validator = false;
      }
  }
  return validator
};

// 名前の文字数制限の関数
const isValidName = (name) =>{
    if(name.length > 10){
        return false
    }
   return true
}

// カナの文字数制限の関数
const isValidKana = (kana) =>{
    if(kana.length > 10){
        return false
    }
    return true
}

//電話の形式チェック
const isValidTel = (tel) => {
    const regex = /^0\d{9,10}$/;
    return regex.test(tel)
}


// メール形式チェックの関数
const isValidEmailFormat = (email) => {
    const regex = /^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/;
    return regex.test(email)
  }
  

  // フォームの確認ボタン押されたら実行
form.addEventListener('submit', e => {
   
    e.preventDefault();

      // フォームの値取得
      const name = form.name.value;
      const kana = form.kana.value;
      const tel = form.tel.value;
      const email = form.email.value;
      const body = form.body.value;
     // const name_error_text  = document.getElementsById('error-text name')[0];

      // 空チェック
    if(!isValidRequiredInput(name, kana, email, body)){
        // 値が空でないかチェック
        alert('必須項目(名前、ふりがな、メールアドレス、お問い合わせ内容)に未入力があります。');
        return false   
    }
    
      // 名前の文字数制限
      if(!isValidName(name)){
        alert('名前は10文字以内で入力ください。')
        return false
    }

     // カナの文字数制限
     if(!isValidKana(kana)){
        alert('ふりがなは10文字以内で入力ください。')
        return false
    }

     //telの形式チェック
    if(!isValidRequiredInput(tel) || !isValidTel(tel)){
        alert('電話番号の形式が不正です。もう1度お試しください。')
        return false
          
    }
     

      // emailの形式チェック
      if(!isValidEmailFormat(email)){
        alert('メールアドレスの形式が不正です。もう1度お試しください。')
        return false
    }
    form.submit();

});

