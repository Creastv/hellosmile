<?php
$colOne = get_field('col_one');
$title = get_field( 'title' );
$des = get_field( 'desc' );
$count = 0;
?>
<div id="faq">
    <div class="faq js">
        <div class="faq__wraper">
            <?php if($colOne) { ?>
            <div class="col">
                <?php foreach($colOne['accordion'] as $acc) { ?>
                <div class="accordion js <?php echo $count == 0  ?  'active' : false ?> ">
                    <h3 class="question h5">
                        <span><?php echo $acc['accordion_name']; ?></span>
                    </h3>
                    <div class="answer">
                        <div>
                            <?php echo $acc['accordion_content']; ?>
                        </div>
                    </div>
                </div>
                <?php $count++; } ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
