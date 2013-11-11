<!--<div class="bodymodule" id="frontbody">
  <div class="rotator">
    <img src="<?php echo(base_url()); ?>assets/img/banner/leader.png" class="rotatorimages">
    <a href="philosophy"><img src="<?php echo(base_url()); ?>assets/img/banner/philosophies.png" class="rotatorimages img-responsive"></a>
    <a href="recruitment"><img src="<?php echo(base_url()); ?>assets/img/banner/recruiting.png" class="rotatorimages img-responsive"></a>
    <a href="forums"><img src="<?php echo(base_url()); ?>assets/img/banner/forums.png" class="rotatorimages img-responsive"></a>
  </div>
</div>-->

<ul class="rslides">
  <li><img src="<?php echo(base_url()); ?>assets/img/banner/leader.png" class="rotatorimages"></li>
  <li><a href="philosophy"><img src="<?php echo(base_url()); ?>assets/img/banner/philosophies.png" class="e"></a></li>
  <li><a href="recruitment"><img src="<?php echo(base_url()); ?>assets/img/banner/recruiting.png" class=""></a></li>
  <li><a href="forums"><img src="<?php echo(base_url()); ?>assets/img/banner/forums.png" class=""></a></li>
</ul>

<div class="row highlights">
  <div class="col-sm-4">
    <div class="highlight_box" id="hlb1">
      <p class="hlb_title">Recruitment</p>
      <p class="hlb_body">Our application process is different. Learn more.<p>
      <img src="<?php echo(base_url()); ?>assets/img/hlb/recruitment.png" class="hlb_img">
    </div>
  </div>

  <div class="col-sm-4">
    <div class="highlight_box" id="hlb2">
      <p class="hlb_title">Progress</p>
      <p class="hlb_body">Our ranking on wowprogress.com<p>
      <img src="<?php echo(base_url()); ?>assets/img/hlb/guildbanner.png" class="hlb_img">
    </div>
  </div>

  <div class="col-sm-4">
    <div class="highlight_box" id="hlb3">
      <p class="hlb_title">Roster</p>
      <p class="hlb_body">Meet our team, find someone to talk to about us.<p>
      <img src="<?php echo(base_url()); ?>assets/img/hlb/portrait.png" class="hlb_img">
    </div>
  </div>
</div>

<div class="news">
  <div class="newsarticle">
    <span class="news_headline">Title</span>
    <span class="news_postedby">Posted By poster</span>
    <div class="news_body">
      News Body
    </div>
  </div>
</div>


<script type="text/javascript">
$(document).ready(function() {
    /*$('.rotator')
      .cycle({
      fx: 'fade',
      delay: -2000,  
    });*/
  $(".rslides").responsiveSlides({
    timeout: 3000

  });
    
    $('.highlight_box').click(function(){
  if($(this).attr("id") == "hlb1")
    window.location = "recruitment";
  if($(this).attr("id") == "hlb2")
    window.location = "http://www.wowprogress.com/guild/us/doomhammer/Uprising"
  if($(this).attr("id") == "hlb3")
    window.location = "roster";
  
    });
});
</script>