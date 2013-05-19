<?php
    include('header.php');
    include('products.php');
    $key = 0;
    $product = $products[$key];
?>
    <div class="row" id="products">
    <h3>Congratulations on your purchase!!</h3>
    <p>Seller contact details:</p>
    <p>tomasz.jureczko@gmail.com</p>
    <p>07930005222</p>
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

<?php
    include('footer.php');
?>
