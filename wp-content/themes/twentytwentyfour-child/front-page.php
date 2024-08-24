<?php 




/**
 * Template Name: Custom Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty-Four_Child
 * @since Twenty Twenty-Four Child 1.0
 */
get_header(); ?>


         <div class="product-card">
            <img src="<?php echo get_stylesheet_directory_uri(). '/src/img/default-product.jpg' ;  ?>" alt="Product Image" class="product-image">
            <h2 class="product-title">Product Title</h2>
            <p class="product-excerpt">This is a short description of the product, highlighting its key features and benefits.</p>
            <div class="product-price">$29.99</div>
            <div class="product-sizes">
                <span>Sizes:</span>
                <button class="size-button">S</button>
                <button class="size-button">M</button>
                <button class="size-button">L</button>
                <button class="size-button">XL</button>
            </div>
        </div> 



















<?php
get_footer();
