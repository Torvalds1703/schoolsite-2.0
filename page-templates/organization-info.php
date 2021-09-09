<?php
/*
Template Name: Новые Сведения об ОО
*/
?>

<?php get_header(); ?>

<div class="row align-content-center">
<main class="col-12 col-lg-9 px-5 main">
      <?php get_template_part("includes/section", "pagecontent"); ?>        

<!-- <p>
  <div class="accordion accordion-requirements" id="accordionRequirements">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
          Основные сведения <i class="fas fa-school"></i>
          </button>
        </h2>
      </div>

      <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordionRequirements">

        <div class="card-body">
        <p><a href="<?php echo site_url(
                "/wp-content/uploads/2021/04/pr_831_3.1.pdf"
                ); ?>"">Требования к контенту раздела</a></p>
        <ul>
              <li>
                <a href="<?php echo site_url(
                "/about-us/obshhie-svedeniya/"
                ); ?>">Полное и сокращенное наименование организации, дата создания, учредители</a>
              </li>
              <li>
              <a href="<?php echo site_url(
                "/kontakty/"
                ); ?>"> Место нахождения, контактные телефоны, адреса электронной почты</a>
              </li> 
              <li>
              <a href="<?php echo site_url(
                "/usloviya/rezhim-raboty/"
                ); ?>"> Режим и график работы</a>
              </li>
              <li>
                <a href="<?php echo site_url(
                "/about-us/obshhie-svedeniya/"
                ); ?>"> Места осуществления образовательной деятельности</a>
              </li>
              <li>
                Представительства и филиалы <i>(Представительств и филиалов нет)</i> 
              </li>
            </ul>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="heading-2">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
            Структура и органы управления
          </button>
        </h2>
      </div>
      <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordionRequirements">
        <div class="card-body">
        <p><a href="<?php echo site_url(
                "/wp-content/uploads/2021/04/pr_831_3.2.pdf"
                ); ?>">Требования к контенту раздела</a></p>
        <ul>
              <li>
              <a href="<?php echo site_url(
                "/about-us/struktura-i-organy-upravleniya-organizacziej/"
                ); ?>">Структура образовательной организации</a>
              </li>
              <li>
              <a href="<?php echo site_url(
                "/about-us/strukturnye-podrazdeleniya/"
                ); ?>">Структурные подразделения</a>
              </li>
              <li>
              <a href="<?php echo site_url(
                "/about-us/struktura-i-organy-upravleniya-organizacziej/"
                ); ?>">Органы управления образовательной организацией</a>
              </li>
            </ul>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="heading-3">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
          Документы
          </button>
        </h2>
      </div>
      <div id="collapse-3" class="collapse" aria-labelledby="headingThree" data-parent="#accordionRequirements">
        <div class="card-body">
        <p><a href="<?php echo site_url(
                "/wp-content/uploads/2021/04/pr_831_3.3.pdf"
                ); ?>">Требования к контенту раздела</a></p>
        <ul>
              <li>
                <a href="">Устав образовательной организации</a>
              </li>
              <li>
                <a href="">Свидетельство о государственной аккредитации</a>
              </li>
              <li>
                <a href="">Правила внутреннего распорядка обучающихся</a>
              </li>
              <li>
                <a href="">Правила внутреннего трудового распорядка</a>
              </li>
              <li>
                <a href="">Коллективный договор</a>
              </li>
              <li>
                <a href="">Отчет о результатах самообследования</a>
              </li>
              <li>
                <a href="">Предписания органов, осуществляющих государственный контроль (надзор) в сфере образования, отчеты об исполнении</a>
              </li>
              <li>
                <a href="">Правила приема обучающихся</a>
              </li>
              <li>
                <a href="">Режим занятий обучающихся</a>
              </li>
              <li>
                <a href="">Формы, периодичность и порядок текущего контроля успеваемости и промежуточной аттестации обучающихся</a>
              </li>
              <li>
                <a href="">Порядок и основания перевода, отчисления обучающихся</a>
              </li>
              <li>
                <a href="">Порядок оформления отношений между образовательной организацией, обучающимися, родителями</a>
              </li>
            </ul>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="heading-4">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
          Образование
          </button>
        </h2>
      </div>
      <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordionRequirements">
        <div class="card-body">
        <p>
          <a href="<?php echo site_url(
              "/wp-content/uploads/2021/04/pr_831_3.4.pdf"
              ); ?>">Требования к контенту раздела
          </a>
        </p>
            <ul>
              <li>
                <a href="<?php echo site_url(
                "/about-us/obrazovatelnye-programmy"
                  ); ?>">Реализуемые образовательные программы
                </a>
              </li>
              <li>
                Реализуемые профессиональные образовательные программы <i>(не предусмотрено)</i>
              </li>
              <li>
                Результаты приема по каждой профессии, специальности среднего профессионального образования <i>(не предусмотрено)</i>
              </li>
              <li>
                <a href="<?php echo site_url(
                "/about-us/obrazovatelnye-programmy"
                ); ?>">Численность обучающихся
                </a>
              </li>
              <li>
              <a href="<?php echo site_url(
              "/wp-content/uploads/2021/05/liczenziya.pdf"
              ); ?>">Лицензия на осуществление образовательной деятельности</a>
              </li>
            </ul>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="heading-5">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
          Образовательные стандарты
          </button>
        </h2>
      </div>
      <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordionRequirements">
        <div class="card-body">
        <p><a href="<?php echo site_url(
                "/wp-content/uploads/2021/04/pr_831_3.5.pdf"
                ); ?>">Требования к контенту раздела</a></p>
        <ul>
              <li>
              <a href="<?php echo site_url(
                "/deyatelnost/obrazovatelnye-standarty/"
                ); ?>">Применяемые федеральные государственные образовательные стандарты</a>
              </li>
              <li>
                Утвержденные образовательные стандарты <i>(не предусмотрено)</i>
              </li>
            </ul>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="heading-6">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
          Руководство. Педагогический (научно-педагогический) состав
          </button>
        </h2>
      </div>
      <div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#accordionRequirements">
        <div class="card-body">
        <p><a href="<?php echo site_url(
                "/wp-content/uploads/2021/04/pr_831_3.6.pdf"
                ); ?>">Требования к контенту раздела</a></p>
        <ul>
              <li>
                <a href="">Руководитель образовательной организации</a>
              </li>
              <li>
                <a href="">Заместители руководителя</a>
              </li>
              <li>
                <a href="">Руководители филиалов, представительств</a>
              </li>
              <li>
                <a href="">Персональный состав педагогических работников</a>
              </li>
            </ul>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="heading-7">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-7" aria-expanded="false" aria-controls="collapseFo-7">
          Материально-техническое обеспечение и оснащенность образовательного процесса
          </button>
        </h2>
      </div>
      <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordionRequirements">
        <div class="card-body">
        <p><a href="<?php echo site_url(
                "/wp-content/uploads/2021/04/pr_831_3.7.pdf"
                ); ?>">Требования к контенту раздела</a></p>
        <ul>
              <li>
                <a href="">Оборудованные учебные кабинеты</a>
              </li>
              <li>
                <a href="">Объекты для проведения практических занятий</a>
              </li>
              <li>
                <a href="">Библиотеки</a>
              </li>
              <li>
                <a href="">Объекты спорта</a>
              </li>
              <li>
                <a href="">Средства обучения и воспитания</a>
              </li>
              <li>
                <a href="">Условия питания обучающихся</a>
              </li>
              <li>
                <a href="">Условия охраны здоровья обучающихся</a>
              </li>
              <li>
                <a href="">Доступ к информационным системам и информационно-телекоммуникационным сетям</a>
              </li>
              <li>
                <a href="">Электронные образовательные ресурсы</a>
              </li>
            </ul>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="heading-8">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
          Стипендии и меры поддержки обучающихся
          </button>
        </h2>
      </div>
      <div id="collapse-8" class="collapse" aria-labelledby="heading-8" data-parent="#accordionRequirements">
        <div class="card-body">
        <p><a href="<?php echo site_url(
                "/wp-content/uploads/2021/04/pr_831_3.8.pdf"
                ); ?>">Требования к контенту раздела</a></p>
        <ul>
              <li>
                <a href="">Стипендии, меры социальной и иной поддержки обучающихся</a>
              </li>
              <li>
                <a href="">Трудоустройство выпускников</a>
              </li>
            </ul>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="heading-9">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
          Платные образовательные услуги
          </button>
        </h2>
      </div>
      <div id="collapse-9" class="collapse" aria-labelledby="heading-9" data-parent="#accordionRequirements">
        <div class="card-body">
        <p><a href="<?php echo site_url(
                "/wp-content/uploads/2021/04/pr_831_3.9.pdf"
                ); ?>">Требования к контенту раздела</a></p>
        <ul>
              <li>
                <a href="">Порядок и стоимость оказания платных образовательных услуг</a>
              </li>
              <li>
                <a href="">Размер платы, взимаемой с родителей за присмотр и уход за детьми, осваивающими образовательные программы дошкольного образования</a>
              </li>
              <li>
                <a href="">Размер платы, взимаемой с родителей за содержание детей в образовательной организации, если в такой организации созданы условия для проживания обучающихся в интернате</a>
              </li>
              <li>
                <a href="">Размер платы, взимаемой с родителей за осуществление присмотра и ухода за детьми в группах продленного дня</a>
              </li>
            </ul>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="heading-10">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">
          Финансово-хозяйственная деятельность
          </button>
        </h2>
      </div>
      <div id="collapse-10" class="collapse" aria-labelledby="heading-10" data-parent="#accordionRequirements">
        <div class="card-body">
        <p><a href="<?php echo site_url(
                "/wp-content/uploads/2021/04/pr_831_3.10.pdf"
                ); ?>">Требования к контенту раздела</a></p>
        <ul>
              <li>
                <a href="">Объем образовательной деятельности за счет бюджета</a>
              </li>
              <li>
                <a href="">Объем образовательной деятельности по договорам об оказании платных образовательных услуг</a>
              </li>
              <li>
                <a href="">Поступление финансовых и материальных средств по итогам года</a>
              </li>
              <li>
                <a href="">Расходование финансовых и материальных средств по итогам года</a>
              </li>
              <li>
                <a href="">Копия плана финансово-хозяйственной деятельности</a>
              </li>
            </ul>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="heading-11">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-11" aria-expanded="false" aria-controls="collapse-11">
          Вакантные места для приема (перевода)
          </button>
        </h2>
      </div>
      <div id="collapse-11" class="collapse" aria-labelledby="heading-11" data-parent="#accordionRequirements">
        <div class="card-body">
        <p><a href="<?php echo site_url(
                "/wp-content/uploads/2021/04/pr_831_3.11.pdf"
                ); ?>">Требования к контенту раздела</a></p>
        <ul>
              <li>
                <a href="">Количество вакантных мест для приема (перевода) обучающихся</a>
              </li>
            </ul>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="heading-12">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-12" aria-expanded="false" aria-controls="collapse-12">
          Доступная среда
          </button>
        </h2>
      </div>
      <div id="collapse-12" class="collapse" aria-labelledby="heading-12" data-parent="#accordionRequirements">
        <div class="card-body">
        <p><a href="<?php echo site_url(
                "/wp-content/uploads/2021/04/pr_831_3.12.pdf"
                ); ?>">Требования к контенту раздела</a></p>
        <ul>
              <li>
                <a href="">Специально оборудованные учебные кабинеты</a>
              </li>
              <li>
                <a href="">Специально оборудованные объекты для проведения практических занятий</a>
              </li>
              <li>
                <a href="">Специально оборудованные библиотеки</a>
              </li>
              <li>
                <a href="">Специально оборудованные спортивные объекты</a>
              </li>
              <li>
                <a href="">Специально оборудованные средства обучения и воспитания</a>
              </li>
              <li>
                <a href="">Беспрепятственный доступ в здание</a>
              </li>
              <li>
                <a href="">Специальные условия питания</a>
              </li>
              <li>
                <a href="">Доступ к информационным системам и информационно-телекоммуникационным сетям</a>
              </li>
              <li>
                <a href="">Специальные технические средства обучения</a>
              </li>
              <li>
                <a href="">Беспрепятственный доступ в общежитие, интернат</a>
              </li>
              <li>
                <a href="">Количество специально оборудованных жилых помещений в общежитии, интернате</a>
              </li>

            </ul>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="heading-13">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-13" aria-expanded="false" aria-controls="collapse-13">
          Международное сотрудничество
          </button>
        </h2>
      </div>
      <div id="collapse-13" class="collapse" aria-labelledby="heading-13" data-parent="#accordionRequirements">
        <div class="card-body">
        <p><a href="<?php echo site_url(
                "/wp-content/uploads/2021/04/pr_831_3.13.pdf"
                ); ?>">Требования к контенту раздела</a></p>
        <ul>
              <li>
                <a href="">Заключенные и планируемые договора с иностранными, международными организациями по вопросам образования. Международная аккредитация образовательных программ</a>
              </li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</p> -->

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
            <img src="<?php echo get_theme_file_uri('/images/icons/arrow-collapse.svg'); ?>" alt="">
          </div>
        </div>
        <div class="accordeon-item__collapsing">
          <ul>
            <li>
            <a target="_blank" href="<?php echo site_url("/about-us/obshhie-svedeniya/"); ?>">Полное и сокращенное наименование организации, дата создания, учредители</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url("/kontakty/"); ?>">Место нахождения, контактные телефоны, адреса электронной почты</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url("/usloviya/rezhim-raboty/"); ?>">Режим и график работы</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url("/about-us/obshhie-svedeniya/"); ?>">Места осуществления образовательной деятельности</a>
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
            <img src="<?php echo get_theme_file_uri('/images/icons/arrow-collapse.svg'); ?>" alt="">
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
                "/about-us/strukturnye-podrazdeleniya/"
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
          <span class="accordeon-item__amount">Ссылок: 12</span>
          <span class="accordeon-item__close">Свернуть</span>
        </p>
          <div class="accordeon-item__arrow">
            <img src="<?php echo get_theme_file_uri('/images/icons/arrow-collapse.svg'); ?>" alt="">
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
                "/wp-content/uploads/2021/05/pravila-vnutrennego-rasporyadka.pdf"
                ); ?>">Правила внутреннего распорядка обучающихся</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
                "/wp-content/uploads/2021/05/pravila-vnutrennego-trudovogo-rasporyadka.pdf"
                ); ?>">Правила внутреннего трудового распорядка</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
                "/wp-content/uploads/2021/05/kollekttivnyj-dogovor-20-22.pdf"
                ); ?>">Коллективный договор</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
                "/wp-content/uploads/2021/05/samoobsledovanie-2020.pdf"
                ); ?>">Отчет о результатах самообследования</a>
            </li>
            <li class="item-inactive">
            <a href="#">Предписания органов, осуществляющих государственный контроль (надзор) в сфере образования, отчеты об исполнении (отсутствуют)</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
                "/wp-content/uploads/2021/05/pravila-priema.pdf"
                ); ?>">Правила приема обучающихся</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
                "/wp-content/uploads/2021/05/rezhim-zanyatij-obuchayushhihsya.pdf"
                ); ?>">Режим занятий обучающихся</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
                "/wp-content/uploads/2021/08/5._polozhenie_o_formah_periodichnosti_i_poryadke__pd.pdf"
                ); ?>">Формы, периодичность и порядок текущего контроля успеваемости и промежуточной аттестации обучающихся</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
                "/wp-content/uploads/2021/05/polozhenie-o-poryadke-i-osnovaniyah-perevoda-otchisleniya-i-vosstanovleniya.pdf"
                ); ?>">Порядок и основания перевода, отчисления обучающихся</a>
            </li>
            <li>
            <a target="_blank" href="<?php echo site_url(
                "/wp-content/uploads/2021/04/pr_831_3.3.pdf"
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
            <img src="<?php echo get_theme_file_uri('/images/icons/arrow-collapse.svg'); ?>" alt="">
          </div>
        </div>
        <div class="accordeon-item__collapsing">
          <ul>
            <li>
            <a href="<?php echo site_url(
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
                "/wp-content/uploads/2021/08/liczenziya.pdf"
                ); ?>">Лицензия на осуществление образовательной деятельности</a>
            </li>
          </ul>
        </div>
    </div>

    <div class="accordeon__item accordeon-item accordeon-item--noicon">
      <div class="accordeon-item__card">
        <p class="accordeon-item__heading">Образовательные стандарты</p>
        <p class="accordeon-item__subheading">
          <span class="accordeon-item__amount">Ссылок: 1</span>
          <span class="accordeon-item__close">Свернуть</span>
        </p>
          <div class="accordeon-item__arrow">
            <img src="<?php echo get_theme_file_uri('/images/icons/arrow-collapse.svg'); ?>" alt="">
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
            <img src="<?php echo get_theme_file_uri('/images/icons/arrow-collapse.svg'); ?>" alt="">
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
            <img src="<?php echo get_theme_file_uri('/images/icons/arrow-collapse.svg'); ?>" alt="">
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
                "/"
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
            <img src="<?php echo get_theme_file_uri('/images/icons/arrow-collapse.svg'); ?>" alt="">
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
            <img src="<?php echo get_theme_file_uri('/images/icons/arrow-collapse.svg'); ?>" alt="">
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
            <img src="<?php echo get_theme_file_uri('/images/icons/arrow-collapse.svg'); ?>" alt="">
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
            <img src="<?php echo get_theme_file_uri('/images/icons/arrow-collapse.svg'); ?>" alt="">
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
            <img src="<?php echo get_theme_file_uri('/images/icons/arrow-collapse.svg'); ?>" alt="">
          </div>
        </div>
        <div class="accordeon-item__collapsing">
          <ul>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/uchebnye-kabinety/"
                ); ?>">Специально оборудованные учебные кабинеты</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/obekty-dlya-provedeniya-prakticheskih-zanyatij/"
                ); ?>">Специально оборудованные объекты для проведения практических занятий</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/biblioteka/"
                ); ?>">Специально оборудованные библиотеки</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/obekty-sporta/"
                ); ?>">Специально оборудованные спортивные объекты</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/"
                ); ?>">Специально оборудованные средства обучения и воспитания</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/usloviya/dostupnaya-sreda-2/"
                ); ?>">Беспрепятственный доступ в здание</a>
            </li>
            <li>
             <a target="_blank" href="<?php echo site_url(
                "/usloviya-pitaniya-obuchayushhihsya/"
                ); ?>">Специальные условия питания</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/usloviya-ohrany-zdorovya-obuchayushhihsya/"
                ); ?>">Специальные условия охраны здоровья</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/dostup-k-informaczionnym-sistemam-i-informaczionno-telekommunikaczionnym-setyam/"
                ); ?>">Доступ к информационным системам и информационно-телекоммуникационным сетям</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/elektronnye-obrazovatelnye-resursy-k-kotorym-obespechivaetsya-dostup-obuchayushhihsya/"
                ); ?>">Доступ к электронным образовательным ресурсам</a>
            </li>
            <li>
              <a target="_blank" href="<?php echo site_url(
                "/"
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
            <img src="<?php echo get_theme_file_uri('/images/icons/arrow-collapse.svg'); ?>" alt="">
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
