<!DOCTYPE html>
<html>
<head>
<title>M3_Task</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="style.css">
</head>
<body>
    <script src="script.js"></script>

<img src="384560566_6412819298844411_2702374386069757535_n.png" width="1600" height="500">
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
      <span class="w3-tag">24-25 февруари</span>
    </div>
    <div class="w3-display-middle w3-center">
    
    </div>
    <div class="w3-display-bottomright w3-center w3-padding-large">
      <span class="w3-text-white">Grant Hotel Milenium Sofia</span>
    </div>
  </header>
<div class="w3-top">
    <div class="w3-row w3-padding w3-black">
      <div class="w3-col s3">
        <a href="#" class="w3-button w3-block w3-black">ЗА ФОРУМА</a>
      </div>
      <div class="w3-col s3">
        <a href="file:///C:/Users/Lenovo/Desktop/M3-task/tickets.html">ЗАКУПИ БИЛЕТ</a>
      </div>
      <div class="w3-col s3">
        <a href="#menu" class="w3-button w3-block w3-black">ПАРТНЬОРИ</a>
      </div>
      <div class="w3-col s3">
        <a href="#where" class="w3-button w3-block w3-black">ЗА ФИРМАТА</a>
        <div class="w3-col s3">
         
            </div>
        </div>
      </div>
    </div>
  </div>


<div class="w3-sand w3-grayscale w3-large">


<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">Какво е Lorem ipsum  и за какво го използваме?</span></h5>
    <p>Lorem ipsum е елементарен примерен текст използван в печетарската и типографската индустрия. 
        Lorem ipsum е индустриален стандарт от около 1500 години,
         когато неизвестен печетар взима няколко печетарски букви и ги разбърква, за да напечата с тях книгас примерни шрифтове.</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p>24.11.2023(петък)Стандартният пасаж използван от 1500г. насам. </p>
     <p><i>Много системи за публикуване и редоктори на Уеб страници използват Lorem Ipsum като примерен текстов модел " по подразбиране", 
        поради което при търсене в интернет на фразата "lorem ipsum" ще бъдат открити много сайтове в процес на разработка. </i></p>
     
    </div>
    <img src="384564193_658685682697755_6015036395180421779_n.png" style="width:100%;max-width:1000px" class="w3-margin-top">
    <p><strong>Цени на билета са както следва <br> </strong>До 24.11 - 130лв.<br>
    До 25.11 - 150лв.</p>
   
  </div>
</div>

<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">Как да стигнете до нас?</span></h5>
    <p>С метро- близост е до спираката "Национален дворец на култерата"(НДК)</p><br>
    <p>С трамвай номер 1, 6, 7</p><br>
    <p>С автобус номер 72</p>
   
    <p  class="w3-center w3-padding-48"><span class="w3-tag w3-wide" ALIGN="center"><strong>ЗАКУПИ БИЛЕТ ЗА СЪБИТИЕТО</strong></p>
    <form  action="" method="post">
      <p><input class="w3-input w3-padding-16 w3-border" type="name" name="name" placeholder="Име и фамилия" id="name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number" name="number" placeholder="Колко билета?"id="number"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Дата"  value="2020-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="email" name="email" placeholder="email" id="email"></p>
      <p><button class="w3-button w3-black" type="submit" name="submit">Купи билет</button></p>
    </form>
  </div>
</div>
</div>
<?php

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $number = $_POST['number'];
  $email = $_POST['email'];

  include('add_user.php');
}


 ?>

<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
    
        <p>@ 2023 Forum<br>
          Web design and development by: Tsvetelia Iordanova</p>
      
</footer>
</div>

</body>
</html>