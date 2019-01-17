<?php
  $page_title = 'Lista de productos';
  require_once('includes/load.php');
  $products = join_product_table();
?>
<div>
<div>
   <h1><p>Menú del día</p></h1>
 <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> Imagen</th>
                <th> Descripción </th>
                <th class="text-center" style="width: 10%;"> Precio de venta </th>
                 </tr>
            </thead>
            <tbody>
              <?php foreach ($products as $product):?>
              
                <?php if ($product['categorie']==='ejemplo'): ?>
                <tr>
                <td>
                <?php if($product['media_id'] === '0'): ?>
                    <img class="img-avatar img-circle" src="uploads/products/no_image.jpg" alt="">
                  <?php else: ?>
                  <img class="img-avatar img-circle" src="uploads/products/<?php echo $product['image']; ?>" alt="">
                <?php endif; ?>
                </td>
                <td> <?php echo remove_junk($product['name']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['sale_price']); ?></td>
              </tr>
                <?php endif; ?>
                  
             <?php endforeach; ?>
            </tbody>
          </table>
        </div>
</div>