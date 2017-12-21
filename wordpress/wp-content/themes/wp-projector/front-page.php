<?php /* Template Name: Home Page */ get_header(); ?>

  <section role="main">

    <div class="first_block full__height--block" id="one">
      <div class="container">
        <div class="row first__block--row">
          <div class="col-md-5 left__side--first"></div>
          <div class="col-md-7 right__side--first">
            <h1><?php the_field('fb_title'); ?></h1>
            <p><?php the_field('fb_undertitle'); ?></p>
            <?php $image = get_field('fb_img');
              if( !empty($image) ): ?>
              <img class="projector__title--img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
            <div class="subscribe_block">
              <div class="date">
                <span class="date_nubmer"><?php the_field('date_number'); ?></span>
                <div class="date-text">
                  <span class="date_mounth"><?php the_field('date_text'); ?></span><br>
                  <span><?php the_field('underdate_text'); ?></span>
                </div>
              </div>
              <div class="subdscribe_button">
                <button type="submit">Записаться</button>
              </div>
            </div><!-- subscribe_block -->
            <div class="date_underline"></div>
            <div class="education_cost">
              <p><?php the_field('edu_costs'); ?></p>
            </div>
          </div>
        </div>
        <div class="row last__scroll--row">
          <div class="col-md-12">
            <img src="<?php echo get_template_directory_uri(); ?>/img/scroll.png" class="scroll_img">
          </div>
        </div><!-- last__scroll--row -->
      </div>
    </div><!-- first_block -->

    <div class="second__why--block full__height--block" id="two">
      <div class="container">
        <div class="row">
          <div class="col-md-12"><h4><?php the_field('sb_title'); ?></h4></div>
        </div>
        <div class="row first__why--row">
        <?php if( have_rows('why_projector') ): while( have_rows('why_projector') ): the_row();
          $image = get_sub_field('why_img'); ?>
          <div class="col-md-6">
            <div class="why_text">
              <p><?php the_sub_field('why_text'); ?></p>
            </div>
            <div class="why_icon">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
        <div class="row second__why--row">
          <?php if( have_rows('why_projector_2') ): while( have_rows('why_projector_2') ): the_row();
          $image = get_sub_field('why_img2'); ?>
          <div class="col-md-6">
            <div class="why_text">
              <p><?php the_sub_field('why_text2'); ?></p>
            </div>
            <div class="why_icon">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div><!-- second__why--block -->

    <div class="for__whom--block full__height--block" id="three">
      <div class="container wide_container">
        <div class="row">
          <div class="col-md-12"><h4><?php the_field('tb_title'); ?></h4></div>
        </div>
        <div class="whom__block--wraper">
          <div class="row first__whom--row">
          <?php if( have_rows('whom_list_first') ): while( have_rows('whom_list_first') ): the_row(); ?>
            <div class="col-md-6">
              <h6><?php the_sub_field('list_title'); ?></h6>
              <ul>
                <?php if( have_rows('list_in_list') ): while( have_rows('list_in_list') ): the_row(); ?>
                  <li><?php the_sub_field('list_item'); ?></li>
                <?php endwhile; endif; ?>
              </ul>
              <p><?php the_sub_field('underlist'); ?></p>
            </div>
            <?php endwhile; endif; ?>
          </div>
          <div class="row second__whom--row">
            <?php if( have_rows('whom_list_first2') ): while( have_rows('whom_list_first2') ): the_row(); ?>
            <div class="col-md-6">
              <h6><?php the_sub_field('list_title2'); ?></h6>
              <ul>
                <?php if( have_rows('list_in_list2') ): while( have_rows('list_in_list2') ): the_row(); ?>
                  <li><?php the_sub_field('list_item2'); ?></li>
                <?php endwhile; endif; ?>
              </ul>
              <p><?php the_sub_field('underlist2'); ?></p>
            </div>
            <?php endwhile; endif; ?>
          </div>
        </div><!-- whom__block--wraper -->
      </div>
    </div><!-- for__whom--block -->

    <div class="rivalry_advantages full__height--block" id="four">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4><?php the_field('frb_title'); ?></h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-8">
            <ul class="advatnages_list">
              <?php if( have_rows('advantages_list') ): while( have_rows('advantages_list') ): the_row(); ?>
                <li><?php the_sub_field('adv_item'); ?></li>
              <?php endwhile; endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div><!-- rivalry_advantages -->

    <div class="about_project full__height--block" id="five">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4>КОРОТКО О ПРОГРАММЕ</h4>
            <p class="about_undertitle">Тренинг рассчитан на 9-12 участников. Продолжительность курса одна неделя. Занятия будут проводиться: понедельник (16.00-20.00), среда (16.00-20.00), пятница(16.00-20.00), суббота (10.00-14.00)</p>
          </div>
        </div>
        <div class="row carousel_row">
          <div class="col-md-12">
            <div class="owl-carousel">
              <div>
                <div class="row">
                  <div class="col-md-5">
                    <div class="owl_img_wrap">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/slide1.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="owl_info_wrap">
                      <p class="day">День 1</p>
                      <h6>Прожектор неопределенности</h6>
                      <p class="program_descr">Работа проектного менеджера - снятие неопределенности. На первом занятии мы определяем тренинг как проект, в котором участники действуют как заказчики. Определяем цели, интересы, потребности и мотивы заказчика и подрядчика.   Исследуем разницу между успехом проекта и его результатом. Осваиваем  термины проектного менеджмента. Серией экспериментов проверяем распространенные в IT сообществе стереотипы.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-md-5">
                    <div class="owl_img_wrap">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/slide2.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="owl_info_wrap">
                      <p class="day">День 2</p>
                      <h6>Формулы счастья</h6>
                      <p class="program_descr">Практическими упражнениями мы проверим базовые формулы проектного менеджмента:</p>
                      <ul>
                        <li>waterfall vs iteration; </li>
                        <li>закон больших чисел vs WBS;</li>
                        <li>нормальное vs ненормального распределения; </li>
                        <li>многозадачность vs однозначности; </li>
                        <li>игнорирование vs управления рисками; </li>
                        <li>охрана стоимости vs управления стоимостью.</li>
                      </ul>
                      <p class="program_descr last_decr">Знание и уместное применение формул позволит вам причинять счастье себе и заказчику.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-md-5">
                    <div class="owl_img_wrap">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/slide3.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="owl_info_wrap">
                      <p class="day">День 3</p>
                      <h6>Круги и вентиляторы судьбы</h6>
                      <p class="program_descr">Удастся ли вам войти в круг проектных менеджеров этого дня? На что вы влияете и что от вас лично зависит? Кто вы в проекте? Готовы ли претендовать на роль лидера/менеджера? Судьба вашей проектной команды определится в авторской симуляции, где вы запустите/не запустите вентилятор. Мы накинем на него денег и победитель получит все. Ведется видеосъемка.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-md-5">
                    <div class="owl_img_wrap">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/slide4.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="owl_info_wrap">
                      <p class="day">День 4</p>
                      <h6>Саундтрек к проектному триллеру</h6>
                      <p class="program_descr">Вы увидите проектный триллер со счастливым/не счастливым концом. В режиссерах и актерах вы узнаете себя. Смонтированный видеофильм предыдущего дня отразит ужасающие промахи, драматичные сюжеты, скучные персонажи и провальные проекты.  Просмотр видео с разбором и комментариями тренеров  позволит получить обратную связь, извлечь уроки и продвинутся в формировании своего проектного мышления.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- carousel_row -->
        <div class="row button_row">
          <div class="col-md-12">
            <a href="#" class="download_programm">Скачать полную версию программы</a>
          </div>
        </div>
      </div>
    </div><!-- about_project -->

    <div class="block_authors full__height--block" id="six">
      <div class="container">
        <div class="row">
          <div class="col-md-6 first__author--block">
            <h6>Юрий Анушкин</h6>
            <p>бизнес-тренер</p>
            <button class="open__modal--first">Подробнее</button>
          </div>
          <div class="col-md-6 second__author--block">
            <h6>Кирилл Красногир</h6>
            <p>руководитель <br> программ и проектов</p>
            <button class="open__modal--second">Подробнее</button>
          </div>
        </div>
      </div>
      <div class="modal__author modal__first--author">
        <a href="" class="close__modal--author"><i class="fa fa-times" aria-hidden="true"></i></a>
        <div class="modal_wrap">
          <p>руководитель программ и проектов</p>
          <h6>Юрий Анушкин</h6>
          <p class="descr_short">Бизнес-тренер  и   менеджер  объединяющий  в  себе  опыт  создания  и  проведения  тренингов  основанных на  идее  «вживления»  знаний  через  эмоции  с   многолетним  опытом  работы  на  руководящих  должностях  в  крупных  компаниях (Евросеть, Алютех, Heineken, Итранзишэн).</p>
          <p class="descr_long">Проектный  опыт  преимущественно сформирован  на стороне  заказчика.  Открытие  филиала,  запуск  корпоративного HR портала,  внедрение  системы  полевого коучинга,  запуск обучающего  проекта MANAGYM  и  другие  проекты  позволяют  опираться как  на   успехи,  так  и на  сокрушительные  поражения в деле  управления  проектами.</p>
        </div>
      </div>
      <div class="modal__author modal__second--author">
        <a href="" class="close__modal--author"><i class="fa fa-times" aria-hidden="true"></i></a>
        <div class="modal_wrap">
          <p>тренер-практик</p>
          <h6>Кирилл Красногир</h6>
          <p class="descr_short">Руководитель программ и проектов, аккаунт менеджер по работе со стратегическими клиентами, компания Itransition.</p>
          <p class="descr_long">За время своей карьеры поработал как на стороне заказчика, так и на стороне исполнителя. Стоял у истоков проектного офиса и разработки корпоративных стандартов управления проектами, управлял портфелем проектов в крупной международной телекоммуникационной компании.</p>
          <p class="descr_long">На стороне исполнителя управлял крупными проектами: по бизнес-анализу и развитию BI-решений в телеком компании; по бизнес-анализу, разработке и развитию BI-решений нефтяной компании; по разработке и сопровождению специального ПО для ситуационно-аналитических центров и пр. Отвечал за развитие бизнеса одного из подразделений компании. В последние несколько лет развивает отношения со стратегически важными клиентами компании.</p>
        </div>
      </div>
    </div><!-- block_authors -->

    <div class="video_block full__height--block" id="seven">
      <div class="container wide_container">
        <div class="row">
          <div class="col-md-12">
            <div class="video_wrap">
              <iframe width="100%" height="480" src="https://www.youtube.com/embed/-AqQQMY0q78" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div><!-- video_block -->

    <div class="form__contacts--block full__height--block" id="eight">
      <div class="form__part--block">
        <div class="container wide_container">
          <div class="row">
            <div class="col-md-12">
              <h4>Стоимость обучения - 572 BYN</h4>
              <div class="form_wrap">
                <form action="#">
                  <input type="text" placeholder="Имя">
                  <input type="text" placeholder="Телефон">
                  <input type="text" placeholder="Email">
                  <button type="submit" class="submit_form">Записатся</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div><!-- form__part--block -->
      <div class="map__part--block">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="contact_card">
                <div class="card-left">
                  <p class="hide__effect--paragraph">г. Минск</p>
                  <p class="hide__effect--paragraph">ул. Толбухина 2, Бизнес-центр "Time", этаж 5</p>
                </div>
                <div class="card-right">
                  <div class="card_phone">
                    <p>Телефон</p>
                    <a href="tel:+375 29 310-10-10">+375 29 310-10-10</a>
                  </div>
                  <div class="card_email">
                    <p>E-mail</p>
                    <a href="mailto:info@projector.by">info@projector.by</a>
                  </div>
                  <div class="card_social">
                    <p>Соц.сети:</p>
                    <a href="#">Facebook</a>
                    <a href="#">ВКонтакте</a>
                  </div>
                  <div class="contacts__buttons--wrap">
                    <p class="contacts__button--paragraph">КОНТАКТНАЯ ИНФОРМАЦИЯ</p>
                    <span class="contacts__hide--arrow"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <iframe class="contact_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4699.098642995372!2d27.617123232385808!3d53.92198403596728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcf035f5cbfab%3A0xb37dcb89e3c4d094!2z0YPQu9C40YbQsCDQotC-0LvQsdGD0YXQuNC90LAgMiwg0JzQuNC90YHQuiwg0JHQtdC70LDRgNGD0YHRjA!5e0!3m2!1sru!2sua!4v1513707577833" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div><!-- map__part--block -->
    </div><!-- form__contacts--block -->

  </section><!-- /section -->
</div><!-- /wrapper -->


<?php get_footer(); ?>
