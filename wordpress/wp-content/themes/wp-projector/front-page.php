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
            <h4><?php the_field('fvb_title'); ?></h4>
            <p class="about_undertitle"><?php the_field('fvb_undertitle'); ?></p>
          </div>
        </div>
        <div class="row carousel_row">
          <div class="col-md-12">
            <div class="owl-carousel">

            <?php if( have_rows('slider_block') ): while( have_rows('slider_block') ): the_row();
              $image = get_sub_field('slider_img'); ?>
                <div class="row">
                  <div class="col-md-5">
                    <div class="owl_img_wrap">
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="owl_info_wrap">
                      <p class="day"><?php the_sub_field('slidr_day'); ?></p>
                      <h6><?php the_sub_field('slider_title'); ?></h6>
                      <p class="program_descr"><?php the_sub_field('slider_desc'); ?></p>
                      <ul>
                      <?php if( have_rows('slider_list') ): while( have_rows('slider_list') ): the_row(); ?>
                        <li><?php the_sub_field('sl_list_item'); ?></li>
                      <?php endwhile; endif; ?>
                      </ul>
                      <p class="program_descr last_decr"><?php the_sub_field('slider_last_descr'); ?></p>
                    </div>
                  </div>
                </div>
            <?php endwhile; endif; ?>

            </div><!-- owl-carousel -->
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
            <h6><?php the_field('fa_title'); ?></h6>
            <p><?php the_field('fa_undername'); ?></p>
            <button class="open__modal--first">Подробнее</button>
          </div>
          <div class="col-md-6 second__author--block">
            <h6><?php the_field('sa_title'); ?></h6>
            <p><?php the_field('sa_undername'); ?></p>
            <button class="open__modal--second">Подробнее</button>
          </div>
        </div>
      </div>
      <div class="modal__author modal__first--author">
        <a href="" class="close__modal--author"><i class="fa fa-times" aria-hidden="true"></i></a>
        <div class="modal_wrap">
          <p><?php the_field('fma_abovename'); ?></p>
          <h6><?php the_field('fma_name'); ?></h6>
          <p class="descr_short"><?php the_field('fma_short_descr'); ?></p>
          <p class="descr_long"><?php the_field('fma_long_descr'); ?></p>
        </div>
      </div>
      <div class="modal__author modal__second--author">
        <a href="" class="close__modal--author"><i class="fa fa-times" aria-hidden="true"></i></a>
        <div class="modal_wrap">
          <p><?php the_field('sma_abovename'); ?></p>
          <h6><?php the_field('sma_name'); ?></h6>
          <p class="descr_short"><?php the_field('sma_short_descr'); ?></p>
          <p class="descr_long"><?php the_field('sma_long_descr'); ?></p>
        </div>
      </div>
    </div><!-- block_authors -->

    <div class="video_block full__height--block" id="seven">
      <div class="container wide_container">
        <div class="row">
          <div class="col-md-12">
            <div class="video_wrap">
             <?php the_field('video_frame'); ?>
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
              <h4><?php the_field('eb_title'); ?></h4>
              <div class="form_wrap">
                <?php echo do_shortcode('[contact-form-7 id="45" title="Contacts"]'); ?>
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
                  <p class="hide__effect--paragraph"><?php the_field('card_city'); ?></p>
                  <p class="hide__effect--paragraph"><?php the_field('card_adress'); ?></p>
                </div>
                <div class="card-right">
                  <div class="card_phone">
                    <p>Телефон</p>
                    <a href="tel:+375 29 310-10-10"><?php the_field('card_phone'); ?></a>
                  </div>
                  <div class="card_email">
                    <p>E-mail</p>
                    <a href="mailto:info@projector.by"><?php the_field('card_email'); ?></a>
                  </div>
                  <div class="card_social">
                    <p>Соц.сети:</p>
                    <a href="#"><?php the_field('card_social'); ?></a>
                    <a href="#"><?php the_field('card_social_second'); ?></a>
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
        <?php the_field('contacts_map'); ?>
      </div><!-- map__part--block -->
    </div><!-- form__contacts--block -->

  </section><!-- /section -->
</div><!-- /wrapper -->


<?php get_footer(); ?>
