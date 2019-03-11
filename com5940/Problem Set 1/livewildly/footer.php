<footer class="ftco-footer ftco-section img">
  <div class="overlay"></div>
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
         <div class="ftco-footer-widget mb-4 ml-md-4">
           <h2 class="ftco-heading-2">现在出发>></h2>
           <ul class="list-unstyled">
             <li><a href="#" class="btn btn-white btn-outline-white p-3 py-2 d-block">回到顶部</a></li>
             <li><a href="/cool/" class="btn btn-white btn-outline-white p-3 py-2 d-block">查看路线指南</a></li>
			 <li><a href="/detail-info/" class="btn btn-white btn-outline-white p-3 py-2 d-block">路线详情</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Me</h2>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(<?php bloginfo('template_url'); ?>/images/gannan.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="https://www.instagram.com/hiyuchen/">Hi！It's Yuchen here.<br>欢迎来到我的网站，让“野生”指南带领你的旅行足迹走向每个独特的户外世界。</a></h3>
              <div class="meta">
                <div><a href="https://www.instagram.com/hiyuchen/"><span class="icon-person"></span>Yuchen</a></div>
              </div>
            </div>
          </div>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="https://www.facebook.com/yuchen.6liu"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="https://www.instagram.com/hiyuchen/"><span class="icon-instagram"></span></a></li>
            <li class="ftco-animate"><a href="https://www.weibo.com/2161161972/profile?topnav=1&wvr=6"><span class="icon-weibo"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">About</h2>
          <p>野生，为我们的生活加一点自然的色彩，户外的狂野。走出你的房间，在旅居的城市体验狂野。</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">需要协助?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon icon-map-marker"></span><span class="text">Live wildly, Shatin, HK</span></li>
              <li><span class="icon icon-phone"></span><span class="text">+852 5372 0000</span></li>
              <li><span class="icon icon-envelope"></span><span class="text">yucliu@163.com</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.stellar.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/aos.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.animateNumber.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap-datepicker.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.timepicker.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?php bloginfo('template_url'); ?>/js/google-map.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script>
  $(document).ready(function(){
        $('a[href^="#"]').on('click',function (e) {
            e.preventDefault();

            var target = this.hash,
            $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 400, 'swing', function () {
                window.location.hash = target;
            });
        });
  });
  </script>
<?php wp_footer(); ?>
</body>
</html>
