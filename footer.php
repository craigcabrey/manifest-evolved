</div>

<div id="footer">
  <!-- Footer Links -->
  <ul class="elsewhere">
    <?php wp_list_bookmarks('categorize=0&title_li=&category_name=footer&show_images=0'); ?>
  </ul>

  <!-- Search Field -->
  <div class="footerSearch">
    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
      <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
      <input type="submit" id="searchsubmit" value="Search" />
    </form>
  </div>

  <!-- Author & Theme info -->
  <ul class="footerContent">
    <li>&copy; <?php bloginfo('name'); ?></li>
    <li><a href="http://jimbarraud.com/manifest/">Manifest</a> by <a href="http://jimbarraud.com/">Jim Barraud</a></li>
  </ul>
</div>

<?php wp_footer(); ?>

</body>
</html>
