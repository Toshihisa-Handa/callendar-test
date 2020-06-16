<?php 
//カレンダー作成

//現在年月






?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
</head>
<body>
<h1>予約ページ</h1>
  <p>希望言語
      <select name="" id="">
      <option value="php">php</option>
      <option value="javascript">javascript</option>
      <option value="css">css</option>
      <option value="html">html</option>
      <option value="mysql">mysql</option>
      </select>
  </p>

<p>希望詳細（任意）</p>
<textarea name="" id=""></textarea>
<p>希望日程</p>
<input type="text" id='date'>






<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js
"></script>
  <script>
    
$('#date').datepicker();



  </script>
</body>
</html>