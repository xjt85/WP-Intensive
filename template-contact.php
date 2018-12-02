<?php
/*
Template name: contact template
*/
get_header();
?>

<section class="s-contact">
<?php
    while ( have_posts() ) :
    		the_post();
?>
<div class="container">
    <div class="contact__header-wrapper">
        <div class="row">
            <div class="col-md-8">
                <h2 class="contact__h2"><?php the_title(); ?></h2>
            </div>
            <div class="col-md-4">
                <?php get_breadcrumbs(); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
                <div class="contact__descr">
                   <?php the_content(); ?>
                </div>
            <div class="row">
                <div class="col-md-3">
                    <?php if(get_post_meta($post->ID,'ale_phone',true)) { ?>
                    <div class="contact-data-name contact-phone">Phone</div>
                        <div class="contact-value"><?php echo esc_attr(get_post_meta($post->ID,'ale_phone',true)); ?></div>
                    <?php } ?>
                </div>
                <div class="col-md-5">
                    <?php if(get_post_meta($post->ID,'ale_address',true)) { ?>
                    <div class="contact-data-name contact-address">Address</div>
                        <div class="contact-value"><?php echo esc_attr(get_post_meta($post->ID,'ale_address',true)); ?></div>
                    <?php } ?>
                </div>
                <div class="col-md-4">
                    <?php if(get_post_meta($post->ID,'ale_email',true)) { ?>
                    <div class="contact-data-name contact-email">E-Mail</div>
                        <div class="contact-value"><?php echo esc_attr(get_post_meta($post->ID,'ale_email',true)); ?></div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <?php
                $form = get_post_meta($post->ID, 'ale_formcode', true);
                echo do_shortcode($form);
            ?>
            <!-- <form class="contact-form">
                <h3 class="contact-form__h3">contact form</h3>
                <input type="text" class="contact-form__input" placeholder="Name" required>
                <input type="email" class="contact-form__input" placeholder="E-mail" required>
                <input type="text" class="contact-form__input" placeholder="Message" required>
                <button class="button button_form-send">Отправить</button>
            </form> -->
        </div>
    </div>
</div>
<?php
    endwhile; // End of the loop.
?>
</section>

<?php get_footer(); ?>
