<h3>Meus Vídeos</h3>
<?php foreach($videos as $video): ?>
  <div class="container">
    
      <div class="video">
        <a href="<?php BASE_URL; ?>/video/ver/<?php echo $video['url']; ?>"><strong><?php echo    $video['titulo']; ?></strong></a>
      </div>
   
  </div>
    
  
<?php endforeach; ?>
