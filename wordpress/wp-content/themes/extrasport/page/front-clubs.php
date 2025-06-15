    <header class="main">
        <video id="background-video" muted="" autoplay="" class="w-100">
            <source src="https://extrasport.ru/video/bg_moution.mp4" type="video/mp4; ">
        </video>
        <div class="masthead d-flex align-items-center mt-0">
            <div class="container fade-in hero-content">
                <div class="d-flex justify-content-center">
                    <div class="col-md-6"><img class="w-100" src="https://extrasport.ru/img/logo.svg"
                            alt="extrasport logo"></div>
                </div>
                <div class="masthead-heading text-uppercase ">Сеть фитнес клубов на результат!!!</div><a
                    class="btn btn-primary btn-xl text-uppercase bg-black" href="#clubs">Выберите клуб</a>
            </div>
        </div>
    </header>

    <section class="clubs_container my-5" id="clubs">
        <div class="carousel_clubs-container">
            <div class="carousel_clubs">
                <div class="carousel_clubs-item">
                    <a class="card" href="/"><img
                            src="https://extrasport.ru/img/clubs/welcom-block-img-2.jpg" alt="...">
                        <div class="card-body p-0">
                            <div class="d-flex">
                                <div class="w-100 py-2">
                                    <h5 class="card-title">ТРЦ «Питер»</h5>
                                    <div class="card-text">Санкт-Петербург, ул. Типанова, 21</div>
                                </div>
                                <div class="btn-arrow d-flex align-items-center"><i
                                        class="fa-sharp fa-solid fa-arrow-right"> </i></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="carousel_clubs-item">
                    <a class="card" href="/"><img
                            src="https://extrasport.ru/img/clubs/welcom-block-img-4.jpg" alt="...">
                        <div class="card-body p-0">
                            <div class="d-flex">
                                <div class="w-100 py-2">
                                    <h5 class="card-title">«Матроса железняка»</h5>
                                    <div class="card-text">Санкт-Петербург, ул. Матроса Железняка, 57А</div>
                                </div>
                                <div class="btn-arrow d-flex align-items-center"><i
                                        class="fa-sharp fa-solid fa-arrow-right"> </i></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="carousel_clubs-item">
                    <a class="card" href="/">
                        <img src="https://extrasport.ru/img/clubs/welcom-block-img-5.jpg" alt="...">
                        <div class="card-body p-0">
                            <div class="d-flex">
                                <div class="w-100 py-2">
                                    <h5 class="card-title">De-vision</h5>
                                    <div class="card-text">Санкт-Петербург, пр. Культуры, 1</div>
                                </div>
                                <div class="btn-arrow d-flex align-items-center"><i
                                        class="fa-sharp fa-solid fa-arrow-right"> </i></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <button class="prev">❮</button>
            <button class="next">❯</button>
        </div>
    </section>
             <?php get_template_part('layout/map'); ?>
               <!-- Footer-->
        <?php get_template_part('layout/footer'); ?>