</div>
  <footer class="footer">
    <?php wp_nav_menu([
                "theme_location" => "footer-menu",
                "depth" => 1,
                "container" => "nav",
                "container_class" =>
                "collapse navbar-collapse",
                "container_id" => "bs-example-navbar-collapse-1",
                "menu_class" => "navbar-footer",
              ]); ?>
    <?php wp_footer(); ?>
  </footer>
</body>
</html>