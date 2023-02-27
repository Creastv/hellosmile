<?php
$zalety = get_field( 'zalety' );
?>

<div class="b-zalety">
    <div class="b-zalety__wraper">
        <?php if($zalety) { ?>
        <ul>
            <?php foreach($zalety as $item) { ?>
            <li>
                <?php echo wp_get_attachment_image(  $item['icona'] ); ?>
                <h3><?php echo $item['tytul']; ?></h3>
                <p><?php echo $item['desc']; ?></p>

            </li>
            <?php } ?>
        </ul>
        <?php } ?>
    </div>
</div>
