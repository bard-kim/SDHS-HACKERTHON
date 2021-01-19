<?php include "./db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>JS쇼핑</title>
<link rel="stylesheet" type="text/css" href="/common.css" />
</head>
<body>
	<?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$sql = mq("select * from slist2 where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$shopinfo = $sql->fetch_array();
	?>
	<div id="bg1"></div>
	<div id="main_in">
		<div id="menu">
		<header class="site-header">
	   <div class="container">
		   <h3 class="header__logo"><a href="http://localhost/index.php"><img src="/logo2.png" alt="" class="food"></a></h3>
		   <form>
						<div id="search_ser">
							<ul>
								<li><input type="text" placeholder="상품검색" size="50" id="ser" /></li>
								<li><button id="se_br"><img src="/search.png"></button></li>
							</ul>
						</div>
					</form>
		   <nav class="gnb">
			   <ul>
			   		<li>
					   <a href="#">가전제품</a>
					   <ul>
						   <li><a href="도마.php">칼/도마</a></li>
						   <li><a href="수저.php">수저/커트러리</a></li>
						   <li><a href="커피.php">커피/티/와인</a></li>
						   <li><a href="컵.php">컵/잔/텀블러</a></li>
					   </ul>
				   </li>
				   <li>
					   <a href="#">생활용품</a>
					   <ul>
						   <li><a href="청소.php">청소/주방세제</a></li>
						   <li><a href="가구.php">가구</a></li>
						   <li><a href="건강.php">건강/의료용품</a></li>
						   <li><a href="욕실용품.php">욕실용품</a></li>
					   </ul>
				   </li>
				   <li>
					   <a href="#">홈인테리어</a>
					   <ul>
						   <li><a href="홈데코.php">홈데코</a></li>
						   <li><a href="가구.php">가구</a></li>
						   <li><a href="침구.php">침구</a></li>
						   <li><a href="욕실용품.php">욕실용품</a></li>
					   </ul>
				   </li>
			   </ul>
		   </nav>
	   </div>
   </header>
				<div id="content">
					<div id="shopname">
						<div id="shop_nt">
							JC쇼핑
						</div>
					</div>
					<div id="shop_p_img">
						<img src="/shop/<?php echo $shopinfo['pro_pic'];?>.jpg" alt="propic" title="propic" />
					</div>
					<div id="shop_p_info">
						<ul>
							<li>상품제목 : <?php echo $shopinfo['pro_name']; ?></li>
							<li>원산지 : <?php echo $shopinfo['fromcon']; ?></li>
							<li>상품번호 : <?php echo $shopinfo['pro_num']; ?></li>
							<li>제조사 : <?php echo $shopinfo['pro_ma']; ?></li>
							<li>등록일자 : <?php echo $shopinfo['date']; ?></li>
						</ul>
						<div id="shop_icon">
							<ul>
								<li><a href="#"><img src="/shop/buy.png" alt="buy_icon" title="buy_icon" /></a></li>
								<li><a href="./basket_ok.php?idx=<?php echo $shopinfo['idx'];?>"><img src="/shop/basket.png" alt="" title="" /></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
        <footer class="site-footer">
        <div class="container">
            <div class="copyright">
                <a href="#">copyright &copy; 2021 김도현,김민성,이재욱 Right Reserved.</a>
                <ul class="aaa">
                    <li><a href="#"><img src="" alt="" class=""></a></li>
                    <li><a href="#"><img src="" alt=""></a></li>
                    <li><a href="#"><img src="" alt=""></a></li>
                </ul>
            </div>
        </div>
	</footer>
</body>
</html>