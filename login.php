<?php 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>
 <body>
 <h2>ログイン</h2>
   <form action="login_act.php" method='post'>
    <p>名前 : <input type="text" name='name'></p>
    <p>メールアドレス : <input type="text" name='email'></p>
    <p>パスワード : <input type="text" name='pass'></p>
  </form>
  <form action="insert.php" method='post'>
    <h2>新規登録</h2>
    <p>メールアドレス : <input type="text" name='email'></p>
    <p>パスワード : <input type="text" name='pass'></p>
   </form>
   
   
   
  
 </body>
 </html>