<div class="section-4">
  <h2><?php the_field('virsraksts');?></h2>
<?php if(have_rows('veikali')):?>
  <div class="shop-img">
  <?php while(have_rows('veikali')): the_row();?> 
    <img src="<?php the_sub_field('attels');?>" alt="">
  <?php endwhile;?>
  </div>
<?php endif; ?>
</div>