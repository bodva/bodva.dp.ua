<html>
<head>
<title>BoDVa's Home Page</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
<meta name="keywords" content="ИщВМф, BoDVa, homepage, BoDVa homepage, BoDVa coder, coding, anime" />
<meta name="description" content="BoDVa's home page" />
<meta name='yandex-verification' content='6f90f75e874ca533' />  
</head>
<body>
<a href="http://bodva.dp.ua">
 <div  class="header">
  BoDVa.dp.ua
  </font>
 </div>
</a>
<div class="text">
  <div id="nav"> 
   <ul>
	<li>
	 <a href="http://p.bodva.dp.ua/">
	  Сознание
	 </a>
	</li>
	<li>
	 <a href="http://blog.bodva.dp.ua/">
	  Мой Блог
	 </a>
	</li>
	<li>
	 <a href="?action=index">
	  Главная
	 </a>
	</li>
   </ul>
  </div>
   <p align="left">
	<?php
		//if (($_GET['action']=="index") or (empty($_GET['action']))) 
		{
			include('index.txt');
		}
	?>
  </p> 
</div>
<div id="footer">
<?php include('reclame.txt') ?>
<br />
© BoDVa 2007-<?php echo date('Y');?></div>
</body>
</html>