<?php
/*
Template Name: home
*/
?>

<?php get_header();?>
            <div class="promo__wrapper">
                <h1 class="promo__header">Подбор пульсометра</h1>
                <h2 class="promo__subheader">с учётом Вашего уровня подготовки</h2>
                <div class="promo__items">
                    <div class="promo__item">
                        <img src="<?php bloginfo('template_url');?>/assets/img/promo/iconTime.png" alt="timer">
                        Время подбора: 10 минут
                    </div>
                    <div class="promo__item">
                        <img src="<?php bloginfo('template_url');?>/assets/img/promo/iconCart.png" alt="cart">
                        Бесплатная доставка
                    </div>
                    <div class="promo__item">
                        <img src="<?php bloginfo('template_url');?>/assets/img/promo/iconMassage.png" alt="massage">
                        Ответим на все вопросы
                    </div>
                </div>
                <button data-modal="consultation" class="button button_main">заказать кОНСУЛЬТАЦИЮ</button>
                <div class="promo__link">или <a href="#">перейти в каталог</a></div>
            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="container">
            <h2 class="title">НАШИ ПРЕИМУЩЕСТВА</h2>
            <div class="advantages__items">
                <div class="advantages__item">
                    <img src="<?php bloginfo('template_url');?>/assets/img/advantages/iconCup.png" alt="cup" class="advantages__image">
                    <div class="advantages__upperText">Делимся опытом</div>
                    <div class="advantages__lowerText advantages__lowerText3">Наши сотрудники всегда готовы поделиться своим опытом, так как сами бегают полумарафоны, переплыли Босфор, готовятся к соревнованиям по триатлону!</div>
                    
                </div>
                <div class="advantages__item">
                    <img src="<?php bloginfo('template_url');?>/assets/img/advantages/iconHeart.png" alt="heart" class="advantages__image advantages__image_animated">
                    <div class="advantages__upperText">Заботимся о здоровье</div>
                    <div class="advantages__lowerText advantages__lowerText2">Мы работаем для того, чтобы Ваши занятия спортом шли на пользу Вашему здоровью и были в радость Вам и Вашим близким!</div>
                    
                </div>
                <div class="advantages__item">
                    <img src="<?php bloginfo('template_url');?>/assets/img/advantages/iconShoe.png" alt="shoe" class="advantages__image">
                    <div class="advantages__upperText">Учим бегать</div>
                    <div class="advantages__lowerText advantages__lowerText3">Помогаем с обучением правильной технике бега! Дружим с крупнейшей школой бега в России - I LOVE RUNNING.</div>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="consultation">
        <div class="container">
            <h2 class="title title_left">Получите бесплатную консультацию <br> по подбору пульсометра</h2>
            <div class="consultation__descr">
                Просто заполните форму заявки <br> и мы перезвоним вам в течении 10 минут
            </div>
            <form id="consultation-form" class="feed-form" action="#">
                <?php echo do_shortcode('[contact-form-7 id="37" title="Контактная форма"]');?>
            </form>
        </div>
    </section>
    <div class="carousel">
        <div class="container">
            <div class="carousel__inner">
                <div><img src="<?php bloginfo('template_url');?>/assets/img/catalog/watches.png" alt="watches"></div>
                <div><img src="<?php bloginfo('template_url');?>/assets/img/catalog/watches2.png" alt="watches"></div>
                <div><img src="<?php bloginfo('template_url');?>/assets/img/catalog/watches3.png" alt="watches"></div>
            </div>
        </div>
    </div>
    <section class="catalog">
        <div class="container">
            <h2 class="title">Каталог пульсометров</h2>
            <ul class="catalog__tabs">
                <li class="catalog__tab catalog__tab_active"><div>Для фитнеса</div></li>
                <li class="catalog__tab "><div>Для бега</div></li>
                <li class="catalog__tab "><div>Для триатлона</div></li>
            </ul>
                    <div class="catalog__content catalog__content_active">
                        <?php
                        global $post;
                        $myposts = get_posts([ 
                            'numberposts' => -1,
                            'category_name' => 'running',
                        ]);

                        if( $myposts ){
                            foreach( $myposts as $post ){
                                setup_postdata( $post );
                        ?>
                        <div class="catalog-item">
                            <div class="catalog-item__wrapper">
                                <div class="catalog-item__content catalog-item__content_active ">
                                    <img src="<?php bloginfo('template_url');?>/assets/img/catalog/watchBuy.png" alt="pulsometer" class="catalog-item__img">
                                    <div class="catalog-item__subtitle"><?php the_title( ); ?></div>
                                    <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                    <a href="" class="catalog-item__link">ПОДРОБНЕЕ</a>
                                </div>
                                <div class="catalog-item__list"> 
                                    <ul>
                                        <li>Вы услышите звуковое оповещение о нужном пульсе во время тренировки;</li>
                                        <li>Вы увидите информативный графический индикатор целевых тренировочных зон пульса;</li>
                                        <li>Также Вы увидите информацию о расходе калорий за тренировку;</li>
                                        <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                                    </ul>
                                    <a href="#" class="catalog-item__back">назад</a>
                                </div>
                            </div>
                            <hr>
                            <div class="catalog-item__footer">
                                <div class="catalog-item__prices">
                                    <div class="catalog-item__old-price">4 750 руб.</div>
                                    <div class="catalog-item__price"><?php the_content(); ?></div>
                                </div>
                                <button class="button button_mini">КУПИТЬ</button>
                            </div>
                        </div>
                        <?php 
                            }
                        }

                        wp_reset_postdata(); // Сбрасываем $post
                        ?>
                    </div>
                    <div class="catalog__content">
                        <?php
                        global $post;

                        $myposts = get_posts([ 
                            'numberposts' => -1,
                            'category_name' => 'fitness',
                        ]);

                        if( $myposts ){
                            foreach( $myposts as $post ){
                                setup_postdata( $post );
                        ?>
                        <div class="catalog-item">
                            <div class="catalog-item__wrapper">
                                <div class="catalog-item__content catalog-item__content_active ">
                                    <!-- <img src="<?php //bloginfo('template_url');?>/assets/img/catalog/watchBuy.png" alt="pulsometer" class="catalog-item__img"> -->
                                    <?php the_post_thumbnail(
                                        array(140, 200),
                                        array(
                                            'class' => 'catalog-item__img',
                                        )
                                        );?>
                                    <div class="catalog-item__subtitle"><?php the_title( ); ?></div>
                                    <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                    <a href="" class="catalog-item__link">ПОДРОБНЕЕ</a>
                                </div>
                                <div class="catalog-item__list">
                                    <ul>
                                        <li>Вы услышите звуковое оповещение о нужном пульсе во время тренировки;</li>
                                        <li>Вы увидите информативный графический индикатор целевых тренировочных зон пульса;</li>
                                        <li>Также Вы увидите информацию о расходе калорий за тренировку;</li>
                                        <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                                    </ul>
                                    <a href="#" class="catalog-item__back">назад</a>
                                </div>
                            </div>
                            <hr>
                            <div class="catalog-item__footer">
                                <div class="catalog-item__prices">
                                    <div class="catalog-item__old-price">4 750 руб.</div>
                                    <div class="catalog-item__price"><?php the_content(); ?></div>
                                </div>
                                <button class="button button_mini">КУПИТЬ</button>
                            </div>
                        </div>
                        <?php 
                            }
                        }

                        wp_reset_postdata(); // Сбрасываем $post
                        ?>
                    </div>
                    <div class="catalog__content">
                        <?php
                        global $post;

                        $myposts = get_posts([ 
                            'numberposts' => -1,
                            'category_name' => 'triathlon',
                        ]);

                        if( $myposts ){
                            foreach( $myposts as $post ){
                                setup_postdata( $post );
                        ?>
                        <div class="catalog-item">
                            <div class="catalog-item__wrapper">
                                <div class="catalog-item__content catalog-item__content_active ">
                                    <!-- <img src="<?php bloginfo('template_url');?>/assets/img/catalog/watchBuy.png" alt="pulsometer" class="catalog-item__img"> -->
                                    <?php the_post_thumbnail(
                                        array(140, 200),
                                        array(
                                            'class' => 'catalog-item__img',
                                        )
                                        );?>
                                    <div class="catalog-item__subtitle"><?php the_title( ); ?></div>
                                    <div class="catalog-item__descr">Для первых шагов в тренировках, основанных на сердечном ритме</div>
                                    <a href="" class="catalog-item__link">ПОДРОБНЕЕ</a>
                                </div>
                                <div class="catalog-item__list">
                                    <ul>
                                        <li>Вы услышите звуковое оповещение о нужном пульсе во время тренировки;</li>
                                        <li>Вы увидите информативный графический индикатор целевых тренировочных зон пульса;</li>
                                        <li>Также Вы увидите информацию о расходе калорий за тренировку;</li>
                                        <li>Вы сможете посмотреть данные по 10 тренировкам.</li>
                                    </ul>
                                    <a href="#" class="catalog-item__back">назад</a>
                                </div>
                            </div>
                            <hr>
                            <div class="catalog-item__footer">
                                <div class="catalog-item__prices">
                                    <div class="catalog-item__old-price">4 750 руб.</div>
                                    <div class="catalog-item__price"><?php the_content(); ?></div>
                                </div>
                                <button class="button button_mini">КУПИТЬ</button>
                            </div>
                        </div>
                        <?php 
                            }
                        }

                        wp_reset_postdata(); // Сбрасываем $post
                        ?>
                    </div>
        </div>
    </section>
    <section class="review">
        <div class="container">
            <div class="title">
                отзывы клиентов
            </div>
            <div class="review__items">
                <div class="review__item fadeInUp wow" data-wow-duration="2s" data-wow-delay="1s">
                    <img src="<?php bloginfo('template_url');?>/assets/img/review/client1.png" alt="client" class="review__img">
                    <div class="review__text">
                        <div class="review__title">Ирина Иванченко </div>
                        <div class="review__subtitle">2 полумарафона</div>
                        <div class="review__descr">
                            Не знала, что себе купить - обратилась к ребятам из RunSmart - подобрали пульсометр, который подошёл именно под мои цели и финансовые возможности. Через некоторое время решила обновить гаджет - не раздумывая обратилась туда же. 
                            <br><br>Новые цели - новый гаджет! 
                            <br><br>Спасибо, RunSmart! 
                        </div>
                    </div>
                </div>
                <hr>
                <div class="review__item fadeInUp wow"   data-wow-duration="2s" data-wow-delay="1s">
                    <img src="<?php bloginfo('template_url');?>/assets/img/review/client2.png" alt="client" class="review__img ">
                    <div class="review__text">
                        <div class="review__title">Иван Сёмочкин</div>
                        <div class="review__subtitle">1 полумарафон</div>
                        <div class="review__descr">
                            Крутая штука-пульсометр. Обычно без них бегал. Оказывается только хуже себе делал. 
                            <br><br>Купил пульсометр, ещё в подарок получил тренировку. Со мной вместе провели первую тренировку, научили пользоваться новым гаджетом. Также объяснили основы анатомии, составили план тренировок на месяц вперёд. 
                            <br><br>С ними подготовился к своему первому полумарафону! Спасибо!!!
                        </div>
                    </div>
                </div>
                <hr>
                <div class="review__item fadeInUp wow" data-wow-duration="2s" data-wow-delay="1s">
                    <img src="<?php bloginfo('template_url');?>/assets/img/review/client3.png" alt="client" class="review__img ">
                    <div class="review__text">
                        <div class="review__title">Юлия Дашкина</div>
                        <div class="review__subtitle">2 полумарафона</div>
                        <div class="review__descr">
                            Долго не могла начать бегать, т.к. до этого несколько раз начинала, но становилось тяжело и я бросала. От друзей услышала о RunSmart и о беге с контролем пульса и решила попробовать.
                            <br> <br> Позвонила, ребята поинтересовались моими целями и подобрали очень интересный вариант со скидкой! Теперь бегаю и наслаждаюсь бегом! Пробежала уже 2 полумарафона и несколько более коротких забегов и не намерена останавливаться!
                            <br><br>Спасибо!!!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="overlay">
        <div class="modal" id="consultation">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">Просто заполните форму заявки</div>
            <div class="modal__descr">и мы перезвоним вам в течении 10 минут</div>
            <form class="feed-form feed-form_mt-25" action="#">
            <?php echo do_shortcode('[contact-form-7 id="37" title="Контактная форма"]');?>
            </form>
        </div>
        <div class="modal" id="order">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">Ваш заказ:</div>
            <div class="modal__descr">Пульсометр Polar FT1</div>
            <form class="feed-form feed-form_mt-25" action="#">
                <?php echo do_shortcode('[contact-form-7 id="37" title="Контактная форма"]');?>

            </form>
        </div>
        <div class="modal modal_mini" id="thanks">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">Спасибо за вашу заявку!</div>
            <div class="modal__descr">Наш менеджер свяжется с вами в ближайшее время!</div>
        </div>
    </div>
    <a href="#up" class="pageup"><img src="<?php bloginfo('template_url');?>/assets/img/arrow-up.svg" alt="up" class=""></a>
    <?php get_footer();?>