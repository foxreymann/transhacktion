<?php
    include('header.php');
    include('products.php');
?>
    <div class="row" id="products">
    <ul class="unstyled">
<?php
    foreach($products as $key => $product) {
?>
        <li>
            <a href="product.php">
                <img src="img/placemark.png" class="placemark">
                <span class="location"><?=$product['location']?></span>
                <img src="img/products/<?=$key?>.png" class="image">
                <p>Tags:<br /><?=$product['tags']?></p>
            </a>
        </li>
<?php
    }
?>
    </ul>
    </div>
</div>
    <footer>
        <a href="sell.php">
            SELL!!
        </a>
    </footer>


<?php
    include('footerRphp');
?>
