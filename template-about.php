<?php
/*
Template name: About template
 */
get_header();

?>

<section class="content about">

<div class="container">
    <div class="tcw-wrap">
    <div class="content-title">About</div>
    <?php echo get_breadcrumbs(); ?>
    </div>


</div>
</section>
<section class="video">
<div class="container">
<div class="video-wrap">
    <a href="http://www.youtube.com/watch?v=BV9RmznpqjY" class="prettyphoto" title="video" ><img src="<?php echo get_template_directory_uri(); ?>/img/vidio-img.png" alt="" /></a>
</div>
<div class="vid-text">
    <h3>Lorem Ipsum is simply dummy text of the
                                            <span>printing and typesetting industry</span>
    </h3>
    <div class="vid-desc">
        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the</p>
    </div>
    <div class="vid-desc no-margin">
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure</p>
    </div>
</div>
</div>
</section>
<section class="partner">
<div class="container">
<div class="partner-h">
    <h3>Partners</h3>
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slig</p>
</div>
<div class="logos">
    <a href="#" ><img src="<?php echo get_template_directory_uri(); ?>/img/walmart.png" alt="" /></a>
    <a href="#" ><img src="<?php echo get_template_directory_uri(); ?>/img/dell.png" alt="" /></a>
    <a href="#" ><img src="<?php echo get_template_directory_uri(); ?>/img/ebay.png" alt="" /></a>
    <a href="#" ><img src="<?php echo get_template_directory_uri(); ?>/img/argos.png" alt="" /></a>
    <a href="#" ><img src="<?php echo get_template_directory_uri(); ?>/img/walmart.png" alt="" /></a>
    <a href="#" ><img src="<?php echo get_template_directory_uri(); ?>/img/dell.png" alt="" /></a>
</div>
</div>
</section>
<section class="about-text">
<div class="container">
<div class="atw"><h3>Contrary to popular belief, Lorem Ipsum is not simply random text</h3></div>
<div class="a-row">
<div class="a-block">
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
</div>
<div class="a-block">
<img src="<?php echo get_template_directory_uri(); ?>/img/a-img.jpg" alt="" class="rounded" />
<script>
$(function($) {
    var allAccordions = $('.accordion div.data');
    var allAccordionItems = $('.accordion .accordion-item');
    $('.accordion > .accordion-item').click(function() {
        if($(this).hasClass('open'))
        {
            $(this).removeClass('open');
            $(this).next().slideUp("slow");
        }
    else
        {
            allAccordions.slideUp("slow");
            allAccordionItems.removeClass('open');
            $(this).addClass('open');
            $(this).next().slideDown("slow");
            return false;
        }
    });
});
</script>
    <div class="accordion">
<div class="accordion-item">
<div class="type"></div>
Lorem Ipsum passages, and more recently with desktop

</div>
<div class="data">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
</div>
<div class="accordion-item">
<div class="type"></div>
               There are many variations of passages of Lorem many
variations passages

   </div>
<div class="data">
     when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
</div>
<div class="accordion-item">
<div class="type"></div>
              Lorem Ipsum passages, and more recently with desktop

                                                           </div>
<div class="data">
     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
</div>
<div class="accordion-item">
<div class="type"></div>
Lorem Ipsum passages, and more recently with desktop

</div>
<div class="data">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
</div>
</div>
</div>
</div>
</div>
</section>
<section class="facilities">
<div class="container">
    <div class="f-block">
        <div class="f-air f-sprite"></div>
        <div class="f-text">
            <p class="f-title">Lorem Ipsum </p>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
        </div>
    </div>
    <div class="f-block">
        <div class="f-search f-sprite"></div>
        <div class="f-text">
            <p class="f-title">Lorem Ipsum </p>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
        </div>
    </div>
    <div class="f-block">
        <div class="f-glob f-sprite"></div>
        <div class="f-text">
            <p class="f-title">Lorem Ipsum </p>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
        </div>
    </div>
    <div class="f-block">
        <div class="f-loc f-sprite"></div>
        <div class="f-text">
            <p class="f-title">Lorem Ipsum </p>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
        </div>
    </div>
    <div class="f-block">
        <div class="f-bin f-sprite"></div>
        <div class="f-text">
            <p class="f-title">Lorem Ipsum </p>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
        </div>
    </div>
    <div class="f-block">
        <div class="f-photo f-sprite"></div>
        <div class="f-text">
            <p class="f-title">Lorem Ipsum </p>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
        </div>
    </div>
</div>

</section>
<section class="bottom">
<div class="container">
<div class="bottom-nav">
    <ul>
        <li><a href="#">Homepage</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Booking</a></li>
        <li><a href="tour.html">Tour</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Hot deals</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</div>
<div class="social">
    <a href="#" class="gp"><i class="fa fa-google-plus"></i></a>
    <a href="#" class="tw"><i class="fa fa-twitter"></i></a>
    <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
    <a href="#" class="ps"><i class="fa fa-pinterest"></i></a>
</div>
</div>
</section>

<?php get_footer();?>