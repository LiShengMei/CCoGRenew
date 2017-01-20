<?php
//@ 欢迎来到懒人站长素材网站
session_start();//定义session，同一IP登录不累加
$filepath = 'count.txt';
if ($_SESSION['temp'] == '')//判断$_SESSION[temp]的值是否为空,其中的temp为自定义的变量
{
 if (!file_exists($filepath))//检查文件是否存在，不存在刚新建该文件并赋值为0
 {
  $fp = fopen($filepath,'w');
  fwrite($fp,0);
  fclose($fp);
  counter($filepath);
 }else
 {
  counter($filepath);
 }
 $_SESSION['temp'] = 1;//登录以后,给$_SESSION[temp]赋一个值1
}

//counter()方法用来得到文件内的数字
function counter($f_value)
{
 //用w模式打开文件时会清空里面的内容，所以先用r模式打开，取出文件内容，保存到变量
 $fp = fopen($f_value,'r') or die('打开文件时出错。');
 $countNum = fgets($fp,1024);
 fclose($fp);
 $countNum++;
 $fpw = fopen($f_value,'w');
 fwrite($fpw,$countNum);
 fclose($fpw);
}
//注释下面一行可以实现同一IP登录不累加效果，测试时可以打开
//session_destroy();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

    <meta content="christ church of glory, christ, church, glory, chinese church, langley, vancouver, surrey, great vancouver, sermont, encounter, 基督敬拜中心, 温哥华教会, 教会, 温哥华, 素里,中国, 台湾, 大陆, 李秉中, 牧师, 礼拜, 家庭小组, 基督,荣耀,教会,基督荣耀教会, 溫哥華教會, 教會, 溫哥華, 素里,中國, 臺灣, 大陸, 牧師, 禮拜, 家庭小組" name="keywords">

    <meta content="Christ church of glory center a chinese church locates at surrey city of Great Vancouver." name="description">

    <meta name="GENERATOR" content="Microsoft FrontPage 5.0">

    <meta name="ProgId" content="FrontPage.Editor.Document">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Landed by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
  </head>
  <body class="landing">
    <div id="page-wrapper">

      <!-- Header -->
        <header id="header">
          <h1 id="logo"><a href="index.html">Landed</a></h1>
          <nav id="nav">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li>
                <a href="#">Layouts</a>
                <ul>
                  <li><a href="left-sidebar.html">Left Sidebar</a></li>
                  <li><a href="right-sidebar.html">Right Sidebar</a></li>
                  <li><a href="no-sidebar.html">No Sidebar</a></li>
                  <li>
                    <a href="#">Submenu</a>
                    <ul>
                      <li><a href="#">Option 1</a></li>
                      <li><a href="#">Option 2</a></li>
                      <li><a href="#">Option 3</a></li>
                      <li><a href="#">Option 4</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="elements.html">Elements</a></li>
              <li><a href="#" class="button special">Sign Up</a></li>
            </ul>
          </nav>
        </header>

      <!-- Banner -->
        <section id="banner">
          <div class="content">
            <header>
              <h2>基督榮耀教會</h2>
              <p>And there are no hoverboards or flying cars.<br />
              Just apps. Lots of mother flipping apps.</p>
            </header>
            <span class="image"><img src="images/pic01.jpg" alt="" /></span>
          </div>
          <a href="#one" class="goto-next scrolly">Next</a>
        </section>

      <!-- One -->
        <section id="one" class="spotlight style1 bottom">
          <span class="image fit main"><img src="images/pic02.jpg" alt="" /></span>
          <div class="content">
            <div class="container">
              <div class="row">
                <div class="4u 12u$(medium)">
                  <header>
                    <h2>Odio faucibus ipsum integer consequat</h2>
                    <p>Nascetur eu nibh vestibulum amet gravida nascetur praesent</p>
                  </header>
                </div>
                <div class="4u 12u$(medium)">
                  <p>Feugiat accumsan lorem eu ac lorem amet sed accumsan donec.
                  Blandit orci porttitor semper. Arcu phasellus tortor enim mi
                  nisi praesent dolor adipiscing. Integer mi sed nascetur cep aliquet
                  augue varius tempus lobortis porttitor accumsan consequat
                  adipiscing lorem dolor.</p>
                </div>
                <div class="4u$ 12u$(medium)">
                  <p>Morbi enim nascetur et placerat lorem sed iaculis neque ante
                  adipiscing adipiscing metus massa. Blandit orci porttitor semper.
                  Arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer
                  mi sed nascetur cep aliquet augue varius tempus. Feugiat lorem
                  ipsum dolor nullam.</p>
                </div>
              </div>
            </div>
          </div>
          <a href="#two" class="goto-next scrolly">Next</a>
        </section>

      <!-- Two -->
        <section id="two" class="spotlight style2 right">
          <span class="image fit main"><img src="images/pic03.jpg" alt="" /></span>
          <div class="content">
            <header>
              <h2>Interdum amet non magna accumsan</h2>
              <p>Nunc commodo accumsan eget id nisi eu col volutpat magna</p>
            </header>
            <p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing lorem.</p>
            <ul class="actions">
              <li><a href="#" class="button">Learn More</a></li>
            </ul>
          </div>
          <a href="#three" class="goto-next scrolly">Next</a>
        </section>

      <!-- Three -->
        <section id="three" class="spotlight style3 left">
          <span class="image fit main bottom"><img src="images/pic04.jpg" alt="" /></span>
          <div class="content">
            <header>
              <h2>Interdum felis blandit praesent sed augue</h2>
              <p>Accumsan integer ultricies aliquam vel massa sapien phasellus</p>
            </header>
            <p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing lorem.</p>
            <ul class="actions">
              <li><a href="#" class="button">Learn More</a></li>
            </ul>
          </div>
          <a href="#four" class="goto-next scrolly">Next</a>
        </section>

      <!-- Four -->
        <section id="four" class="wrapper style1 special fade-up">
          <div class="container">
            <header class="major">
              <h2>Accumsan sed tempus adipiscing blandit</h2>
              <p>Iaculis ac volutpat vis non enim gravida nisi faucibus posuere arcu consequat</p>
            </header>
            <div class="box alt">
              <div class="row uniform">
                <section class="4u 6u(medium) 12u$(xsmall)">
                  <span class="icon alt major fa-area-chart"></span>
                  <h3>Ipsum sed commodo</h3>
                  <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                <section class="4u 6u$(medium) 12u$(xsmall)">
                  <span class="icon alt major fa-comment"></span>
                  <h3>Eleifend lorem ornare</h3>
                  <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                <section class="4u$ 6u(medium) 12u$(xsmall)">
                  <span class="icon alt major fa-flask"></span>
                  <h3>Cubilia cep lobortis</h3>
                  <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                <section class="4u 6u$(medium) 12u$(xsmall)">
                  <span class="icon alt major fa-paper-plane"></span>
                  <h3>Non semper interdum</h3>
                  <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                <section class="4u 6u(medium) 12u$(xsmall)">
                  <span class="icon alt major fa-file"></span>
                  <h3>Odio laoreet accumsan</h3>
                  <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                <section class="4u$ 6u$(medium) 12u$(xsmall)">
                  <span class="icon alt major fa-lock"></span>
                  <h3>Massa arcu accumsan</h3>
                  <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
              </div>
            </div>
            <footer class="major">
              <ul class="actions">
                <li><a href="#" class="button">Magna sed feugiat</a></li>
              </ul>
            </footer>
          </div>
        </section>

      <!-- Five -->
        <section id="five" class="wrapper style2 special fade">
          <div class="container">
            <header>
              <h2>Magna faucibus lorem diam</h2>
              <p>Ante metus praesent faucibus ante integer id accumsan eleifend</p>
            </header>
            <form method="post" action="#" class="container 50%">
              <div class="row uniform 50%">
                <div class="8u 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Your Email Address" /></div>
                <div class="4u$ 12u$(xsmall)"><input type="submit" value="Get Started" class="fit special" /></div>
              </div>
            </form>
          </div>
        </section>

      <!-- Footer -->
        <footer id="footer">
          <ul class="icons">
            <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
            <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
            <li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
          </ul>
          <ul class="copyright">
            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
          </ul>
        </footer>

    </div>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.dropotron.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/main.js"></script>

  </body>
</html>