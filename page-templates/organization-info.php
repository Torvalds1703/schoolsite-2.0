<?php
/*
Template Name: Новые Сведения об ОО
*/
?>

<?php get_header(); ?>

<div class="row align-content-center">
<main class="col-12 col-lg-9 px-5 main">
      <?php get_template_part("includes/section", "pagecontent"); ?>        
<p>
  <section class="accordeon-section">
    <div class="accordeon__item accordeon-item accordeon-item--noicon">
      <div class="accordeon-item__card">
        <p class="accordeon-item__heading">Основные сведения</p>
        <p class="accordeon-item__subheading">
          <span class="accordeon-item__amount">Ссылок: 4</span>
          <span class="accordeon-item__close">Свернуть</span>
        </p>
          <div class="accordeon-item__arrow">
            <img src="<?php echo get_theme_file_uri(
              "/images/icons/arrow-collapse.svg"
            ); ?>" alt="">
          </div>
        </div>
        <div class="accordeon-item__collapsing">
          <ul>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/about-us/obshhie-svedeniya/"
            ); ?>">Полное и сокращенное наименование организации, дата создания, учредители</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/kontakty/"
            ); ?>">Место нахождения, контактные телефоны, адреса электронной почты</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/usloviya/rezhim-raboty/"
            ); ?>">Режим и график работы</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/about-us/obshhie-svedeniya/"
            ); ?>">Места осуществления образовательной деятельности</a>
            </li>
            <li class="item-inactive">
              <a target="_blank" href="#">Представительства и филиалы (отсутствуют)</a>
            </li>
          </ul>
        </div>
    </div>


    <div class="accordeon__item accordeon-item accordeon-item--noicon">
      <div class="accordeon-item__card">
        <p class="accordeon-item__heading">Структура и органы управления</p>
        <p class="accordeon-item__subheading">
          <span class="accordeon-item__amount">Ссылок: 3</span>
          <span class="accordeon-item__close">Свернуть</span>
        </p>
          <div class="accordeon-item__arrow">
            <img src="<?php echo get_theme_file_uri(
              "/images/icons/arrow-collapse.svg"
            ); ?>" alt="">
          </div>
        </div>
        <div class="accordeon-item__collapsing">
          <ul>
              <li>
                <a target="_blank" href="<?php echo site_url(
                  "/about-us/struktura-i-organy-upravleniya-organizacziej/"
                ); ?>">Структура образовательной организации</a>
              </li>
              <li>
                <a target="_blank" href="<?php echo site_url(
                  "/about-us/struktura-i-organy-upravleniya-organizacziej/"
                ); ?>">Структурные подразделения</a>
              </li>
              <li>
                <a target="_blank" href="<?php echo site_url(
                  "/about-us/struktura-i-organy-upravleniya-organizacziej/"
                ); ?>">Органы управления образовательной организацией</a>
              </li>
          </ul>
        </div>
    </div>

    <div class="accordeon__item accordeon-item accordeon-item--noicon">
      <div class="accordeon-item__card">
        <p class="accordeon-item__heading">Документы</p>
        <p class="accordeon-item__subheading">
          <span class="accordeon-item__amount">Ссылок: 13</span>
          <span class="accordeon-item__close">Свернуть</span>
        </p>
          <div class="accordeon-item__arrow">
            <img src="<?php echo get_theme_file_uri(
              "/images/icons/arrow-collapse.svg"
            ); ?>" alt="">
          </div>
        </div>
        <div class="accordeon-item__collapsing">
          <ul>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/wp-content/uploads/2021/08/ustav1.pdf"
            ); ?>">Устав образовательной организации</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/wp-content/uploads/2021/05/svidetelstvo-akkreditacziya.pdf"
            ); ?>">Свидетельство о государственной аккредитации</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/wp-content/uploads/2021/10/pravila-vnutrennego-rasporyadka-obuchayushhihsya-2021.pdf"
            ); ?>">Правила внутреннего распорядка обучающихся</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/wp-content/uploads/2022/02/pravila-vnutrennego-trudovogo-rasporyadka.pdf"
            ); ?>">Правила внутреннего трудового распорядка</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/wp-content/uploads/2021/05/kollekttivnyj-dogovor-20-22.pdf"
            ); ?>">Коллективный договор</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/wp-content/uploads/2022/05/samoobsled.pdf"
            ); ?>">Отчет о результатах самообследования</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/provedenie-oczenochnyh-proczedur/"
            ); ?>">Проведение оценочных процедур</a>
            </li>
            <li class="item-inactive">
            <a href="#">Предписания органов, осуществляющих государственный контроль (надзор) в сфере образования, отчеты об исполнении (отсутствуют)</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/wp-content/uploads/2021/10/pravila-priema-obuchayushhihsya-v-ou-2-2021.pdf"
            ); ?>">Правила приема обучающихся</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/wp-content/uploads/2021/10/rezhim-zanyatij-obuchayushhihsya-2021.pdf"
            ); ?>">Режим занятий обучающихся</a>
            </li>
            <li>
              
            <a target="_blank" href="<?php echo site_url(
              "/wp-content/uploads/2021/10/polozhenie_o_formah_periodichnosti_i_poryadke_tekushhego_kontrolya_uspevaemosti_2-2021.pdf"
            ); ?>">Формы, периодичность и порядок текущего контроля успеваемости и промежуточной аттестации обучающихся</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/wp-content/uploads/2021/10/poryadok-i-osnovaniya-perevoda-otchisleniya-i-vosstanovleniya-obuchayushhihsya-2021.pdf"
            ); ?>">Порядок и основания перевода, отчисления обучающихся</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/wp-content/uploads/2021/10/poryadok-oformleniya-vozniknoveniya-2021.pdf"
            ); ?>">Порядок оформления отношений между образовательной организацией, обучающимися, родителями</a>
            </li>
          </ul>
        </div>
    </div>

    <div class="accordeon__item accordeon-item accordeon-item--noicon">
      <div class="accordeon-item__card">
        <p class="accordeon-item__heading">Образование</p>
        <p class="accordeon-item__subheading">
          <span class="accordeon-item__amount">Ссылок: 3</span>
          <span class="accordeon-item__close">Свернуть</span>
        </p>
          <div class="accordeon-item__arrow">
            <img src="<?php echo get_theme_file_uri(
              "/images/icons/arrow-collapse.svg"
            ); ?>" alt="">
          </div>
        </div>
        <div class="accordeon-item__collapsing">
          <ul>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/deyatelnost/obrazovatelnye-programmy/"
            ); ?>">Реализуемые образовательные программы</a>
            </li>
            <li class="item-inactive">
              <a href="#">Реализуемые профессиональные образовательные программы (не предусмотрено)</a>
            </li>
            <li class="item-inactive">
              <a href="#">Результаты приема по каждой профессии, специальности среднего профессионального образования (не предусмотрено)</a>
            </li>
            <li>
            <a href="<?php echo site_url(
              "/deyatelnost/obrazovatelnye-programmy/"
            ); ?>">Численность обучающихся</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/wp-content/uploads/2021/12/liczenziya-s-prilozheniem.pdf"
            ); ?>">Лицензия на осуществление образовательной деятельности (с приложениями)</a>
            </li>
          </ul>
        </div>
    </div>

    <div class="accordeon__item accordeon-item accordeon-item--noicon">
      <div class="accordeon-item__card">
        <p class="accordeon-item__heading">Образовательные стандарты и требования</p>
        <p class="accordeon-item__subheading">
          <span class="accordeon-item__amount">Ссылок: 1</span>
          <span class="accordeon-item__close">Свернуть</span>
        </p>
          <div class="accordeon-item__arrow">
            <img src="<?php echo get_theme_file_uri(
              "/images/icons/arrow-collapse.svg"
            ); ?>" alt="">
          </div>
        </div>
        <div class="accordeon-item__collapsing">
          <ul>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/deyatelnost/obrazovatelnye-standarty/"
            ); ?>">Применяемые федеральные государственные образовательные стандарты</a>
            </li>
            <li class="item-inactive">
              <a href="#">Утвержденные образовательные стандарты (не предусмотрено)</a>
            </li>
          </ul>
        </div>
    </div>

    <div class="accordeon__item accordeon-item accordeon-item--noicon">
      <div class="accordeon-item__card">
        <p class="accordeon-item__heading">Руководство. Педагогический (научно-педагогический) состав</p>
        <p class="accordeon-item__subheading">
          <span class="accordeon-item__amount">Ссылок: 4</span>
          <span class="accordeon-item__close">Свернуть</span>
        </p>
          <div class="accordeon-item__arrow">
            <img src="<?php echo get_theme_file_uri(
              "/images/icons/arrow-collapse.svg"
            ); ?>" alt="">
          </div>
        </div>
        <div class="accordeon-item__collapsing">

          <ul>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/kontakty/rukovodstvo-obrazovatelnoj-organizaczii/"
              ); ?>">Руководитель образовательной организации</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/kontakty/speczialisty-obrazovatelnoj-organizaczii/"
            ); ?>">Заместители руководителя</a>
            </li>
            <li class="item-inactive">
            <a target="_blank">Руководители филиалов, представительств (отсутствуют)</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/kollektiv/rabotniki-obrazovatelnoj-organizaczii-2/"
            ); ?>">Персональный состав педагогических работников</a>
            </li>
          </ul>
        </div>
    </div>

    <div class="accordeon__item accordeon-item accordeon-item--noicon">
      <div class="accordeon-item__card">
        <p class="accordeon-item__heading">Материально-техническое обеспечение и оснащенность образовательного процесса</p>
        <p class="accordeon-item__subheading">
          <span class="accordeon-item__amount">Ссылок: 9</span>
          <span class="accordeon-item__close">Свернуть</span>
        </p>
          <div class="accordeon-item__arrow">
            <img src="<?php echo get_theme_file_uri(
              "/images/icons/arrow-collapse.svg"
            ); ?>" alt="">
          </div>
        </div>
        <div class="accordeon-item__collapsing">
          <ul>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/uchebnye-kabinety/"
            ); ?>">Оборудованные учебные кабинеты</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/obekty-dlya-provedeniya-prakticheskih-zanyatij/"
            ); ?>">Объекты для проведения практических занятий</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/biblioteka/"
            ); ?>">Библиотеки</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/obekty-sporta/"
            ); ?>">Объекты спорта</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/sredstva-obucheniya-i-vospitaniya/"
            ); ?>">Средства обучения и воспитания</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/usloviya-pitaniya-obuchayushhihsya/"
            ); ?>">Условия питания обучающихся</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/usloviya-ohrany-zdorovya-obuchayushhihsya/"
            ); ?>">Условия охраны здоровья обучающихся</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/dostup-k-informaczionnym-sistemam-i-informaczionno-telekommunikaczionnym-setyam/"
            ); ?>">Доступ к информационным системам и информационно-телекоммуникационным сетям</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/elektronnye-obrazovatelnye-resursy-k-kotorym-obespechivaetsya-dostup-obuchayushhihsya/"
            ); ?>">Электронные образовательные ресурсы</a>
            </li>
          </ul>
        </div>
    </div>

    <div class="accordeon__item accordeon-item accordeon-item--noicon">
      <div class="accordeon-item__card">
        <p class="accordeon-item__heading">Стипендии и меры поддержки обучающихся</p>
        <p class="accordeon-item__subheading">
          <span class="accordeon-item__amount">Ссылок: 0</span>
          <span class="accordeon-item__close">Свернуть</span>
        </p>
          <div class="accordeon-item__arrow">
            <img src="<?php echo get_theme_file_uri(
              "/images/icons/arrow-collapse.svg"
            ); ?>" alt="">
          </div>
        </div>
        <div class="accordeon-item__collapsing">
          <ul>
            <li class="item-inactive">
              <a href="#">Стипендии, меры социальной и иной поддержки обучающихся (не предусмотрено)</a>
            </li>
            <li class="item-inactive">
              <a href="#">Трудоустройство выпускников (не предусмотрено)</a>
            </li>
          </ul>
        </div>
    </div>

    <div class="accordeon__item accordeon-item accordeon-item--noicon">
      <div class="accordeon-item__card">
        <p class="accordeon-item__heading">Платные образовательные услуги</p>
        <p class="accordeon-item__subheading">
          <span class="accordeon-item__amount">Ссылок: 1</span>
          <span class="accordeon-item__close">Свернуть</span>
        </p>
          <div class="accordeon-item__arrow">
            <img src="<?php echo get_theme_file_uri(
              "/images/icons/arrow-collapse.svg"
            ); ?>" alt="">
          </div>
        </div>
        <div class="accordeon-item__collapsing">
          <ul>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/finansirovanie/platnye-obrazovatelnye-uslugi/"
            ); ?>">Порядок и стоимость оказания платных образовательных услуг</a>
            </li>
            <li class="item-inactive">
              <a href="#">Размер платы, взимаемой с родителей за присмотр и уход за детьми, осваивающими образовательные программы дошкольного образования (данный вид услуг не оказывается)</a>
            </li>
            <li class="item-inactive">
              <a href="#">Размер платы, взимаемой с родителей за содержание детей в образовательной организации, если в такой организации созданы условия для проживания обучающихся в интернате (данный вид услуг не оказывается)</a>
            </li>
            <li class="item-inactive">
              <a href="#">Размер платы, взимаемой с родителей за осуществление присмотра и ухода за детьми в группах продленного дня (данный вид услуг не оказывается)</a>
            </li>
          </ul>
        </div>
    </div>

    <div class="accordeon__item accordeon-item accordeon-item--noicon">
      <div class="accordeon-item__card">
        <p class="accordeon-item__heading">Финансово-хозяйственная деятельность</p>
        <p class="accordeon-item__subheading">
          <span class="accordeon-item__amount">Ссылок: 4</span>
          <span class="accordeon-item__close">Свернуть</span>
        </p>
          <div class="accordeon-item__arrow">
            <img src="<?php echo get_theme_file_uri(
              "/images/icons/arrow-collapse.svg"
            ); ?>" alt="">
          </div>
        </div>
        <div class="accordeon-item__collapsing">
          <ul>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/finansirovanie/byudzhetnoe-finansirovanie/"
            ); ?>">Объем образовательной деятельности за счет бюджета</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/finansirovanie/byudzhetnoe-finansirovanie/"
            ); ?>">Объем образовательной деятельности по договорам об оказании платных образовательных услуг</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/finansirovanie/byudzhetnoe-finansirovanie/"
            ); ?>">Поступление финансовых и материальных средств по итогам года</a>
            </li>
            <li class="item-inactive">
              <a href="#">Расходование финансовых и материальных средств по итогам года</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/finansirovanie/byudzhetnoe-finansirovanie/"
            ); ?>">Копия плана финансово-хозяйственной деятельности</a>
            </li>
          </ul>
        </div>
    </div>

    <div class="accordeon__item accordeon-item accordeon-item--noicon">
      <div class="accordeon-item__card">
        <p class="accordeon-item__heading">Вакантные места для приема (перевода)</p>
        <p class="accordeon-item__subheading">
          <span class="accordeon-item__amount">Ссылок: 1</span>
          <span class="accordeon-item__close">Свернуть</span>
        </p>
          <div class="accordeon-item__arrow">
            <img src="<?php echo get_theme_file_uri(
              "/images/icons/arrow-collapse.svg"
            ); ?>" alt="">
          </div>
        </div>
        <div class="accordeon-item__collapsing">
          <ul>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/vakantnye-mesta-dlya-priema-perevoda/"
            ); ?>">Количество вакантных мест для приема (перевода) обучающихся</a>
            </li>
          </ul>
        </div>
    </div>

    <div class="accordeon__item accordeon-item accordeon-item--noicon">
      <div class="accordeon-item__card">
        <p class="accordeon-item__heading">Доступная среда</p>
        <p class="accordeon-item__subheading">
          <span class="accordeon-item__amount">Ссылок: 11</span>
          <span class="accordeon-item__close">Свернуть</span>
        </p>
          <div class="accordeon-item__arrow">
            <img src="<?php echo get_theme_file_uri(
              "/images/icons/arrow-collapse.svg"
            ); ?>" alt="">
          </div>
        </div>
        <div class="accordeon-item__collapsing">
          <ul>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/usloviya/dostupnaya-sreda-2/"
              ); ?>">Специально оборудованные учебные кабинеты</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/usloviya/dostupnaya-sreda-2/"
              ); ?>">Специально оборудованные объекты для проведения практических занятий</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/usloviya/dostupnaya-sreda-2/"
              ); ?>">Специально оборудованные библиотеки</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/usloviya/dostupnaya-sreda-2/"
              ); ?>">Специально оборудованные спортивные объекты</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/usloviya/dostupnaya-sreda-2/"
              ); ?>">Специально оборудованные средства обучения и воспитания</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/usloviya/dostupnaya-sreda-2/"
              ); ?>">Беспрепятственный доступ в здание</a>
            </li>
            <li>
             <a target="_blank" href="<?php echo site_url(
               "/usloviya/dostupnaya-sreda-2/"
             ); ?>">Специальные условия питания</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/usloviya/dostupnaya-sreda-2/"
              ); ?>">Специальные условия охраны здоровья</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/usloviya/dostupnaya-sreda-2/"
              ); ?>">Доступ к информационным системам и информационно-телекоммуникационным сетям</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/usloviya/dostupnaya-sreda-2/"
              ); ?>">Доступ к электронным образовательным ресурсам</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/usloviya/dostupnaya-sreda-2/"
              ); ?>">Специальные технические средства обучения</a>
            </li>
            <li class="item-inactive">
              <a href="#">Беспрепятственный доступ в общежитие, интернат (не предусмотрено)</a>
            </li>
            <li class="item-inactive">
              <a href="#">Количество специально оборудованных жилых помещений в общежитии, интернате (не предусмотрено)</a>
            </li>
          </ul>
        </div>
    </div>

    <div class="accordeon__item accordeon-item accordeon-item--noicon">
      <div class="accordeon-item__card">
        <p class="accordeon-item__heading">Международное сотрудничество</p>
        <p class="accordeon-item__subheading">
          <span class="accordeon-item__amount">Ссылок: 1</span>
          <span class="accordeon-item__close">Свернуть</span>
        </p>
          <div class="accordeon-item__arrow">
            <img src="<?php echo get_theme_file_uri(
              "/images/icons/arrow-collapse.svg"
            ); ?>" alt="">
          </div>
        </div>
        <div class="accordeon-item__collapsing">
          <ul>
            <li>
            <a target="_blank" href="<?php echo site_url(
              "/mezhdunarodnoe-sotrudnichestvo/mezhdunarodnye-partnery/"
            ); ?>">Заключенные и планируемые договора с иностранными, международными организациями по вопросам образования. Международная аккредитация образовательных программ</a>
            </li>
          </ul>
        </div>
    </div>
  </section>
</p>

    <p class="h5 my-4"> Требования Федерального законодательства: </p>
     <ul>

     <li><a href="http://www.kremlin.ru/acts/bank/36698">Статья 29 Федерального закона от 29.12.2012 № 273-ФЗ «Об образовании в Российской Федерации»</a></li>

     <li><a href="https://minobr.orb.ru/documents/other/5787/">Постановление Правительства РФ от 10.07.2013 N 582 (ред. от 11.07.2020) «Об утверждении Правил размещения на официальном сайте образовательной организации в информационно-телекоммуникационной сети «Интернет» и обновления информации об образовательной организации»</a></li>

     <li><a href="http://publication.pravo.gov.ru/Document/View/0001202011130032">Приказ Рособрнадзора от 14.08.2020 № 831 «Об утверждении Требований к структуре официального сайта образовательной организации в информационно-телекоммуникационной сети "Интернет" и формату представления информации»</a></li>
     </ul>

    </main>
    <?php get_sidebar(); ?>
  </div>

</div>

<?php get_footer();
?>
