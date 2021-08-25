<h1>Meus Vídeos</h1>
<?php foreach($videos as $video): ?>
  
    <div class="video">
      <a href="<?php BASE_URL; ?>/video/ver/<?php echo $video['url']; ?>"><strong><?php echo $video['titulo']; ?></strong></a>
    </div>
  
<?php endforeach; ?>
