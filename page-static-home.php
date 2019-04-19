<?php /* Template Name: Static Homepage */ ?>

<?php get_header(); ?>

<?php include_once("components/header.php") ?>
<?php include_once("components/masthead.php") ?>

<div class="section section--featured">
    <div class="section__content">

        <div class="featured">
            <div class="featured__offer">
                <p>Boiler servicing only</p>
                <p class="featured__price">&pound;50</p>
            </div>
            
            <div class="featured__description">
                <p>Flexible Heating Services are proud to serve the areas of Southampton, Totton, Romsey, Chandlers Ford, Hythe and the New Forest.</p>
            </div>
            <picture class="featured__image">
                <source srcset="http://flexibleheating.co.uk/wp-content/uploads/2019/04/flexiheat-featured-image-v2.jpg"
            media="(min-width: 768px)">
                <img src="http://flexibleheating.co.uk/wp-content/uploads/2019/04/flexiheat-featured-image-v2.jpg" />
            </picture>
        </div>
        
    </div>
</div>

<div class="section section--offers">
    <div class="section__content">
        <div>
            <p>Boiler &amp; heating repairs <strong>from &pound;60</strong></p>
        </div>
        <div>
            <p>Conventional boilers <strong>from &pound;1,299</strong></p>
        </div>
        <div>
            <p>Combi boilers <strong>from &pound;1,599</strong></p>
        </div>
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