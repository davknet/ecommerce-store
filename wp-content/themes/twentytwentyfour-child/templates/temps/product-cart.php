<?php 




$product_title   = $args['title']   ? $args['title']     : ' ' ;
$product_excerpt = $args['excerpt'] ? $args['excerpt']   : ' ' ;
$product_price   = $args['price']   ? $args['price']     : ' ' ;
$product_img     = $args['image']   ? get_stylesheet_directory_uri() . '/src/img/' . $args['image'] :get_stylesheet_directory_uri(). '/src/img/default-product.jpg' ;

?>  


<?php  if(isset($args) &&  count($args) > 0 ):  ?>

<div class="product-card">
            <img src="<?php  echo $product_img ?>" alt="Product Image" class="product-image">
            <h2 class="product-title"><?php echo $product_title    ; ?> </h2>
            <p class="product-excerpt"><?php echo $product_excerpt ; ?> </p>
            <div class="product-price"><?php echo  $product_price  ; ?></div>
            <div class="product-sizes">
                <span>Sizes:</span>
                <button class="size-button">S</button>
                <button class="size-button">M</button>
                <button class="size-button">L</button>
                <button class="size-button">XL</button>
            </div>
</div> 

<?php  endif; ?>