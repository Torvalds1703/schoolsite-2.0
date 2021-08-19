</div>
  <footer class="footer">
    <!-- <?php wp_nav_menu([
                "theme_location" => "footer-menu",
                "depth" => 1,
                "container" => "nav",
                "container_class" =>
                "collapse navbar-collapse",
                "container_id" => "bs-example-navbar-collapse-1",
                "menu_class" => "navbar-footer",
              ]); ?>
    <?php wp_footer(); ?> -->

    <div class="footer__bottom footer-bottom">
                    <section>
                        <ul class="footer-bottom__items">
                            <li class="footer-bottom__logo">
                                <a href="/">
                                    <img
                                        src="<?php echo get_theme_file_uri('/images/logo-sm.png'); ?>"
                                        alt="Ссылка на главную страницу"
                                        width="65"
                                        height="65"
                                    />
                                </a>
                            </li>
                            <li class="footer-bottom__organization">
                                <p>
                                ГБОУ СОШ № 653 Калининского района Санкт-Петербурга имени Рабиндраната Тагора
                                </p>
                                <p>© 2021</p>
                            </li>
                            <li class="footer-bottom__address">
                                <p>Адрес</p>
                                <p>г. Санкт-Петербург</p>
                                <p>195271, пр. Мечникова, д.5, корпус 1, литера А</p>
                            </li>
                            <li class="footer-bottom__contacts">
                                <p>
                                    <a href="tel:+78124173427"
                                        >+7 (812) 417-34-27</a
                                    >
                                </p>
                                <p>
                                    <a href="tel:+78124173464"
                                        >+7 (812) 417-34-64</a
                                    >
                                </p>
                                <p>
                                    <a href="mailto:it653@obr.gov.spb.ru"
                                        >it653@obr.gov.spb.ru</a
                                    >
                                </p>
                                <p>
                                    <a href="mailto:dou653spb@obr.gov.spb.ru"
                                        >dou653spb@obr.gov.spb.ru <br> (дошкольное отделение)</a
                                    >
                                </p>
                            </li>
                            <li
                                class="
                                    footer-bottom__socials
                                    socials socials--footer
                                "
                            >
                                <ul>
                                    <li>
                                        <a href="https://vk.com/school_653_spb">
                                            <img
                                            src="<?php echo get_theme_file_uri('/images/icons/socials-vk.svg'); ?>"
                                            alt="Ссылка на наш аккаунт вконтакте"
                                            />
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </section>
              </div>
  </footer>
</body>
</html>