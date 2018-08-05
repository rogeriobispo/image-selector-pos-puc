<?php
  //==================================
  function localizar($vetor, $valor){
    foreach($vetor as $pos=>$conteudo){
      $existe = strpos($conteudo, $valor);
      if($existe !== FALSE){
        return $pos;
      }
    }
    return FALSE;
  }
  //==================================
  $images = array('sp-sunset.jpeg', 'rj-sunset.jpeg', 'ba-sunset.jpeg');
  $local = $_POST['state'];
  $resultado = localizar($images, $local);

 ?>
<?php include('./cabecalho.html'); ?>
<div class="row">
  <div class="col-1">
    <?php
    if($resultado!==FALSE){
      echo '<p>Pôr do sem em: '.$local.'</p><img src="./images/'.$images[$resultado].'" /> </p>';
    }
    else {
      echo '<p>Não pude localizar um põr do sol em: '.$local.'</p>';
    }
    ?>
  </div>  
</div>
<?php include('./rodape.html'); ?>
