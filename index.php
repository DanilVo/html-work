<?
$data = include_once('aboutMe.php');
$startData = $data['about'];
$startMe = $data['achievements'];
$startContacs = $data['contacts'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Summary</title>
    <link rel="shortcut icon" href="img/summary.ico">
    <link rel="stylesheet" href="css/cs.css">
    <!-- <script src="js/name.js"></script> -->
    <script type="text/javascript" src="/js/script.js" defer></script>

</head>
<body>

    <div class="header">
        <button id="toggle-theme-btn"><img src="img/moon.png" alt="dark/light mode" id="toggle-theme-image"></button>
        <h1>Welcome to my Resume summary!</h1>
        <div class="menu">
            <ul>
                <li><a href="#aboutme">About me</a></li>
                <li><a href="#myachivments">My achivments</a></li>
                <li><a href="#mycontacts">My contacts</a></li>
            </ul>
        </div>
    </div>
    
    <div class="slides">
        <img src="img/nature2.png" alt="nature1">
        <img src="img/nature3.png" alt="nature2"  class="block">
        <img src="img/nature1.png" alt="nature3"  class="block">
    </div>
    <button class="btnRight" ><img src="img/right.png"></button>
    <script src="js/slides.js" class="btnRight" defer></script>
    
    <div class="container">
        <div class="photo">
            <a><img src="img/pioners.png" alt="My picture"></a>
        </div>
        <div class="content">
            <h2>About me</h2>
            <p id="aboutme"><?=$startData['hello']?></p>
            <p><?=$startData['me']?></p>
            <p><?=$startData['whoMe']?></p>
            <h2>My achievements </h2>
            <p id="myachivments"><?=$startMe['language']?></p>
            <h2>My contacts</h2>
            <p id="mycontacts"><?=$startContacs['email']?></p>
            <p><?=$startContacs['phoneNum']?></p>
            <p><?=$startContacs['linkedIn']?></p>
        </div>
        <div class="bottompagephoto">
            <a><img src="img/developer.png" alt="bottom picture"></a>
        </div>
    </div>
    <div class="footer">
        <div class="bottom-strip">
            <div class="notice">My Resume summary, all rights reserved(c)</div>
            <div class="scroll"><a href="#top">Go up the page.</a></div>
        </div>
    </div>
</body>

</html>

<!-- Warning: Undefined array key "achivments" in C:\Users\משתמש\OneDrive\Desktop\html\index.php on line 4 -->
