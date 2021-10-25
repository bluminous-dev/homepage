<!DOCTYPE html>
<html lang="ja">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
   <meta name="generator" content="Jekyll v3.8.6">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!--レイアウト設定用CSS-->
    <link rel="stylesheet" href="stylesheet.css"/>
    <link rel="stylesheet" href="keyframes.css"/>
    
    <!--iPhone版Safariアニメーション修正-->
    <script>
        $(function(){
            var style = '<link rel="stylesheet" href="stylesheet.css"/>';
            $('head link:last').after(style);
        });
    </script>
    
    <!--ファビコン（=ホームページのアイコン）-->
    <link rel="shortcut icon" href="./img/blum.ico"/>
    
    <!--タイトル-->
    <title>Welcome to Bluminous!</title>

    <!-- スムーズスクロール設定-->
    <script>
        $(function(){
            $('a[href^="#"]:not(a.carousel-control-prev, a.carousel-control-next, a.nav-link, a[data-toggle="collapse"], a[data-toggle="tab"])').click(function(){
            var speed = 500;
            var href= $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top;
                $("html, body").animate({scrollTop:position}, speed, "swing");
                return false;
            });
        });
    </script>
    
    <!--SNSアカウント用-->
    <script src="https://kit.fontawesome.com/a392ee6574.js" crossorigin="anonymous"></script>
</head>

<body>
<header>
  <!-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-warning"> -->
   <nav class="navbar navbar-expand-md fixed-top">
    <a class="navbar-brand" href="./index.html">Bluminous</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button><!-- Responsive Menu "≡"-->
    
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <button id="themechange">Change Theme</button> 
        </li>
      </ul>
    </div>
  </nav>
</header>
 
  <!--テーマ切り換え関数-->
   <script> 
       //画像を読み込む関数（ページ読み込み用）
       function readImg(id,imgPath){
            document.getElementById(id).src=imgPath;

       }
       
       //同一idの要素を一括設定する関数（引数はid，色，通し番号（インデックス）の順に指定）
       function setColor(id,color){
               document.getElementById(id).style.color=color;//見出し文字色
               document.getElementById(id).style.borderColor=color;//水平線色
       }
      
       document.getElementById("themechange").addEventListener("click",function(){
       
          
       //同一idの要素を一括変更する関数（引数はid，色，通し番号（インデックス）の順に指定）
       function changeColor(id,color){
               document.getElementById(id).style.color=color;//見出し文字色
               document.getElementById(id).style.borderColor=color;//水平線色
       }

        var theme = document.body.getAttribute("theme");
           
        //もしダークテーマならライトテーマとライト版ロゴに切り換え
        if (theme === "dark") {
            document.body.setAttribute("theme","light");
            changeColor("topic","000096");
            changeColor("featurette-divider","black");
        } 
        //もしライトテーマならダークテーマとダーク版ロゴに切り換え
        else {
            document.body.setAttribute("theme","dark");
            changeColor("topic","66ff66");
            changeColor("featurette-divider","white");
        }
    });
    
    //OSのテーマを取得する
    if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.body.setAttribute("theme","dark");
        window.onload=function(){
            setColor("topic","66ff66");
            setColor("featurette-divider","white");
       }
    }
    else {
    document.body.setAttribute("theme","light");
        window.onload=function(){
            setColor("topic","000096");
            setColor("featurette-divider","black");
       }
    }
    </script>

<main role="main">
  <div id="logintop" class="col-md-7">
     <h2 id="topic" class="h2_log">ログイン</h2>
        <form action="login.php" method="post" class="form_log" id="log-topic">
          <input type="email" name="email" class="textbox un" placeholder="メールアドレス"><br>
          <input type="password" name="password" class="textbox pass" placeholder="パスワード"><br>
          <button type="submit" class="log_button">ログインする</button>
        </form>
     <h2 id="topic" class="h2_log" style="margin-top: 10px">新規会員登録</h2>
        <form action="signup.php" method="post" class="form_log" id="log-topic">
          <input type="email" name="email" class="textbox un" placeholder="メールアドレス"><br>
          <input type="password" name="password" class="textbox pass" placeholder="パスワード"><br>
          <button type="submit" class="log_button">新規登録する</button>
          <p style="text-align:center;margin-top: 1.5em;">※パスワードは半角英数字をそれぞれ１文字以上含んだ、８文字以上で設定してください。</p>
        </form>
  <hr id="featurette-divider">
  </div><!-- /.container -->

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to Top</a></p>
    <p>&copy; 2020 Bluminous All rights reserved.</p>
  </footer>
</main>

</body>