<?php get_header() ?>
   <main class="main">
      <div class="container">
            <div class="main_title">
            <?php the_field('main_title');?>
            </div>
            <div class="main_text">
            <?php the_field('main_text');?>
            </div>
            <div class="main_img">
               <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/main-img.png" alt=""> <!--постоянные картинки -->
            </div>
         <div class="project">
            <div class="project_title">
            <?php the_field('project_title');?>  
            </div>                     
            <?php 
               $posts = get_field('project_item');
               if( $posts ): ?>
                  <ul>
                  <?php foreach( $posts as $post): ?>
                     <?php setup_postdata($post); ?>
                     <li class="project_item">                        
                        <div class="project_name">
                           <?php the_field('project_name');?>
                        </div>
                        <div class="project_size">
                           <?php the_field('project_size');?>
                           <!--   Размер дома: 6 x 6 -->
                        </div>
                        <div class="project_area">
                           <?php the_field('project_area');?>
                           <!-- Общая площадь дома: 54 кв. м -->
                        </div>
                        <div class="project_price">
                           <?php the_field('project_price');?>
                           <!--    Стоимость - 402 000 рублей -->
                        </div>
                        <div class="project_images">
                           <div class="project_images-item-1">
                              <img src="<?php the_field('project_images-item-1');?>" alt="">
                           </div>
                           <div class="project_images-item-2">
                              <img src="<?php the_field('project_images-item-2');?>" alt="">
                           </div>
                        </div>
                     </li>
                  <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); ?>
               <?php endif; ?>                         
         </div>
      </div>    
                  <div class="download">
                     <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/home-download.png" alt=""> <!--постоянные картинки -->
                     <div class="download_link">
                        <a href="<?php the_field('download_link');?>">СКАЧАТЬ ВЕСЬ КАТАЛОГ ДОМОВ</a>
                     </div>
                  </div>
      <div class="container">
         <div class="gallery">
            <div class="gallery_title">
            <?php the_field('gallery_title');?>
            </div>
            <div class="gallery_text">
            <?php the_field('gallery_text');?>
            </div>
            <div id="gallery_inner">
            <?php the_field('gallery');?>        
            </div>
         </div>
         <div class="main_img">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/main-img.png" alt=""> <!--постоянные картинки -->
         </div>
      </div>
         <?php get_footer() ?>      
         