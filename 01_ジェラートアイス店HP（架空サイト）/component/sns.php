<?php
  $front_page_id = get_option('page_on_front');

  if( have_rows('common', $front_page_id) ):
  while( have_rows('common', $front_page_id) ): the_row();

  if( have_rows('header_sns', $front_page_id) ):
  while( have_rows('header_sns', $front_page_id) ): the_row();
    $sns_item1 = get_sub_field('header_sns_instagram') ;
    $sns_item2 = get_sub_field('header_sns_twitter') ;
    $sns_item3 = get_sub_field('header_sns_facebook') ;
    $sns_item4 = get_sub_field('header_sns_line') ;
    if( $sns_item1 || $sns_item2 || $sns_item3 || $sns_item4 ):
?>
  <nav class="c-sns">
    <ul class="c-sns-list">
      <?php if($sns_item1): ?>
        <li class="c-sns-item"><a href="<?= $sns_item1; ?>" target='_blank' rel='noopener noreferrer' class="c-sns-link"><i class="fa-brands fa-instagram"></i></a></li>
      <?php endif; ?>
      <?php if($sns_item2): ?>
        <li class="c-sns-item"><a href="<?= $sns_item2; ?>" target='_blank' rel='noopener noreferrer' class="c-sns-link"><i class="fa-brands fa-twitter"></i></a></li>
      <?php endif; ?>
      <?php if($sns_item3): ?>
        <li class="c-sns-item"><a href="<?= $sns_item3; ?>" target='_blank' rel='noopener noreferrer' class="c-sns-link"><i class="fa-brands fa-facebook"></i></a></li>
      <?php endif; ?>
      <?php if($sns_item4): ?>
        <li class="c-sns-item"><a href="<?= $sns_item4; ?>" target='_blank' rel='noopener noreferrer' class="c-sns-link"><i class="fa-brands fa-line"></i></a></li>
      <?php endif; ?>
    </ul>
  </nav>
<?php
  endif; 
  endwhile;
  endif; 
  endwhile;
  endif;
?>