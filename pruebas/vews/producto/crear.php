<h1>Crear nuevos productos</h1>

<div class="Form_container">
<form action="#/producto/save" method="post">
  <label for="nombre">Nombre</label>
  <input type="text" name="nombre">
  
  <label for="descripcion">Descripcion</label>
	<textarea name="descripcion"></textarea>
  
  <label for="precio">Precio</label>
  <input type="text" name="precio">
  
  <label for="stok">Stok</label>
  <input type="text" name="stok">
  
  <label for="categoria">Categoria</label>
  <?php $categorias = Utils::showCategorias();?>
  <select name="categoria">
  	<?php while($cat = $categorias->fetch_object()):?>
  	<option value="<?=$cat->id?>">
  	  <?=$cat->nombre?>
	  </option>
	  <?php endwhile; ?>
  </select>
  
  <label for="imagen">imagen</label>
  <input type="file" name="imagen">
  
  <input type="submit" value="Guardar">
	
</form>
</div>