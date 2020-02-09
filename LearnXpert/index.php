<?php include ('header.php')?>
    <section class="learn">
        <div class="container">
            <div class="row">

                <h1 class="learn-title wow fadeInLeft">
                    <?php showLearn("title") ?>
                </h1>
                <p class="learn-text  wow fadeInLeft">
                    <?php showLearn("text") ?>
                </p>

            </div>

            <!--    <div class="car">-->
            <!--        <div class="container">-->
            <!--            <div class="row">-->
            <!--                <div class="card wow bounceInLeft">-->
            <!--                    <h5 class="events">Мероприятия</h5>-->
            <!--                    <h1 class="date">08 марта 2017</h1>-->
            <!--                    <h3 class="camp">летний кемпинг</h3>-->
            <!--                    <h5 class="start">Время начала 9:00 утра</h5>-->
            <!--                    <button class="read">читать далее</button>-->
            <!--                </div>-->
            <!--                <div class="card wow bounceInLeft">-->
            <!--                    <h5 class="events">Мероприятия</h5>-->
            <!--                    <h1 class="date">08 марта 2017</h1>-->
            <!--                    <h3 class="camp">летний кемпинг</h3>-->
            <!--                    <h5 class="start">Время начала 9:00 утра</h5>-->
            <!--                    <button class="read">читать далее</button>-->
            <!--                </div>-->
            <!--                <div class="card wow bounceInLeft">-->
            <!--&lt;!&ndash;                    <h5 class="events">Events</h5>&ndash;&gt;-->
            <!--                    <h5 class="bec">Стать студентом?</h5>-->
            <!--&lt;!&ndash;                    <h3 class="camp">summer camping</h3>&ndash;&gt;-->
            <!--&lt;!&ndash;                    <h5 class="start">Time Start 9:00 AM</h5>&ndash;&gt;-->
            <!--                    <button class="read-bec">Вход сейчас</button>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  wow fadeInRightBig ">
                    <h1 class="about-title"><?php showabout("title") ?></h1>
                    <p class="about-text">
                        <?php showabout("text") ?>
                    </p>
                    <a href="about.html" style="color: white">  <button datasrc="" class="read" >  читать далее </button></a>


                </div>
                <div class=" col-lg-6 wow fadeInLeftBig">
                    <img src="img/<?php showabout("img") ?>" alt="" class="about-img">
                </div>
            </div>
        </div>
    </section>

    <section class="interested">
        <div class="container">
            <h1 class="interes-title wow rotateIn">Какой из них вас интересует?</h1>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card interes ">
                        <div class="card-interes-img"><img src="img/Forma1.png" alt=""></div>
                        <h1 class="card-interes-title">html</h1>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card interes">
                        <div class="card-interes-img"><img src="img/Forma2.png" alt=""></div>
                        <h1 class="card-interes-title">html</h1>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card interes">
                        <div class="card-interes-img"><img src="img/Forma1.png" alt=""></div>
                        <h1 class="card-interes-title">html</h1>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card interes ">
                        <div class="card-interes-img"><img src="img/Forma1.png" alt=""></div>
                        <h1 class="card-interes-title">html</h1>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card interes">
                        <div class="card-interes-img"><img src="img/Forma2.png" alt=""></div>
                        <h1 class="card-interes-title">html</h1>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card interes">
                        <div class="card-interes-img"><img src="img/Forma1.png" alt=""></div>
                        <h1 class="card-interes-title">html</h1>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="courses">
        <div class="container">
            <div class="courses-title">
                Последние курсы
            </div>
            <div class="row">

                <div class="col-lg-4">
                    <div class="card courses-card col  ">
                        <img src="img/coursee1.png" class="courses-img" alt="">
                        <div class="card-2chast">
                            <div class="scines d-flex">
                                <h7 class="science">Бизнес</h7>
                                <h5 class="money">$159.00</h5>
                            </div>
                            <div class="scines d-flex">
                                <h7 class="profession">Дизайн одежды</h7>
                                <h5 class="zvezda">*****</h5>
                            </div>
                            <p class="courses-text">
                                Дизайн – сложная, кропотливая работа. Дизайнер находится в постоянном творческом поиске,
                                разрабатывает новые композиционные приемы.
                            </p>
                            <a href="courses.html" style="color: white"><button class="read">Читать дальше</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card courses-card col">
                        <img src="img/courses2.png" class="courses-img" alt="">
                        <div class="card-2chast">
                            <div class="scines d-flex">
                                <h7 class="science">Компьютерная наука</h7>
                                <h5 class="money">$159.00</h5>
                            </div>
                            <div class="scines d-flex">
                                <h7 class="profession">Математика</h7>
                                <h5 class="zvezda">*****</h5>
                            </div>
                            <p class="courses-text">
                                Компьютерные науки изучают, как устроен компьютер, как он работает,  математической стороны.
                                Вы должны выбрать разработку программного обеспечения.
                            </p>
                            <a href="courses.html" style="color: white"><button class="read">Читать дальше</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card courses-card col">
                        <img src="img/courses3.png" class="courses-img" alt="">
                        <div class="card-2chast">
                            <div class="scines d-flex">
                                <h7 class="science">Естественные науки</h7>
                                <h5 class="money">Бесплатно</h5>
                            </div>
                            <div class="scines d-flex">
                                <h7 class="profession">Mаркетинг </h7>
                                <h5 class="zvezda">*****</h5>
                            </div>
                            <p class="courses-text">Маркетинг – это деятельность организации, направленная на получение прибыли с помощью удовлетворения потребностей покупателей

                            </p>
                            <a href="courses.html" style="color: white"><button class="read">Читать дальше</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our">
        <div class="container">
            <h1 class="our-title">
                Наши достижения
            </h1>
            <div class="row">
                <div class="col-lg-6">
                    <div class="our-achievements" style="width: 370px">
                        <div class="our-element d-flex">
                            <img src="img/our4.png" class="our-img" alt="">
                            <div class="left-storona">
                                <h1 class="chislo">6079</h1>
                                <p class="our-text">Активные студенты</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="our-achievements" style="width: 370px">
                        <div class="our-element d-flex">
                            <img src="img/our2.png" class="our-img" alt="">
                            <div class="left-storona">
                                <h1 class="chislo">19</h1>
                                <p class="our-text">Лет успешной работы</p>
                            </div>
                        </div>
                    </div>
                </div></div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="our-achievements" style="width: 370px">
                        <div class="our-element d-flex">
                            <img src="img/our3.png" class="our-img" alt="">
                            <div class="left-storona">
                                <h1 class="chislo">500</h1>
                                <p class="our-text">Проведенных уроков</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="our-achievements" style="width: 370px">
                        <div class="our-element d-flex">
                            <img src="img/our4.png" class="our-img" alt="">
                            <div class="left-storona">
                                <h1 class="chislo">500</h1>
                                <p class="our-text">Самые лучшие показатели успеха</p>
                            </div>
                        </div>
                    </div>
                </div></div>
            <div class="row">
                <div class="col-lg-12 wow fadeInUp">


                    <div class="obshiy-achiviment d-flex">




                    </div>
                    <div class="our-posled-text">
                        <p class="our-posled">Благодаря тщательному подбору преподавательского состава, применяемым эффективным программам, современным средствам обучения и внимательному отношению к каждому слушателю курсы Adixi быстро завоевали заслуженную популярность. Мы реализуем многоуровневую систему обучения с использованием комбинированного подхода с упором на коммуникативный метод, т.к. применять одну и ту же методику для всех учащихся с разными целями, условиями и потребностями в обучении, невозможно.</p>
                    </div>
                    <div class="our-posled-img">
                        <img src="img/development.png" alt="" class="img-posled">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="welcome">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-lg-6 wow ">
                    <h1 class="welcome-title">
                        Добро пожаловать в <br>
                        Живой класс </h1>
                    <p class="welcome-text">
                        Мы учитываем потребность наших слушателей в самоактуализации и самореализации и создаем условия для раскрытия творческого потенциала в различных сферах жизни: в семье, работе, учебе, творчестве, увлечениях. Наши программы основаны на изданиях и материалах лучших университетов Оксфорда, Кембриджа, Лондона, Нью-Йорк и Сиднея.

                    </p>
                    <a href="courses.html"><button class="read-bec"style="color: #1a56d6">Посмотреть все классы</button></a>

                </div>
                <div class="col-lg-5 ml-auto"><img src="img/Class.png" alt="" class="welcome-img"></div>
            </div>
            <div class="gallery wow fadeInUp">
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <img src="img/kar1.png" style="width: 100%" alt=""  class="kartinka1 " >
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <img src="img/kar2.png" style="width: 100%"  alt="" class="kartinka1" >
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <img src="img/kar3.png" style="width: 100%" alt=""  class="kartinka1" >
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <img src="img/kar4.png" style="width: 100%" alt=""  class="kartinka1" >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="new-portal ">
        <div class="container">
            <h1 class="new-portal-title" style="text-align: center; color: #1a56d6">Новый Портал</h1>
            <div class="row">
                <div class=" col-lg-4  ml-auto">
                    <div class="card new-portal-card">
                        <img src="img/portal1.png" alt="" class="new-portal-image">
                        <div class="chast2-new-portal">
                            <h5 class="date-new-portal">25 февраля 2017 г.</h5>
                            <p class="new-portal-text">Диплом бухгалтерского учета специально предназначен для (...)</p>
                            <a href="fakulty.html" class="silka-new-portal">Читать далее</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="card new-portal-card">
                        <img src="img/portal2.png" alt="" class="new-portal-image">
                        <div class="chast2-new-portal">
                            <h5 class="date-new-portal">12 сентябрь 2017 г.</h5>
                            <p class="new-portal-text">Диплом бухгалтерского учета специально предназначен для (...)</p>
                            <a href="fakulty.html" class="silka-new-portal">Читать далее</a>
                        </div>
                    </div>
                    <!--            <div class="col-lg-4">-->
                    <!--                <div class="card new-portal-card">-->
                    <!--                    <img src="img/portal3.png" alt="" class="new-portal-image">-->
                    <!--                    <div class="chast2-new-portal">-->
                    <!--                        <h5 class="date-new-portal">12 октябрь 2017 г.</h5>-->
                    <!--                        <p class="new-portal-text">Диплом бухгалтерского учета специально предназначен для (...)</p>-->
                    <!--                        <a href="fakulty.html" class="silka-new-portal">Читать далее</a>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->

                </div>
            </div>

        </div>
    </section>


<?php include('footer.php') ?>