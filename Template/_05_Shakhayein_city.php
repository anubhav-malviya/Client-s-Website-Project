
<!-- ----------------------------------------------------------------   city Section Start -->

<?php
    $city_shuffle = $city->getData();
?>

<section id="city1" class="section-p1">
    <div class="pro-container">
        <?php foreach ($city_shuffle as $item) { ?>
        <div class="pro" onclick="window.location.href='<?php printf('%s?city_name=%s', 'cityInfo.php', $item['city_name']); ?>';">
            <img src="<?php echo $item['city_image'] ?? "./img/products/f1.jpg"; ?>" alt="">
            <div class="description">
                <h3><?php echo $item['city_name'] ?? "unknown"; ?></h3>
            </div>
        </div>
        <?php } // closing of foreach function ?>
    </div>
</section>





