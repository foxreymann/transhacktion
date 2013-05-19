<?php
    include('header.php');
    include('products.php');
    $key = 0;
    $product = $products[$key];
?>
    <div class="row" id="products">
    <h3>Price: £2 for charity</h3>
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
        <a href="buy.php">
            BUY!! 
        </a>
    </footer>

<?php
    include('footer.php');
?>
