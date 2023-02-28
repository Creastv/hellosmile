<?php
$form = get_field( 'form' );
?>

<div class="b-faq-form">
    <div class="b-faq-form__wraper">
        <div class="col">
            <?php echo do_shortcode('[contact-form-7 id=" ' . $form . '"]')?>
        </div>
    </div>
</div>
