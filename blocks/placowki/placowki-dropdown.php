<?php
$miasta = get_field( 'miasta', 'options' );

if ( ! empty( $block['align'] ) ) {
    $class_name .= ' text-' . $block['align'];
}
?>
<div class="b-dropdown-miast  <?php echo esc_attr( $class_name ); ?>">
    <div class="select">
        <select id="miasta" onchange="gotopage()">
            <option value="">Wybierz miasto</option>
            <?php foreach($miasta as $miasto) { ?>
            <option value="<?php echo $miasto['link_do_strony_miasta']['url']; ?>"><?php echo $miasto['link_do_strony_miasta']['title']; ?></option>
            <?php } ?>
        </select>
    </div>
</div>

<script>
function gotopage() {
    var x = document.getElementById("miasta").value;
    window.location.href = x;
}
</script>
