<?php /* Template Name: Static Homepage */ ?>

<?php get_header(); ?>

<?php include_once("components/masthead.php") ?>
<?php include_once("components/header.php") ?>
<?php include_once("components/hero.php") ?>

<div class="layout layout--master">
        
    <h2 class="text--subheading content content--about-us-1">About us</h2>

    <p class="text--size-h2 content content--about-us-1">Flexible Heating Services is a family run business committed to offering a flexible, reliable and personal service with no hidden costs.</p>

    <p class="content content--about-us-3" >We have the knowledge and expertise needed to ensure our customers receive the best service. We pride ourselves on being efficient, hard working, clean and tidy. Offering no call out fees and free no obligation quotations at competitive prices.</p>

    <p class="content content--about-us-4">Gas safe registered and fully insured, offering 12 month guarantee on parts and labour. We have an excellent reputation and are more than happy to provide references on request.</p>

    <p class="content content--about-us-5">Give us a call today for a free quotation or more information.</p>

    <img class="content content--about-us-6" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-us-500w.jpg" />

</div>

<div class="layout layout--master">

    <h2 class="text--subheading content content--services-1">Services provided</h2>

    <ul class="list list--bullets content content--services-2">
        <li>Free quotations</li>
        <li>Same day boiler breakdown service</li>
        <li>Boiler installation</li>
        <li>Boiler servicing and repair</li>
        <li>Central heating system cleanse</li>
    </ul>

    <ul class="list list--bullets content content--services-3">
        <li>Cylinders</li>
        <li>General plumbing</li>
        <li>Landlord certificates</li>
        <li>LPG</li>
        <li>Power flushing</li>
    </ul>

    <ul class="list list--bullets content content--services-4">
        <li>Radiators</li>
        <li>Showers</li>
        <li>Shower pumps</li>
        <li>Smart thermostats</li>
        <li>Unvented cylinders</li>
    </ul>

</div>

<div class="layout layout--master">

    <div class="box box--behind content content--team-1">
        <h2 class="text--subheading">Your local heating expert</h2>
        <p class="text--size-h2 margin--bottom-none">Michael Phillips</p>
        <p class="text--size-h3 text--color-primary">Heating Engineer</p>
        <p>Apprentice trained with 15 years experience in the industry. Fully qualified and gas safe registered (natural gas and LPG), unvented trained and registered</p>
    </div>
    
    <div class="content content--team-2">
        <div class="box box--behind">
            <?php include("components/google-rating.php") ?>
        </div>
    </div>

    <img class="content content--team-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/team-1174w.jpg" />
    
</div>

<div class="layout layout--master">

    <div class="content content--prices-1">
        <h2 class="text--subheading">Prices</h2>
        <ul class="list list--prices">
            <li>
                <p>Booked appointments, 8am-6pm <small>Covers up to first hour. &pound;60 per hour thereafter</small></p>
                <p class="text--color-primary">&pound;70</p>
            </li>
            <li>
                <p>Boiler, heating and plumbing repairs</p>
                <p class="text--color-primary">from &pound;60</p>
            </li>
            <li>
                <p>Conventional boilers</p>
                <p class="text--color-primary">from &pound;1,299</p>
            </li>
            <li>
                <p>Combi boilers</p>
                <p class="text--color-primary">from &pound;1,599</p>
            </li>
            <li>
                <p>Gas/LPG boiler servicing</p>
                <p class="text--color-primary">&pound;60</p>
            </li>
            <li>
                <p>Combined Gas/LPG boiler servicing and landlord certificate</p>
                <p class="text--color-primary">&pound;80</p>
            </li>
        </ul>
    </div>

    <div class="content content--prices-2">
        <h2 class="text--subheading">Emergency call-outs</h2>
        <ul class="list list--prices">
            <li>
                <p>Monday to Friday, 7am-5pm</p>
                <p class="text--color-primary">&pound;80</p>
            </li>
            <li>
                <p>Monday to Friday, 5pm-11pm</p>
                <p class="text--color-primary">&pound;120</p>
            </li>
            <li>
                <p>Monday to Sunday, 11pm-7am</p>
                <p class="text--color-primary">&pound;240</p>
            </li>
            <li>
                <p>Saturday to Sunday, 7am-11pm</p>
                <p class="text--color-primary">&pound;120</p>
            </li>
        </ul>
    </div>

    

</div>

<?php get_footer(); ?>