<?php if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>

<section class="about">

        <div class="container">

            <div class="contacts__textblock">


                <h1 class="contacts__textblock-contacts"><?= $atts['title']; ?></h1>
                <p class="contacts__textblock-text">
                    <?= $atts['description']; ?>
                </p>
                <a href="#modal5" class="contacts__textblock-button open_modal">Заказать звонок</a>


            </div>


            <div class="contacts__mapblock">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2246.255880673518!2d37.597846238195494!3d55.736682930251234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54ba89bc825af%3A0x53f1d2029ce1360a!2z0JHQpiDQmtGA0YvQvNGB0LrQuNC5INC80L7RgdGC!5e0!3m2!1sru!2sua!4v1491415223011"></iframe>

            </div>

        </div>


</section>