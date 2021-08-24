<h1>Meus Vídeos</h1>
<?php foreach($videos as $video): ?>
  <div class="video">
    <strong><?php echo $video['titulo']; ?></strong>
  </div>
<?php endforeach; ?>
