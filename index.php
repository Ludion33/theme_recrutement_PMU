<!-- chercher et ouvrir header.php -->

<?php get_header(); ?> 

<p>Ceci est index.php</p>
<!-- ouverture div "content" dans index.php -->
<div id="content">  
  <?php if(have_posts()) : ?>   <!-- on vérifie s'il y a des articles -->
    <?php while(have_posts()) : the_post();?>   <!-- tant qu'il y a des articles, on boucle dessus pour les afficher un par un -->
      <!-- exemple de contenu d'un article (qui se trouve dans la boucle WordPress) -->
      <div class= "post" id="<?php get_the_ID() ?>"> <!--class générique à tous les articles + class personnalisée avec l'ID-->
        <p class="postmetadata">
          <?php the_category();?>    <!--afficher la catégorie de l'article-->
          <strong>| </strong>
          <?php the_title();?>   <!--afficher le titre de l'article-->
          <strong>| </strong>
          <?php the_date();?>    <!--afficher la date de l'article-->
        </p>
        <div class= "post_content">
          <?php the_content(); ?> <!--afficher le contenu de l'article-->
        </div>
        
      </div>
    <?php endwhile; ?>  <!-- fermeture de la boucle -->
  <?php endif; ?> <!-- fermeture de la vérification d'existence d'article -->
</div>  
<!-- fermeture div "content" dans index.php -->



<!-- chercher et ouvrir footer.php -->
<?php get_footer() ?> 
