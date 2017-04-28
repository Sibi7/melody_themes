<?php if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>

<section class="contacts">

    <div class="container">

        <div class="about__wrapper">

            <div class="about__wrapper__title">
                <h1 class="about__wrapper__title-h1"><?= $atts['title']; ?></h1>
            </div>

            <div class="about__wrapper__text">

                <p>
                    <?= $atts['description']; ?>
                </p>

            </div>

        </div>

        <div class="about__block">

            <div class="about__block__item">

                <div class="about__block__item-block-left"></div>
                <div class="about__block__item-block-left"></div>

            </div>

            <div class="about__block__item1">

                <div class="about__block__item1-block-middle"></div>

            </div>
            <div class="about__block__item1">

                <div class="about__block__item1-block-right"></div>
                <div class="about__block__item1-block-right"></div>

            </div>

        </div>

    </div>

</section>