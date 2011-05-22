<html>
<head>
<title>BoDVa's Home Page</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<a href="http://bodva.org.ua">
 <div  class="header">
  BoDVa.org.ua
  </font>
 </div>
</a>
<div class="text">
  <div id="nav"> 
   <ul>
    <li>
	 <a href="http://blog.bodva.org.ua/">
	  Мой Блог
	 </a>
	</li>
	<li>
	 <a href="index.php?action=bestsProg">
	  Лучшие программы
	 </a>
	</li>
	<li>
	 <a href="index.php?action=aboutMe">
	  Обо мне
	 </a>
	</li>
	<li>
	 <a href="index.php?action=index">
	  Главная
	 </a>
	</li>
   </ul>
  </div>
  <p align="center"><br/>
	<?php
		if (($action=="index") or (empty($action))) 
		{
			include('index.txt');
		}
		if ($action=="aboutMe") 
		{
			include('aboutMe.txt');
		}
		if ($action=="bestsProg") 
		{
			include('bestPrograms.txt');
		}		
	?>
  </p>
 
</div>
<div id="footer">
<?php include('reclame.txt') ?>
<br />
(c) BoDVa 2007 </div>
</body>
</html>