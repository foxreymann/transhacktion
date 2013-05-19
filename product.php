<?php
    include('header.php');
    include('products.php');
    $key = 0;
    $product = $products[$key];
?>
    <div class="row" id="products">
    <ul class="unstyled">
        <li>
            <a href="#">
                <img src="img/placemark.png" class="placemark">
                <span class="location"><?=$product['location']?></span>
                <img src="img/products/<?=$key?>.png" class="image">
                <p>Tags:<br /><?=$product['tags']?></p>
            </a>
        </li>
    </ul>
    </div>
</div>
    <footer class="buy">
            BUY!! 
    </footer>


<?php
    include('footer.php');
?>
