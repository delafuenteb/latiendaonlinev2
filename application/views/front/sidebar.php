<section>
  
  <div class="separador1">
    <h4>BUSCAR TIENDAS</h4>
  </div>

  <form action="">

    <div class="form-group">
      <label>Palabra Clave</label>
      <input type="text" class="form-control" id="#" placeholder="Ej: Mascotas">
    </div>

    <div class="form-group">
      <label>Categoría</label>
      
      <select class="form-control">
      <option>SELECCIONE UNA CATEGORÍA</option>
            <?php 
    for ($i = 1; $i <= count($categoria); $i++)
          {
          if( array_key_exists($i, $categoria)){
     ?>
              
              <option value="<?php echo $i ?>"><?php echo $categoria[$i] ?></option>
    <?php
                }
           }
    ?>
        
      </select>
    </div>

    <div class="form-group">
      <label>Región</label>
      <select class="form-control">
        <option>VII Maule</option>
        <option>VIII Bio Bio</option>
        <option>IX Ohiggins</option>
        <option>X Araucanía</option>
        <option>XX Los Lagos</option>
      </select>
    </div>

    <div class="form-group">
      <label>Ciudad</label>
      <select class="form-control">
        <option>Talca</option>
        <option>Paris</option>
        <option>Londres</option>
        <option>Curico</option>
        <option>Chillan</option>
      </select>
    </div>

    <button class="btn btn-default center-block" type="submit"><i class="fa fa-search"></i> Buscar</button>
  </form>

  <div class="separador1">
    <h4>TOP 10 CATEGORÍAS</h4>
  </div>

  <div id="menu-categoria">
    <ul class="fa-ul">
      <li><i class="fa-li fa fa-user"></i>Categoría</li>
      <li><i class="fa-li fa fa-home"></i>Categoría</li>
      <li><i class="fa-li fa fa-dashboard"></i>Categoría</li>
      <li><i class="fa-li fa fa-pencil"></i>Categoría</li>
      <li><i class="fa-li fa fa-facebook"></i>Categoría</li>
      <li><i class="fa-li fa fa-twitter"></i>Categoría</li>
      <li><i class="fa-li fa fa-dashboard"></i>Categoría</li>
      <li><i class="fa-li fa fa-pencil"></i>Categoría</li>
      <li><i class="fa-li fa fa-facebook"></i>Categoría</li>
      <li><i class="fa-li fa fa-twitter"></i>Categoría</li>
    </ul>
  </div>

  <div class="separador1">
    <h4>PUBLICIDAD</h4>
  </div>

  <img class="img-responsive" src="holder.js/300x300/auto" alt="">

</section>