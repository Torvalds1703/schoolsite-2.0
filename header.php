<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
  name="description"           
  content="Сайт СОШ № 653
        Калининского района Санкт-Петербурга
        имени Рабиндраната Тагора">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="page-wrapper">

        <?php get_template_part("components/hero-section"); ?>
        
        <?php get_template_part("components/navbar"); ?>

        <?php get_template_part("components/citation"); ?>
    



<!-- 
     <div class="container">
     <?php
// wp_nav_menu([
//  "theme_location" => "top-menu",
//  "menu_class" => "top-bar",
//  "menu" => "Tob Bar",
//]);
?>
     </div>   -->