<footer class="footer">
   <div class="container">
      <a class="phone" href="<?php the_field('phone');?>"><?php the_field('phone');?></a>
         <div class="footer_email">
            <span>
               <?php the_field('email');?> 
            </span>               
         </div>
   </div>
</footer>
<?php wp_footer(); ?>
</main> 
</body>
</html>