<footer class="footer" id="footer">
		<p class="notosans footer-text">制作の依頼、ご相談お気軽にご連絡下さい。</p>

		<!--<p class="contact robot"><a href="mailto:ryomaaa0602@gmail.com">CONTACT</a></p>	-->
		<p class="button-container robot"><a href="<?php echo home_url('/contact'); ?>" class="button button-footer">CONTACT</a></p>
	</footer>
<?php wp_footer(); ?>



<!--スライダー-->
<?php if ( is_front_page() ||  is_home() ) : ?>
<script>
  const swiper = new Swiper('.swiper', {
    loop: true,
    slidesPerView: 3,
    speed: 6000,
    allowTouchMove: false, // スワイプ無効
    autoplay: {
      delay: 0, // 途切れなくループ
    },
});
</script>
<style>
  .swiper-wrapper {
  transition-timing-function: linear;
}
  .swiper-slide img {
    height: auto;
    width: 100%;
  }
</style>
<?php endif; ?>
<script>
	jQuery(function($){
	$(function(){
  $('a[href^="#"]').click(function(){
    var speed = 400;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});
});</script>

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script>
       window.sr = ScrollReveal({ reset: false ,mobile: true});
       sr.reveal( '.work-box', { origin: 'bottom' , distance: '50%', duration: 500 , scale: 1.0, delay :200 ,opacity: 0.5,});
       sr.reveal( '.ttl', { origin: 'bottom' , distance: '50%', duration: 500 , scale: 1.0, delay :200 ,opacity: 0.5,});
	sr.reveal( '.mainvisual-ttl', { origin: 'left' , distance: '50%', duration: 500 , scale: 1.0, delay :200 ,opacity: 0.5,});
	sr.reveal( '.mainvisual-text', { origin: 'left' , distance: '50%', duration: 500 , scale: 1.0, delay :400 ,opacity: 0.5,});
	sr.reveal( '.blog-content', { origin: 'bottom' , distance: '50%', duration: 500 , scale: 1.0, delay :200 ,opacity: 0.5,});
	sr.reveal( '.skill-content', { origin: 'bottom' , distance: '50%', duration: 500 , scale: 1.0, delay :200 ,opacity: 0.5,});
	sr.reveal( '.button-container', { origin: 'bottom' , distance: '50%', duration: 500 , scale: 1.0, delay :200 ,opacity: 0.5,});
		sr.reveal( '.blog-archive-sidebar-content', { origin: 'bottom' , distance: '0', duration: 0 , scale: 1.0, delay :0 ,opacity: 1,});

</script>

<!--ローディング
<script>
 $(function() {
 var h = $(window).height();
  $('#loading__wrapper').css('display','none');
  $('#is-loading ,#loading').height(h).css('display','block');
 });

 $(window).load(function () {
  $('#is-loading').delay(900).fadeOut(800);
  $('#loading').delay(600).fadeOut(300);
  $('#loading__wrapper').css('display', 'block');
 });


 $(function(){
  setTimeout('stopload()',10000);
  });

  function stopload(){
   $('#loading__wrapper').css('display','block');
   $('#is-loading').delay(900).fadeOut(800);
   $('#loading').delay(600).fadeOut(300);
 }
</script>
-->
</body>
</html>
