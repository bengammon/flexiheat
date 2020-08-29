<?php /* Template Name: Static Homepage */ ?>

<?php get_header(); ?>

<?php include_once("components/masthead.php") ?>
<?php include_once("components/header.php") ?>

<div class="section section--hero">
    <div class="section__content">

        <h1>Boiler servicing only &pound;60</h1>
        
        <div class="site-info">
            <div class="google-rating">
                <ul class="list list--horizontal">
                    <li><img class="icon icon--star" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-star.svg" /></li>
                    <li><img class="icon icon--star" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-star.svg" /></li>
                    <li><img class="icon icon--star" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-star.svg" /></li>
                    <li><img class="icon icon--star" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-star.svg" /></li>
                    <li><img class="icon icon--star" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-star.svg" /></li>
                </ul>
                <p><strong>Google rating: 5.0</strong></p>
                <p><a href="">Read our Google reviews</a></p>
            </div>
            <div class="site-info__description">
                <p><em>Local gas registered engineer proudly serving Southampton, Totton, Romsey, Chandlers Ford, Hythe and the New Forest.</em></p>
            </div>
        </div>

        <ul class="list list--horizontal offers">
            <li><p>No call out fee <strong>Free quotations</strong></p></li>
            <li><p>Boiler &amp; heating repairs <strong>from &pound;60</strong></p></li>
            <li><p>Conventional boilers <strong>from &pound;1,299</strong></p></li>
            <li><p>Combi boilers <strong>from &pound;1,599</strong></p></li>
        </ul>

        <img class="icon icon--flame icon--flame-watermark" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-flame.svg" />
        
    </div>
    <div class="section__media">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/hero-1440w.jpg" media="(min-width: 376px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-1440w.jpg" />
        </picture>
    </div>
</div>

<section class="section section--homepage-content">
    <div class="section__content">
        
        <h2>About us</h2>

        <p>Flexible Heating Services is a family run business committed to offering a flexible, reliable and personal service with no hidden costs.</p>

        <p>We have the knowledge and expertise needed to ensure our customers receive the best service. We pride ourselves on being efficient, hard working, clean and tidy. Offering no call out fees and free no obligation quotations at competitive prices.</p>

        <p>Gas safe registered and fully insured, offering 12 month guarantee on parts and labour. We have an excellent reputation and are more than happy to provide references on request.</p>

        <p>Give us a call today for a free quotation or more information.</p>

        <h2>Services provided</h2>

        <ul class="list list--services list--double">
            <li>Free quotations</li>
            <li>Same day boiler breakdown service</li>
            <li>Boiler installation</li>
            <li>Boiler servicing and repair</li>
            <li>Central heating system cleanse</li>
            <li>Cylinders</li>
            <li>General plumbing</li>
            <li>Landlord certificates</li>
            <li>LPG</li>
            <li>Power flushing</li>
            <li>Radiators</li>
            <li>Showers</li>
            <li>Shower pumps</li>
            <li>Smart thermostats</li>
            <li>Unvented cylinders</li>
        </ul>
        
        <h2>A five star service</h2>
        
        <div class="card card--bio">
            <img src="http://flexibleheating.co.uk/wp-content/uploads/2019/01/michael-phillips-heating-engineer.jpg" alt="Michael Phillips - Heating Engineer, Totton" />
            <h3>Michael Phillips, Heating Engineer</h3>
            <p>Apprentice trained with 15 years experience in the industry. Fully qualified and gas safe registered (natural gas and LPG), unvented trained and registered</p>
        </div>

    </div>
    <div class="section__sidebar">

        <div class="section__reviews">

            <?php if ( is_active_sidebar( 'google_reviews' ) ) : ?>
            <section class="section section--reviews">
                <div class="section__content">
                    <?php dynamic_sidebar( 'google_reviews' ); ?>
                </div>
            </section>
            <?php endif; ?>

        </div>

    </div>
</section>

<?php get_footer(); ?>