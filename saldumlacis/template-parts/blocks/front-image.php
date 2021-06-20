<div class="section-1">
  <img class="side-menu" src="<?php the_field('side_menu');?>" alt="">
    <div class="front-img">
      <img class="front-img-m" src="<?php the_field('background_img');?>" alt="">
        <div class="front-img-text">
          <h1><?php the_field('title');?></h1>
          <p class="p-1"><?php the_field('description');?></p>
          <p class="p-2"><?php the_field('poem');?></p>
          <button class="front-btn">
            <a href="#"><?php the_field('btn_text');?></a>
          </button>
        </div>
    </div>
  <img class="side-menu" src="<?php the_field('side_menu');?>" alt="">
</div>