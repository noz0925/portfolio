<?php
  $front_page_id = get_option('page_on_front');

  if( have_rows('common', $front_page_id) ):
  while( have_rows('common', $front_page_id) ): the_row();

  if( have_rows('menu_list', $front_page_id) ):
  while( have_rows('menu_list', $front_page_id) ): the_row();
    $menu_item1 = get_sub_field('menu_item1') ;
    $menu_item2 = get_sub_field('menu_item2') ;
    $menu_item3 = get_sub_field('menu_item3') ;
    $menu_item4 = get_sub_field('menu_item4') ;
    $menu_item5 = get_sub_field('menu_item5') ;
?>
  <nav class="c-gnav">
    <ul class="c-gnav-list">
      <li class="c-gnav-item"><a href="<?= $menu_item1['link']['url']; ?>" class="c-gnav-link"><?= $menu_item1['title_en']; ?></a></li>
      <li class="c-gnav-item"><a href="<?= $menu_item2['link']['url']; ?>" class="c-gnav-link"><?= $menu_item2['title_en']; ?></a></li>
      <li class="c-gnav-item"><a href="<?= $menu_item3['link']['url']; ?>" class="c-gnav-link"><?= $menu_item3['title_en']; ?></a></li>
      <li class="c-gnav-item"><a href="<?= $menu_item4['link']['url']; ?>" class="c-gnav-link"><?= $menu_item4['title_en']; ?></a></li>
      <?php /*<li class="c-gnav-item"><a href="<?= $menu_item5['link']['url']; ?>" class="c-gnav-link"><?= $menu_item5['title_en']; ?></a></li>*/ ?>
    </ul>
  </nav>
<?php
  endwhile;
  endif; 
  endwhile;
  endif;
?>