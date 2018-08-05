<?php include('./cabecalho.html') ?>
<form method="post" action="./mostrar.php"  name="pordosol">
  <div class="row">
    <div class="col-1">
      <labeL>escolha um por do sol</labeL>
    </div>
    <div class="col-1">
      <select name="state" class="options">
        <option value="sp"> São paulo </option>
        <option value="rj"> Rio de Janeiro </option>
        <option value="ba"> Bahia </option>
      </select><br />
    </div>

    <div class="col-1">
      <input type="submit" value="Mostar" class="btn" /><br />
    </div>
  </div>
</form>
<?php include('./rodape.html') ?>
