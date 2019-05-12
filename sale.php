<?php
include ('connect.php');

$sql = "SELECT * FROM business_goods ORDER BY Gid DESC ";
$mysql_result = $db -> query($sql);

// if ($mysql_result == false){
//     echo "sql语句错误";
//     exit;
// }

//$rows = [];
//while($row = $mysql_result->fetch_array(MYSQLI_ASSOC)){
//    $rows[] = $row;
//    if( $rows['Gid']==id){
//        $gphone=$rows['Gphone'];
//    }
//
//}
$id = $_GET['id'];
while($date=mysqli_fetch_array($mysql_result,MYSQLI_ASSOC)){
    if($date['Gid']==$id){
        $Gname = $date['Gname'];
        $Gdes = $date['Gdescription'];
        $Gprice = $date['Gprice'];
        $Gclass = $date['Gclass'];
        $Gphone = $date['Gphone'];
        $Gqq = $date['Gqq'];
        $Gwechat = $date['Gwechat'];
        $Gimage = $date['Gimage'];
    }
}



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>青工二手交易平台</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="shortcut icon" href="images/logo1.png" type="image/x-icon"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_1128159_5o2i8ipicq.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/jqthumb.js"></script>
</head>
<body>
     <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://www.oucqdc.edu.cn/a/index.html">
            </a>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php" class="logo visible-lg-block">青工校园</a></li>
                <li><a href="index.php">首页</a></li>
                <li><a href="indexsecond.php">二手</a></li>
                <li><a href="indexbuy.php">求购</a></li>
                <li><a href="">联系我们</a></li>
                <li><div class="navbar-collapse collapse">
                    <form class="navbar-form" action="search.php" method="post" name="myform">
                        <div class="form-group input-group">
                            <input type="text" class="form-control" id="key-movie" placeholder="输入商品名称" name="keywords">
                            <span class="input-group-btn">
                                <a class="btn btn-default" onclick="document.myform.submit()">
                                    <span class="glyphicon glyphicon-search"></span>搜索
                                </a>
                            </span>
                        </div>
                    </form>
                    </div>
                </li>
            </ul>

            <?php
                ini_set("session.cookie_lifetime","30");
                session_start();
                if (isset($_SESSION['userName'])) {
                    $userName = $_SESSION['userName'];
                    echo "<ul class='nav navbar-nav'><li><a href='personal.html'><img src='images/5.jpg' width='25px'></a></li>
                                <li class='L2'><a href='logout.php'>退出</a></li></ul>";
                }
                else{
                    echo "<ul class='nav navbar-nav'>
                    <li><a href='login.php'>登录</a></li>
                                <li><a href='register.php'>注册</a></li></ul>";
                }
            ?>

        </div>
        </div>
    </div>
<div class="container main">
    <div class="row bigbox">
        <div class="list-group slide-bar col-sm-1 col-md-1 visible-lg-block">
            <a href="index.php" class="list-group-item"><span class="iconfont iconsuoyou"></span>所有分类</a>
            <a href="indexclass.php?ID=<?php echo 1?>" class="list-group-item"><span class="iconfont iconzihangche"></span>代步工具</a>
            <a href="indexclass.php?ID=<?php echo 2?>" class="list-group-item"><span class="iconfont iconshouji"></span>手机</a>
            <a href="indexclass.php?ID=<?php echo 3?>" class="list-group-item"><span class="iconfont icondiannao"></span>电脑</a>
            <a href="indexclass.php?ID=<?php echo 4?>" class="list-group-item"><span class="iconfont iconcamera"></span>数码</a>
            <a href="indexclass.php?ID=<?php echo 5?>" class="list-group-item"><span class="iconfont icondianqi"></span>电器</a>
            <a href="indexclass.php?ID=<?php echo 6?>" class="list-group-item"><span class="iconfont iconyifu"></span>衣鞋伞帽</a>
            <a href="indexclass.php?ID=<?php echo 7?>" class="list-group-item"><span class="iconfont iconshu"></span>书籍教材</a>
            <a href="indexclass.php?ID=<?php echo 8?>" class="list-group-item"><span class="iconfont iconlanqiu"></span>体育健身</a>
            <a href="indexclass.php?ID=<?php echo 9?>" class="list-group-item"><span class="iconfont iconleqi"></span>乐器</a>
            <a href="indexclass.php?ID=<?php echo 10?>" class="list-group-item"><span class="iconfont iconqita"></span>其他</a><br>
        </div>

        <div class="col-sm-12 col-md-10 mainbox">
        	<div class="detail clearfix row">
        		<div class="detail-pic col-md-5">
    				<img src="<?php echo $Gimage; ?>" alt=""><!-- 商品图片 -->
    			</div>
    			<div class="detail-form">
    				<form action="uploadsss.php" method="post"role="form">
                        <div class="form-group">
                            <span class="inputmain-content-item">商品名称:<?php echo $Gname; ?></span>
                        </div>
                        <div class="form-group">
                            <span class="inputmain-content-item">商品描述:<?php echo $Gdes; ?></span>
                        </div>
                        <div class="form-group">
                            <span class="inputmain-content-item">
                            	商品价格:
                            	<span class="goods-price">
                                    ￥&nbsp;<span class="price"><?php echo $Gprice; ?></span>
                                </span></span>
                        </div>
                        <div class="form-group">
                            <span class="inputmain-content-item">商品类别:<?php echo $Gclass; ?></span>
                        </div>
                <div class="form-group">
                    <span class="inputmain-content-item">手机:<?php echo $Gphone; ?></span>
                </div>
                <div class="form-group">
                    <span class="inputmain-content-item">QQ:<?php echo $Gqq; ?></span>
                </div>
                <div class="form-group">
                    <span class="inputmain-content-item">微信:<?php echo $Gwechat; ?></span>
                </div>
            </form>
    			</div>
        	</div>
			
    	</div>
            
        <div class="list-group slide-bar col-sm-1 col-md-1 list-group-right">
            <a href="up.php" class="list-group-item-right">发布二手</a>
            <a href="send.php" class="list-group-item-right">发布求购</a> 
        </div>
    </div>
</div>

<div class="common-footer">
    <div class="footerNav clearfix">
        <ul class="fn">
            <li><a href="/contact">关于我们</a></li>
            <li><a href="#">加入我们</a></li>
            <li><a href="indexsecond.php">校内二手</a></li>
            <li><a href="indexbuy.php">校内求购</a></li>
            <li><a href="login.php">我要登录</a></li>
            <li><a href="register.php">我要注册</a></li>
        </ul>
    </div>
    <div class="footerMain">
            <div class="fContact">
            <h3 class="fct">联系我们 / <span>contact us</span></h3>
            <p>Q群：123456789</p>
            <p>Q Q：123456789</p>
            <p>地址：山东省青岛市胶州市青岛工学院</p>
        </div>
        <div class="fCall">
            <p class="callN">TEL:18888888888</p>
            <span class="kfT">24小时在线客服</span>
            <a class="fxl" href="#" target="_blank">新浪微博</a>
            <a class="fqq" href="#">客服QQ</a>
            <a class="fwx tips">微信二维码</a>
        </div>
    </div>
    <p class="copyright">版权所有 © All Rights Reserved，yourpassword
    </p>
</div>

</body>
</html>            