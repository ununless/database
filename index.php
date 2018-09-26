
<?php
	header("content-type:text/html;charset=utf-8");
	require("comm_php/funcation.php");
    require("comm_php/database.php");
	$conn=connect();
	session_start();
	$admins = $_SESSION['admins'];
	$adminname = $admins['username'];
	
	$sql = "select * from login where username='$adminname'";
	$sqlq = mysql_query($sql);
	$value = mysql_fetch_array($sqlq);
	
	?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
    <!-- CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet">
  </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php">首页</a>
          <a class="blog-nav-item" href="#part1">校园</a>
          <a class="blog-nav-item" href="#part2">旅行</a>
          <a class="blog-nav-item" href="#part3">生活</a>
          <a class="blog-nav-item" href="#part4">课程</a>
          <a class="blog-nav-item" href="#part5">学业</a>
          <a class="blog-nav-r">&nbsp;</a>
          <a class="blog-nav-item" href="../login.html">退出</a>
        </nav>
      </div>
    </div>
	<div class="intr">
    	<span class="avtar"><a href="update.php"><img src="uploads/<?php echo $value['myphname']?>" width="150px" height="150px"/></a></span>
        <p class="peointr">我叫<?php echo $value['username']; ?>，一名计算机专业大三的学生。</p>
        <p class="peointr"><?php echo $value['signature']; ?></p>
    </div>
    <div class="title" id="part1">校园</div>
    <div class="content">
    	<div class="pic pic1">
    		<img src="image/h1.jpg" alt="">
    		<p>xx</p>
    	</div>
    	<div class="pic pic2">
    		<img src="image/h2.jpg" alt="">
    		<p>xx</p>
    	</div>
    	<div class="pic pic3">
    		<img src="image/h3.jpg" alt="">
    		<p>xx</p>
    	</div>
    </div>
    <div class="tlinks">
    	
    </div>
    <div class="title" id="part2">旅行</div>
    <div class="content">
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="image/s1.jpg" alt="...">
                </div>
                <div class="item">
                  <img src="image/s2.jpg" alt="...">
                </div>
				<div class="item">
                  <img src="image/s3.jpg" alt="...">
                </div>
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
    </div>
	<div class="title" id="part3">生活</div>
    <div class="content">
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#home1" role="tab" data-toggle="tab">大一</a></li>
          <li><a href="#profile1" role="tab" data-toggle="tab">大二</a></li>
          <li><a href="#messages1" role="tab" data-toggle="tab">大三</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="home1">
          	< p > 类 = "文本 x" x </' xp >
            <p class="text">彻底的</p>
            <p class="text">参</p>
          </div>
          <div class="tab-pane" id="profile1">
          	<p class="text">参</p>
            <p class="text">创</p>
            <p class="text">参</p>
          </div>
          <div class="tab-pane" id="messages1">
          	<p class="text">制作</p>
            <p class="text">为将来</p>
            <p class="text"></p>
          </div>
        </div>
    </div>
   
  	<div class="title" id="part4">课程</div>
    <div class="content">
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#home2" role="tab" data-toggle="tab">大一</a></li>
          <li><a href="#profile2" role="tab" data-toggle="tab">大二</a></li>
          <li><a href="#messages2" role="tab" data-toggle="tab">大三</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="home2">
          	<p class="text">曾就职于公司，任职Web前端工程师职位</p>
            <p class="text">这份工作也让我认识到自己的兴趣所在</p>
            <p class="text">愿今后继续做前端 做前端技术的狂热者</p>
          </div>
          <div class="tab-pane" id="profile2">
          	<p class="text">作为一个最初掌握的技术</p>
            <p class="text">在很长的一段时间  我都用它来开发web,开发应用程序</p>
            <p class="text">愿今后可以继续研究它</p>
          </div>
          <div class="tab-pane" id="messages2">
          	<p class="text">作为一名草根站长</p>
            <p class="text">Seo是必不可少的</p>
            <p class="text">因此我仍在不断地学习它 并因此享受SEO带来的乐趣</p>
          </div>
        </div>
    </div>
    
    <div class="title" id="part5">学业</div>
    <div class="content">
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#home3" role="tab" data-toggle="tab">应用技术</a></li>
          <li><a href="#profile3" role="tab" data-toggle="tab">网络技术</a></li>
          <li><a href="#messages3" role="tab" data-toggle="tab">编程技术</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="home3">
          	<p class="text">学习web前端</p>
            <p class="text">学习单片机技术</p>
            <p class="text">学习综合布线技术</p>
          </div>
          <div class="tab-pane" id="profile3">
          	<p class="text">学习网络基础</p>
            <p class="text">学习网络组建技术</p>
            <p class="text">学习网络设备配置</p>
          </div>
          <div class="tab-pane" id="messages3">
          	<p class="text">C语言程序设计</p>
            <p class="text">PHP网站开发</p>
            <p class="text">SQL数据库操作</p>
          </div>
        </div>
    </div>
     
    <div class="blog-footer">
      <p></p>
    </div>
    <a href="" class="btt">顶部</a>
    <!-- Js-->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
  </body>
</html>


