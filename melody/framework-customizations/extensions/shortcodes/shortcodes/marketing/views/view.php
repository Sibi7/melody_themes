<?php if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
//fw_print($atts);
?>

<section class="marketing">


    <div class="container">

        <nav class="marketing__nav">
            <ul class="tabs">
                <?php foreach ($atts['services'] as $key => $tab) : ?>
                    <li><a href="#tab<?= $key + 1; ?>"
                           class="<?= $key == 0 ? 'active' : false; ?>"><?= $tab['title']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>


    <?php foreach ($atts['services'] as $key => $tab) : ?>
        <div id="tab<?= $key + 1; ?>" class="tab_content ">

            <div class="container">
                <div class="marketing__content">

                    <div class="marketing__content_wrap">

                        <div id="tab<?= $key + 1; ?>1" class="tab_content4">

                            <?php foreach ($tab['photos'] as $photo) : ?>
                                <div class="marketing__content_wrap-item">
                                    <a href="<?= $photo['url']; ?>" data-lightbox="image-<?= $key + 1; ?>">
                                        <img src="<?= $photo['url']; ?>" alt="">
                                    </a>
                                </div>
                            <?php endforeach; ?>

                        </div>

                        <div id="tab<?= $key + 1; ?>2" class="tab_content4">
                            <?php foreach ($tab['videos'] as $video) : ?>
                                <div class="marketing__content_wrap-item">
                                    <iframe src="<?= $video; ?>"></iframe>
                                </div>
                            <?php endforeach; ?>

                        </div>

                        <ul class="tabs4">

                            <li>
                                <a href="#tab<?= $key + 1; ?>1" class="button">
                                    Фото
                                </a>
                            </li>
                            <li>
                                <a href="#tab<?= $key + 1; ?>2" class="button">
                                    Видео
                                </a>
                            </li>

                        </ul>

                    </div>


                </div>
                <div class="marketing__content">

                    <div class="marketing__content__text">

                        <h1><?= $tab['title']; ?></h1>

                        <p><?= $tab['description']; ?></p>

                        <a href="#moda<?= $key + 1; ?>" class="open_modal">
                            Смотреть пакеты
                        </a><!-- ссылкa с href="#modal1", oткрoет oкнo с  id = modal1-->


                    </div>

                </div>
            </div>
            <div id="modal<?= $key + 1; ?>" class="modal_div"> <!-- скрытый див с уникaльным id = modal1 -->
                <span class="modal_close">X</span>
                <div class="container">

                    <div class="wrapper-modal">
                        <?php foreach ($tab['packages'] as $package) : ?>

                            <div class="wrapper-hover">
                                <div class="wrapper-item">
                                    <div class="wrapper-title">
                                        <?= $title; ?> <br>
                                        <span><?= price; ?></span>
                                    </div>
                                    <div class="wrapper-content">
                                        <?= description; ?>
                                    </div>
                                </div>
                                <button class="modal-button">Оформить тариф</button>
                            </div>
                        <?php endforeach; ?>


                        <form class="form">

                            <input type="text" name="имя" placeholder="Имя">
                            <input type="email" name="email" placeholder="Почта">
                            <button>Отправить</button>

                        </form>

                    </div>

                </div>
            </div>
        </div>

    <?php endforeach; ?>
</section>