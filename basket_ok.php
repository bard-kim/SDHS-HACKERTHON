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
		$sql = mq("select * from slist where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$shopinfo = $sql->fetch_array();

		$ba_pic = $shopinfo['pro_pic'];
		$ba_name = $shopinfo['pro_name'];
		$ba_price = $shopinfo['price'];

		$sql2 = mq("insert into basket(pro_pic,pro_name,price,date) values('".$ba_pic."','".$ba_name."','".$ba_price."',now())");
		echo "<script>alert('장바구니에 등록되었습니다.');</script>";

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
						   <li><a href="#칼">칼/도마</a></li>
						   <li><a href="#수저">수저/커트러리</a></li>
						   <li><a href="#커피">커피/티/와인</a></li>
						   <li><a href="#컵">컵/잔/텀블러</a></li>
					   </ul>
				   </li>
				   <li>
					   <a href="#">생활용품</a>
					   <ul>
						   <li><a href="#청소">청소/주방세제</a></li>
						   <li><a href="#가구">가구</a></li>
						   <li><a href="#건강">건강/의료용품</a></li>
						   <li><a href="#욕실용품">욕실용품</a></li>
					   </ul>
				   </li>
				   <li>
					   <a href="#">홈인테리어</a>
					   <ul>
						   <li><a href="#홈데코">홈데코</a></li>
						   <li><a href="#가구">가구</a></li>
						   <li><a href="#침구">침구</a></li>
						   <li><a href="#욕실용품">욕실용품</a></li>
					   </ul>
				   </li>
			   </ul>
		   </nav>
	   </div>
   </header>
				<h3 id="tit1"><a name="칼">칼/도마</a></h3>
					<div id="shop_list">
						<?php
							$sql = mq("select * from slist order by idx desc");
							while($shoplist = $sql->fetch_array()){
						?>
						<div class="item">
							<div class="pro_img"><a href="./prodet.php?idx=<?php echo $shoplist['idx'];?>"><img src="/shop/<?php echo $shoplist['pro_pic'];?>.jpg" alt="propic" title="propic" /></a></div>
							<div class="pro_nt"><a href="./prodet.php?idx=<?php echo $shoplist['idx'];?>"><?php echo $shoplist['pro_name'];?></a></div>
							<div class="pro_price"><?php echo $shoplist['price'];?></div>
						</div>
					<?php } ?>
					<h3 id="tit1"><a name="수저">수저/커트러리</a></h3>
					<div id="shop_list">
						<?php
							$sql = mq("select * from slist2 order by idx desc");
							while($shoplist = $sql->fetch_array()){
						?>
						<div class="item">
							<div class="pro_img"><a href="./prodet2.php?idx=<?php echo $shoplist['idx'];?>"><img src="/shop/<?php echo $shoplist['pro_pic'];?>.jpg" alt="propic" title="propic" /></a></div>
							<div class="pro_nt"><a href="./prodet2.php?idx=<?php echo $shoplist['idx'];?>"><?php echo $shoplist['pro_name'];?></a></div>
							<div class="pro_price"><?php echo $shoplist['price'];?></div>
						</div>
					<?php } ?>
					<h3 id="tit1"><a name="커피">커피/티/와인</a></h3>
					<div id="shop_list">
						<?php
							$sql = mq("select * from slist3 order by idx desc");
							while($shoplist = $sql->fetch_array()){
						?>
						<div class="item">
							<div class="pro_img"><a href="./prodet3.php?idx=<?php echo $shoplist['idx'];?>"><img src="/shop/<?php echo $shoplist['pro_pic'];?>.jpg" alt="propic" title="propic" /></a></div>
							<div class="pro_nt"><a href="./prodet3.php?idx=<?php echo $shoplist['idx'];?>"><?php echo $shoplist['pro_name'];?></a></div>
							<div class="pro_price"><?php echo $shoplist['price'];?></div>
						</div>
					<?php } ?>
					<h3 id="tit1"><a name="컵">컵/잔/텀블러</a></h3>
					<div id="shop_list">
						<?php
							$sql = mq("select * from slist4 order by idx desc");
							while($shoplist = $sql->fetch_array()){
						?>
						<div class="item">
							<div class="pro_img"><a href="./prodet4.php?idx=<?php echo $shoplist['idx'];?>"><img src="/shop/<?php echo $shoplist['pro_pic'];?>.jpg" alt="propic" title="propic" /></a></div>
							<div class="pro_nt"><a href="./prodet4.php?idx=<?php echo $shoplist['idx'];?>"><?php echo $shoplist['pro_name'];?></a></div>
							<div class="pro_price"><?php echo $shoplist['price'];?></div>
						</div>
					<?php } ?>
					<h3 id="tit1"><a name="청소">청소/주방세제</a></h3>
					<div id="shop_list">
						<?php
							$sql = mq("select * from slist5 order by idx desc");
							while($shoplist = $sql->fetch_array()){
						?>
						<div class="item">
							<div class="pro_img"><a href="./prodet5.php?idx=<?php echo $shoplist['idx'];?>"><img src="/shop/<?php echo $shoplist['pro_pic'];?>.jpg" alt="propic" title="propic" /></a></div>
							<div class="pro_nt"><a href="./prodet5.php?idx=<?php echo $shoplist['idx'];?>"><?php echo $shoplist['pro_name'];?></a></div>
							<div class="pro_price"><?php echo $shoplist['price'];?></div>
						</div>
					<?php } ?>
					<h3 id="tit1"><a name="가구">가구</a></h3>
					<div id="shop_list">
						<?php
							$sql = mq("select * from slist6 order by idx desc");
							while($shoplist = $sql->fetch_array()){
						?>
						<div class="item">
							<div class="pro_img"><a href="./prodet6.php?idx=<?php echo $shoplist['idx'];?>"><img src="/shop/<?php echo $shoplist['pro_pic'];?>.jpg" alt="propic" title="propic" /></a></div>
							<div class="pro_nt"><a href="./prodet6.php?idx=<?php echo $shoplist['idx'];?>"><?php echo $shoplist['pro_name'];?></a></div>
							<div class="pro_price"><?php echo $shoplist['price'];?></div>
						</div>
					<?php } ?>
					<h3 id="tit1"><a name="건강">건강/의료용품</a></h3>
					<div id="shop_list">
						<?php
							$sql = mq("select * from slist7 order by idx desc");
							while($shoplist = $sql->fetch_array()){
						?>
						<div class="item">
							<div class="pro_img"><a href="./prodet7.php?idx=<?php echo $shoplist['idx'];?>"><img src="/shop/<?php echo $shoplist['pro_pic'];?>.jpg" alt="propic" title="propic" /></a></div>
							<div class="pro_nt"><a href="./prodet7.php?idx=<?php echo $shoplist['idx'];?>"><?php echo $shoplist['pro_name'];?></a></div>
							<div class="pro_price"><?php echo $shoplist['price'];?></div>
						</div>
					<?php } ?>
					<h3 id="tit1"><a name="욕실용품">욕실용품</a></h3>
					<div id="shop_list">
						<?php
							$sql = mq("select * from slist8 order by idx desc");
							while($shoplist = $sql->fetch_array()){
						?>
						<div class="item">
							<div class="pro_img"><a href="./prodet8.php?idx=<?php echo $shoplist['idx'];?>"><img src="/shop/<?php echo $shoplist['pro_pic'];?>.jpg" alt="propic" title="propic" /></a></div>
							<div class="pro_nt"><a href="./prodet8.php?idx=<?php echo $shoplist['idx'];?>"><?php echo $shoplist['pro_name'];?></a></div>
							<div class="pro_price"><?php echo $shoplist['price'];?></div>
						</div>
					<?php } ?>
					<h3 id="tit1"><a name="홈데코">홈데코</a></h3>
					<div id="shop_list">
						<?php
							$sql = mq("select * from slist9 order by idx desc");
							while($shoplist = $sql->fetch_array()){
						?>
						<div class="item">
							<div class="pro_img"><a href="./prodet9.php?idx=<?php echo $shoplist['idx'];?>"><img src="/shop/<?php echo $shoplist['pro_pic'];?>.jpg" alt="propic" title="propic" /></a></div>
							<div class="pro_nt"><a href="./prodet9.php?idx=<?php echo $shoplist['idx'];?>"><?php echo $shoplist['pro_name'];?></a></div>
							<div class="pro_price"><?php echo $shoplist['price'];?></div>
						</div>
					<?php } ?>
					<h3 id="tit1"><a name="침구">침구</a></h3>
					<div id="shop_list">
						<?php
							$sql = mq("select * from slist10 order by idx desc");
							while($shoplist = $sql->fetch_array()){
						?>
						<div class="item">
							<div class="pro_img"><a href="./prodet10.php?idx=<?php echo $shoplist['idx'];?>"><img src="/shop/<?php echo $shoplist['pro_pic'];?>.jpg" alt="propic" title="propic" /></a></div>
							<div class="pro_nt"><a href="./prodet10.php?idx=<?php echo $shoplist['idx'];?>"><?php echo $shoplist['pro_name'];?></a></div>
							<div class="pro_price"><?php echo $shoplist['price'];?></div>
						</div>
					<?php } ?>
					
				</div><!---shop_list end--->
			
			</div><!---main_in end--->
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
	
	<a style="display:scroll;position:fixed;bottom:30px;left:30px;font-size:30px;" href="#" title="Top">TOP</a>
</body>
</html>