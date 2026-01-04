  <!-- section with searching form -->
  <section class="searching__section" 
  style="background-image: url('<?php echo esc_url(get_field('banner_search_bottom', 12)); ?>');">
      <form class="searching__section_form">
          <h2 class="searching__section_form_title item-title-font-style">Знайти громаду</h2>
          <div>
              <label for="searching_search-input" class="visually-hidden">Пошук</label>
              <input id="searching_search-input" class="searching__section_form_input" type="text" placeholder="Введіть назву міста">
              <button class="searching__section_form_button item-title-font-style" type="submit">Знайти</button>
          </div>
      </form>
  </section>
  </main>
  <footer class="footer">
      <div class="footer__logo-holder_wrapper">
          <div class="footer__logo-holder">
              <?php get_template_part('template-parts/logo'); ?>
              <span class="footer__logo_title header__logo_title"><?php echo get_field('seit_name', 12); ?></span>
          </div>
          <div class="footer__social-holder_wrapper">
              <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/' ?>icons/youtube_icon.svg" alt="Youtube"></a>
              <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/' ?>icons/instagram_icon.svg" alt="Instagram"></a>
              <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/img/' ?>icons/facebook_icon.svg" alt="Facebook"></a>
          </div>
          <div class="footer__copyright-holder_wrapper">
              <span class="footer__copyright submenu-font-style">&#169 2025 Новоапостольська Церква України. Всі права
                  захищені.</span>
          </div>
      </div>
      <div class="footer__menu_wrapper">
          <a href="#" class="footer__menu_link submenu-font-style">Пожертвування</a>
          <a href="#" class="footer__menu_link submenu-font-style">Контакти</a>
          <a href="#" class="footer__menu_link submenu-font-style">Новини</a>
      </div>
  </footer>
  <?php
    wp_footer();
    ?>
  </body>

  </html>