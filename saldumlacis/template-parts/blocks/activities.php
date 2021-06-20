<div class="section-2">
  <h2><?php the_field('virsraksts');?></h2>
  <p><?php the_field('apraksts');?></p>

<?php if(have_rows('atteli')):?>
  <div class="color-img">
  <?php while(have_rows('atteli')): the_row();?> 
    <img src="<?php the_sub_field('attels');?>" alt="">
  <?php endwhile;?>
  </div>
<?php endif; ?>

  <button class="activity-btn"><a href="#"><?php the_field('pogas_teksts');?></a></button>
</div>