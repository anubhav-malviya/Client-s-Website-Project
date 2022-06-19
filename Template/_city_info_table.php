

<!-- -----------------------------------------------------Table Section (Starting))----------------------------------------------------- -->
<?php
    $city_name = $_GET['city_name'] ?? इंदौर;

?>
<!-- -----------------------------------------------------page-header Section (Starting))----------------------------------------------------- -->
<section id="page-header">
    <h2>#<?php echo $city_name ?? "--"; ?></h2>
</section>
<!-- -----------------------------------------------------Featured Product Section Start))----------------------------------------------------- -->


<div class="table-box">
    <div class="table-row table-head">
        <div class="table-cell first-cell">
            <p>नाम</p>
        </div>
        <div class="table-cell">
            <p>मोबाईल नंबर</p>
        </div>
        <div class="table-cell last-cell">
            <p>पता</p>
        </div>
    </div>

<?php
    foreach ($city->getData('peoples') as $item) :
    if ($item['people_city'] == $city_name) :
?>
    <div class="table-row">
        <div class="table-cell first-cell">
            <p><?php echo $item['people_name'] ?? "पता नहीं"; ?></p>
        </div>
        <div class="table-cell">
            <p><?php echo $item['people_mob'] ?? "--"; ?></p>
        </div>
        <div class="table-cell last-cell">
            <p><?php echo $item['people_address'] ?? "--"; ?></p>
        </div>
    </div>

</div>

<?php
    endif;
    endforeach;
?>

