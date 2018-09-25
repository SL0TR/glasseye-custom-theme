<?php 
  // Main Footer File
?>

  <footer class="footer">
      <nav>
      <?php 
        wp_nav_menu($arg = array (
          'menu_class' => 'footer-nav',
          'theme_location' => 'footer'
        ))
      ?>
      </nav>
      <p class="copyright">
          <small>All content on this site &copy; Glass Eye Creative</small>
      </p>
  </footer>
<?php wp_footer(); ?>
</body>

</html>