
<?php get_template_part('layout/nav'); ?>

    <!-- Carousel Section -->
    <div id="carouselSection" class="carousel-container">
        <div id="myCarousel" class="carousel slide" data-bs-ride="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div
                        class="masthead-heading text-uppercase d-flex flex-column align-items-center justify-content-center title">
                        Сеть фитнес клубов на результат!
                        <div class="masthead-subheading white">Ваш клуб - EXTRASPORT ТК «ПИТЕР»</div>
                    </div><video muted="" loop="" autoplay="" class="w-100">
                        <source src="https://extrasport.ru/video/bg_moution.mp4"
                            type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
                        <source src="https://extrasport.ru/video/bg_moution.webm"
                            type="video/webm; codecs=&quot;vp8, vorbis&quot;">
                    </video>
                </div>
                <div class="carousel-item ">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/slide-1.jpeg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/slide-2.jpeg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/slide-3.jpeg" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
        </div>
    </div>

    <!-- Фитнес тест-драйв Section -->
    <div id="contentSection" class="scrollable">
        <section id="about">
            <video src="<?php bloginfo('template_url'); ?>/assets/video/service.mp4" style="height: 100vh !important; width: 100%;
            object-fit: cover;
            object-position: center center;" autoplay="" muted="" loop=""> </video>
        </section>

        <section id="actions">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase m-0 py-5">Акции клуба EXTRASPORT ТК
                        «ПИТЕР»</h2>
                </div>
            </div>
            <div class="clubs_container" style="height: auto;">

                <div class="carousel_clubs-container">
                    <div class="carousel_clubs">
                        <div class="carousel_clubs-item">
                            <a class="card" href="/">
                                <div class="date-action">До 21 марта</div>

                                <img src="https://extrasport.ru/uploads/image/share/IMG-20250320-WA0000-1742474352.jpg"
                                    alt="...">
                   
                            </a>
                        </div>
                        <div class="carousel_clubs-item">
                            <a class="card" href="https://piter.extrasport.ru">
                                <div class="date-action">До 31 марта</div><img
                                    src="https://extrasport.ru/uploads/image/share/IMG-20250305-WA0005-1741596709.jpg"
                                    alt="...">
                            </a>
                        </div>

                        <div class="carousel_clubs-item">
                            <a class="card" href="https://matros.extrasport.ru/card/shares/fri/">
                                <div class="date-action">До 1 апреля</div>
                                <img src="https://extrasport.ru/uploads/image/share/osdoltotlosdt-1739308193.jpg"
                                    alt="...">
                            </a>
                        </div>
                        <div class="carousel_clubs-item">
                            <a class="card" href="https://matros.extrasport.ru/card/shares/fri/">
                                <div class="date-action">До 1 апреля</div>
                                <img src="https://extrasport.ru/uploads/image/share/IMG-20250212-WA0000-1739361915.jpg"
                                    alt="...">
                            </a>
                        </div>
                    </div>
                    <button class="prev">❮</button>
                    <button class="next">❯</button>
                </div>
            </div>
            <div class="d-flex justify-content-center"><a class="btn btn-primary btn-xl"
                    href="https://piter.extrasport.ru/card/shares/">Все
                    акции</a></div>
        </section>

        <section class="d-flex align-items-center" id="contact" style="height: 100vh;">
            <div class="container">
                <h2 class="section-heading text-center text-uppercase">Фитнес тест-драйв</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-5 fs-5">
                        <p>Хотите больше узнать о нашем клубе? Оставьте заявку, и наши менеджеры проведут для вас
                            подробную
                            экскурсию. </p>
                        <p>Для тех, кому экскурсии мало, мы предлагаем услугу «фитнес тест-драйв» — безлимитную неделю
                            фитнеса!</p>
                    </div>
                    <div class="col-lg-3">
                        <form id="subscribe" class="form-section__form"
                            action="https://piter.extrasport.ru/club/subscribe/" method="post"
                            onsubmit="ym(21525628, 'reachGoal', 'zayavka'); ym(21525628, 'reachGoal', 'test_drive'); dataLayer.push({'event': 'zayavka'}); return true;">
                            <input type="hidden" name="_csrf"
                                value="btHThO_1Dk1bCE6P4bnHKJZsi_iGXY96Hql_z6oQZNAGgr3y16JWewtpEeKE-_FMpSLgrMg0yyh25xmLyz1Wkg==">
                            <div class="form-group input-row"><!-- Name input--><input type="text" class="form-control"
                                    name="name" placeholder="Ваше имя *"> </div>
                            <div class="form-group input-row"><!-- Phone number input--><input type="text" id="w0"
                                    class="form-control" name="tel" placeholder="Ваш телефон *"
                                    data-plugin-inputmask="inputmask_5b3177d1" inputmode="text"> </div>
                            <div class="checkbox"><input type="checkbox" id="soglas" name="accept" value="1"> <label
                                    class="d-inline" for="soglas">Ознакомлен с <a
                                        href="https://piter.extrasport.ru/privacy/" target="_blank">политикой
                                        конфиденциальности</a></label></div>
                         
                        </form>
                    </div>
                    <div class="text-center"><a href="https://piter.extrasport.ru/club/subscribe/"
                            class="btn btn-primary btn-xl text-uppercase">Записаться</a>
                    </div>
                </div><!-- Submit Button-->
            </div>
        </section>
          <?php get_template_part('layout/map'); ?>
               <!-- Footer-->
        <?php get_template_part('layout/footer'); ?>
    </div>