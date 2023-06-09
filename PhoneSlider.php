/********* How It Work **********/
function hows_works($atts){
	$postid = get_the_ID();
	extract(shortcode_atts(array( 
		"postid" => get_the_ID()
		), $atts));
		$ret=""; ?>

		<?php
			$currentpostid= get_the_ID();
			$currentlanguage= get_field('language',$currentpostid);
			if ($currentlanguage['value'] == "cn"){
				$applytoday = "立即注册！";
				
			} else if ($currentlanguage['value'] == "ms"){
				$applytoday = "Daftar Sekarang!";
				
			} else if ($currentlanguage['value'] == "th"){
				$applytoday = "Apply Today!";
				
			} else {
				$applytoday = "Apply Today!";
			}
		?>


		<?php 
			$upload_dir = wp_get_upload_dir(); 
		?>
<!-- 		<img class="el_spear left pl-4" src="<?//php echo $upload_dir['baseurl']; ?>/2021/08/el_spear.png" alt="Element Spear"> -->

<div class="container">
	<div class="row howitworks_owl"> 

		<!--order-sm-last order-first -->
		<div class="col-sm-1">
			<div class="col numberContainer d-none d-sm-block" role="group" aria-label="Justified button group">
				<div>
					<div id="stpOne" data-slide="0" class="numberBtn stepOne phnactive">
						<strong class="num">01</strong>
						<!-- 							<p><?//php the_field('content_1'); ?></p> -->
					</div>
					<div data-slide="1" class="numberBtn stepTwo">
						<strong class="num">02</strong>
						<!-- 							<p><?//php the_field('content_2'); ?></p> -->
					</div>
					<div data-slide="2" class="numberBtn stepThree">
						<strong class="num">03</strong>
						<!-- 							<p><?//php the_field('content_3'); ?></p> -->
					</div>
					<div data-slide="3" class="numberBtn stepFour">
						<strong class="num">04</strong>
						<!-- 							<p><?//php the_field('content_4'); ?></p> -->
					</div>
					<div data-slide="4" class="numberBtn stepFive">
						<strong class="num">05</strong>
						<!-- 							<p><?//php the_field('content_5'); ?></p> -->
					</div>
				</div>
			</div>
		</div>		

		<div class="col-sm-5 howitwork_img">
			<h2 class="hows_title d-block d-sm-none text-center"><?php the_field('hiw_title'); ?></h2>
			<div class="owl-carousel how_carousel owl-theme" style="display:block;">
				<div class="item phScrnItem phnactive" data-url="stepOne"> 
					<img src="<?php the_field('1_img'); ?>" alt="Screen One"> 
				</div>
				<div class="item phScrnItem" data-url="stepTwo">  
					<img src="<?php the_field('2_img'); ?>" alt="Screen Two"> 
				</div>
				<div class="item phScrnItem" data-url="stepThree">  
					<img src="<?php the_field('3_img'); ?>" alt="Screen Three"> 
				</div>
				<div class="item phScrnItem" data-url="stepFour">  
					<img src="<?php the_field('4_img'); ?>" alt="Screen Four"> 
				</div>
				<div class="item phScrnItem" data-url="stepFive">  
					<img src="<?php the_field('5_img'); ?>" alt="Screen Five"> 
				</div>
			</div>
		</div>
		<div class="col-sm-6 numbers_bx">
<!-- 			<div class="active_bar"></div> -->
			<h2 class="hows_title d-none d-sm-block"><?php the_field('hiw_title'); ?></h2>
			<div class="hows_emp_spc"></div>
			<div class="numcontainer text-white">
				<div data-slide="0" class="numberbx stepOne phnactive">
					<p><?php the_field('title_1'); ?></p>
					<h3><?php the_field('content_1'); ?></h3>
				</div>
				<div data-slide="1" class="numberbx stepTwo">  
					<p><?php the_field('title_2'); ?></p>
					<h3><?php the_field('content_2'); ?></h3>
				</div>
				<div data-slide="2" class="numberbx stepThree"> 
					<p><?php the_field('title_3'); ?></p>
					<h3><?php the_field('content_3'); ?></h3>
				</div>
				<div data-slide="3" class="numberbx stepFour">  
					<p><?php the_field('title_4'); ?></p>
					<h3><?php the_field('content_4'); ?></h3>
				</div>
				<div data-slide="4" class="numberbx stepFive">  
					<p><?php the_field('title_5'); ?></p>
					<h3><?php the_field('content_5'); ?></h3>
				</div>
			</div>
			<a href="#"><div class="btn_apply text-white text-center mt-5"><?php echo $applytoday; ?></div></a>
			
			<div class="col numberContainer d-block d-sm-none" role="group" aria-label="Justified button group">
				<div>
					<div id="stpOne" data-slide="0" class="numberBtn stepOne phnactive">
						<strong class="num">01</strong>
						<!-- 							<p><?//php the_field('content_1'); ?></p> -->
					</div>
					<div data-slide="1" class="numberBtn stepTwo">
						<strong class="num">02</strong>
						<!-- 							<p><?//php the_field('content_2'); ?></p> -->
					</div>
					<div data-slide="2" class="numberBtn stepThree">
						<strong class="num">03</strong>
						<!-- 							<p><?//php the_field('content_3'); ?></p> -->
					</div>
					<div data-slide="3" class="numberBtn stepFour">
						<strong class="num">04</strong>
						<!-- 							<p><?//php the_field('content_4'); ?></p> -->
					</div>
					<div data-slide="4" class="numberBtn stepFive">
						<strong class="num">05</strong>
						<!-- 							<p><?//php the_field('content_5'); ?></p> -->
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>


<?php
	return $ret;
}
add_shortcode('hows_works','hows_works');
/*********End of How It Work **********/