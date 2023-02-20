<?php 
$list = get_field('list');
?>

<div id="list">
    <div class="header">
        <span><b>Kod pocztowy</b></span>
        <button class="sort" data-sort="li">
            Sortuj
        </button>
    </div>
    <?php if($list) { ?>
    <ul class="list">
        <?php foreach($list as $item) { ?>
        <li><span class="li"><?php echo $item['li'] ?></span></li>
        <?php } ?>
    </ul>
    <?php } ?>

</div>
