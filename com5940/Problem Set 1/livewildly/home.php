<?php get_header(); ?>

    <section class="home-slider owl-carousel img" style="background-image: url(<?php bloginfo('template_url'); ?>/images/bgimg.jpg);">

      <div class="slider-item" style="background-image: url(<?php bloginfo('template_url'); ?>/images/bg.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <span class="subheading">Live Wildly in Hong Kong</span>
              <h1>香港野生登山指南 </h1>
              <p class="mb-4 mb-md-5">香港，不仅是城市，也是山与海塑造的公园。跟野生指南一起探索自然香港！<br></p>
              <p><a href="/cool/" class="btn btn-primary p-3 px-xl-4 py-xl-3">登山画册</a> <a href="/detail-info/" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">路线指南</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 ftco-animate">
            	<span class="subheading">Destination</span>
              <h1 class="mb-4">@菠萝山</h1>
              <p class="mb-4 mb-md-5">
                菠萝山丘岭地带有“港版大峡谷”之称。走上菠萝山看日落，金黄的，紫红的晚霞在欺负的山石上，保证你用手机也可以拍出超美的照片！

            </p>
              <p><a href="/detail-info/" class="btn btn-primary p-3 px-xl-4 py-xl-3">报名行程！</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="<?php bloginfo('template_url'); ?>/images/por.png" class="img-fluid" alt="菠蘿山">
            </div>
          </div>
        </div>
      </div>
            <div class="slider-item">
            	<div class="overlay"></div>
              <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                  <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
                  	<span class="subheading">Destination</span>
                    <h1 class="mb-4">@飞鹅山</h1>
                    <p class="mb-4 mb-md-5">在山顶，可俯瞰东九龙全景，叧一方起伏连绵的九龙群山如狮子山及大老山也可尽收眼底。</p>
                    <p><a href="/activity/" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">报名行程！</a></p>
                  </div>
                  <div class="col-md-6 ftco-animate">
                  	<img src="<?php bloginfo('template_url'); ?>/images/kowloonpeak.png" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>


    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>+852 5372 6760</h3>
	    						<p>需要帮助？请联系我！</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>Live wildly</h3>
	    						<p>如果你也是热爱户外的“野生派”，加入我们！</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a href="https://www.weibo.com/2161161972/profile?topnav=1&wvr=6&is_all=1"><span class="icon-weibo"></span></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/yuchen.6liu"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/heyuksan/"><span class="icon-instagram"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>


    <section class="ftco-section" id="cantmiss">
          <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
              <div class="col-md-7 heading-section ftco-animate text-center">
                <h2>Live Wildly 精选路线</h2>
                <p> 不论你爱高楼森林，还是自然美景，在这些独特路线中，你都能品尝到。<span>以下为Blog预览</span></p>
              </div>
            </div>
            <div class="row d-flex">
			
              <?php
				
				$args = array(
				'post_type'=> 'post',
					'posts_per_page' => '3',	
				);
				$wp_query = new WP_Query($args);
              if ($wp_query -> have_posts()):while ($wp_query -> have_posts()): the_post();

              ?>

              <div class="col-md-4 d-flex ftco-animate">
              	<div class="blog-entry align-self-stretch">
                 <div class="block-20" >
					 <?php the_post_thumbnail(array(400,270)); ?>					
					</div>        
                  <div class="text py-4 d-block"> 
					   <h3 class="heading mt-2">
                    	<a href="<?php the_permalink(); ?>">
					 <?php the_title(); ?>
							</a>
						   </h3>
                    <p><?php the_excerpt(); ?></p>
					  <p class="meta">
						  Posted on <?php the_time('F j, Y') ?>
					  </p>
							
                  </div>
      
                </div>
              </div>
            <?php endwhile; endif;?>
                    
            </div>
            <div class="text-center ftco-animate">
            <p><a href="/detail-info/" class="btn btn-primary p-3 px-xl-4 py-xl-3">热门路线参考</a> <a href="/cool/" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">登山图册</a></p>
          </div>
          </div>
        </section>

        <section class="ftco-gallery">
        	<div class="container-wrap">
        		<div class="row no-gutters">
    					<div class="col-md-3 ftco-animate">
    						<a href="/cool/" class="gallery img d-flex align-items-center" style="background-image: url(<?php bloginfo('template_url'); ?>/images/grassland.jpg);">
    							<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
    						</a>
    					</div>
    					<div class="col-md-3 ftco-animate">
    						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(<?php bloginfo('template_url'); ?>/images/porlos.jpg);">
    							<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
    						</a>
    					</div>
    					<div class="col-md-3 ftco-animate">
							<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(<?php bloginfo('template_url'); ?>/images/db.jpg);">
    							<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
    						</a>
    					</div>
					<div class="col-md-3 ftco-animate">
					<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(<?php bloginfo('template_url'); ?>/images/nsunsetpeak.jpg);">
    							<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
    						</a>
    					</div>
            </div>
        	</div>
        </section>


        		<section class="ftco-section">
            	<div class="container-wrap">
                  <div class="container">
                    <div class="row justify-content-center mb-5 pb-3">
                      <div class="col-md-7 heading-section ftco-animate text-center">
                        <h2 class="mb-4">Hike & Shoot | 登山图册</h2>
                        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                        <p class="mt-5"> Instagram登山最佳拍照精选。期待你与我们分享照片 </p>
                      </div>
                    </div>
                    <div class="row d-flex">
                      <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                          <a href="blog-single.html" class="block-20" style="background-image: url('<?php bloginfo('template_url'); ?>/images/sunsetpeak2.jpg');">
                          </a>
                          <div class="text py-4 d-block">
                            <div class="meta">
                              <div><a href="https://www.instagram.com/p/BqCZEXpHUv-/">@hana.jenyll</a></div>
                              <div><a href="#"></a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="">大東山 Sunset Peak</a></h3>
                            <p>香港的11月，天氣漸涼，大東山成為一片芒草的海洋，這個季節登山，不僅可以看見秋高氣爽時節的日落，更加能在芒草當中尋找浪漫</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                          <a href="blog-single.html" class="block-20" style="background-image: url('<?php bloginfo('template_url'); ?>/images/lionrockpic.jpg');">
                          </a>
                          <div class="text py-4 d-block">
                            <div class="meta">
                              <div><a href="https://www.instagram.com/p/BqqU-lJA_uw/">@heathercheung</a></div>
                              <div><a href="#"></a></div>
                              <div><a href="#" class="meta-chat"><span class="icon-admin"></span></a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">獅子山 Lion Rock</a></h3>
                            <p>獅子山位於沙田，能將城市的美景一併收入眼底，最佳的拍照方式就是從山頂俯視拍攝，讓九龍在你的腳下。</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                          <a href="blog-single.html" class="block-20" style="background-image: url('<?php bloginfo('template_url'); ?>/images/porlo.jpg');">
                          </a>
                          <div class="text py-4 d-block">
                            <div class="meta">
                              <div><a href="https://www.instagram.com/p/Bp7LND3AXnz/">@christy.kwok</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">菠蘿山 Por Lo Shan</a></h3>
                            <p>菠蘿山被稱為“香港大峽谷”，雖然僅有121米的海拔，但是卻因獨特的景觀吸引大家拍照打卡，只要找到奇觀，又怎麼會擔心照片不美？</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                          <a href="blog-single.html" class="block-20" style="background-image: url('<?php bloginfo('template_url'); ?>/images/hezui.jpg');">
                          </a>
                          <div class="text py-4 d-block">
                            <div class="meta">
                              <div><a href="https://www.instagram.com/p/Bnupa51Brsm/">@ry66n</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">鹤咀山 D'aguilar Peak</a></h3>
                            <p>从鹤咀山下山，到鹤咀海滩，享受登高，再吹吹海风，并且能够留下美丽的照片回忆。</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                          <a href="blog-single.html" class="block-20" style="background-image: url('<?php bloginfo('template_url'); ?>/images/dragon.jpg');">
                          </a>
                          <div class="text py-4 d-block">
                            <div class="meta">
                              <div><a href="https://www.instagram.com/p/BPdDxRPhtyF/">@yeohjo</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">龍脊 Dragon's Back</a></h3>
                            <p>龍脊盤據香港島石澳，傲視藍塘海峽。其山脊高低起伏，如飛龍騰雲，故稱龍脊。站在山頂向海拍攝，仿佛在龍的脊背上哦！</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                          <a href="blog-single.html" class="block-20" style="background-image: url('<?php bloginfo('template_url'); ?>/images/thepeak.jpg');">
                          </a>
                          <div class="text py-4 d-block">
                            <div class="meta">
                              <div><a href="https://www.instagram.com/p/BqrSKnMFKrK/">@thetrravellerme</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">太平山 The Victoria Peak</a></h3>
                            <p>登山走上太平山，俯瞰维多利亚港，获得不一样的体验与风景</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                          <a href="blog-single.html" class="block-20" style="background-image: url('<?php bloginfo('template_url'); ?>/images/taimo.jpg');">
                          </a>
                          <div class="text py-4 d-block">
                            <div class="meta">
                              <div><a href="https://www.instagram.com/p/Bp13RXRDnpG/">@milena.penacchio</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">大帽山 Tai Mo Shan</a></h3>
                            <p>後山徑漸轉緩和，蜿蜒而上，舉頭仰望翠綠的山坡，當中留下昔日的梯田橫紋，皆成歷史印記，从此可以拍摄到开阔的房子和平原。</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                          <a href="blog-single.html" class="block-20" style="background-image: url('<?php bloginfo('template_url'); ?>/images/potoi.jpg');">
                          </a>
                          <div class="text py-4 d-block">
                            <div class="meta">
                              <div><a href="https://www.instagram.com/p/BQPhHTzDmQi/">@wwwwincy</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">蒲台山灯塔 The Lighthouse of Po Toi Island</a></h3>
                            <p>這裡是香港的南極，登位於蒲台島南端山上的燈塔，面向海天一色的南部景色。</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                          <a href="blog-single.html" class="block-20" style="background-image: url('<?php bloginfo('template_url'); ?>/images/lautau.jpg');">
                          </a>
                          <div class="text py-4 d-block">
                            <div class="meta">
                              <div><a href="https://www.instagram.com/p/BqkEeaegxYT/">@sanpengwang9</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">凤凰山 Lantau Peak</a></h3>
                            <p>在峰頂俯瞰四方，可以看见飞机在水平线下方升降。除远眺東涌和机场的全景外，如果天气晴朗，还能隐约看到远处的屯门及青山一带。另一方，阳光照耀下，石壁水塘反射如镜，十分耀眼。山顶常有云雾。</p>
                          </div>
                        </div>
                      </div>
                    </div>
            </section>

<?php get_footer(); ?>
