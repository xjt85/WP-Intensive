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
    <div class="row">
        <div class="col-md-12">
            <div class="contact__header-wrapper">
                <h2 class="contact__h2">contact</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="contact__descr">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias sequi libero quis fugit, cumque eveniet excepturi? Deleniti quo tempora sapiente eos cumque rerum at? Culpa molestias ex rem eius atque praesentium optio placeat repellendus mollitia doloremque laborum sint amet, natus necessitatibus ad! Laudantium excepturi et dolores corporis possimus? Quasi reprehenderit, in quo et possimus est odit commodi. Odit nisi quasi ut molestiae obcaecati, fugit quae eligendi adipisci voluptatibus sunt magnam eaque rem qui incidunt doloremque ad tempora perferendis doloribus fugiat, deleniti consequatur maxime beatae sequi animi. Officiis illo quis voluptatum minus beatae assumenda accusamus magni iste, eveniet non atque temporibus!
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="contact-data-name contact-phone">Phone</div>
                    <div class="contact-value">88003461079</div>
                </div>
                <div class="col-md-5">
                    <div class="contact-data-name contact-address">Address</div>
                    <div class="contact-value">France, Nancy, Rue de Serre, 15</div>
                </div>
                <div class="col-md-4">
                    <div class="contact-data-name contact-email">E-Mail</div>
                    <div class="contact-value">xjt@mail.ru</div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="contact-form">
                <h3 class="contact-form__h3">contact form</h3>
                <input type="text" class="contact-form__input" placeholder="Name" required>
                <input type="email" class="contact-form__input" placeholder="E-mail" required>
                <input type="text" class="contact-form__input" placeholder="Message" required>
                <button class="button button_form-send">Отправить</button>
            </div>
        </div>
    </div>
</div>
</section>
<?php
endwhile; // End of the loop.
?>

<?php get_footer(); ?>
