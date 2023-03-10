<?php 
$zdjecia = get_field( 'zdjecia' );

$title = get_field( 'title' );
$tag = get_field( 'tag' );
$subtitle = get_field( 'subtytul' );
$desc= get_field( 'dopisek' );
$link= get_field( 'cta' );
if($link){
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}

$dBadge = get_field( 'wyswietl_odznaki' );
$wrap = get_field( 'pelna_szerokosc' );

$container = "";
if($wrap){
    $container = "container-fluid";
} else {
    $container = "container";
}


?>
<div class="b-header b-header--effect">
    <div class="<?php echo $container; ?>">
        <div class="row">
            <div class="b-header__wraper">
                <div class="col <?php echo  $align; ?>">
                    <?php if($title) { ?>
                    <<?php echo $tag; ?> class="entry-title  section-title"><?php echo $title; ?>
                        <?php if($subtitle) { ?>
                        <span class="section-subtitle"><?php echo $subtitle; ?></span>
                        <?php } ?>
                    </<?php echo $tag; ?>>
                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="17" viewBox="0 0 29 17">
                        <path id="Shape_3_copy_6" data-name="Shape 3 copy 6" d="M1283.5,1363a14.46,14.46,0,0,1-14.5-14.388,2.632,2.632,0,0,1,5.265,0,9.236,9.236,0,0,0,18.47,0,2.633,2.633,0,0,1,5.265,0A14.46,14.46,0,0,1,1283.5,1363Z" transform="translate(-1269 -1345.999)" fill="#575289" />
                    </svg>
                    <?php } ?>
                    <?php if($desc) { ?>
                    <div class="desc">
                        <p><?php echo $desc; ?></p>
                    </div>
                    <?php } ?>
                    <?php if($link) { ?>
                    <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php } ?>
                    <?php if($dBadge) { ?>
                    <div class="badges-only">
                        <?php  get_template_part('templates-parts/parts/badges'); ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="col">
                    <div class="badges-flouting">
                        <?php  get_template_part('templates-parts/parts/badges'); ?>
                    </div>
                    <div class="galeria">
                        <?php foreach($zdjecia as $zdj) { ?>
                        <div class="galeria_item" style="background-image:url(<?php echo $zdj; ?>);">
                        </div>
                        <?php } ?>
                        <div class="o-border">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <svg class="o-smile" xmlns="http://www.w3.org/2000/svg" width="264.001" height="156" viewBox="0 0 264.001 156">
                            <path id="Shape_3" data-name="Shape 3" d="M2459,1618c-72.789,0-132-59.225-132-132.031a23.963,23.963,0,1,1,47.927,0,84.074,84.074,0,1,0,168.148,0,23.963,23.963,0,1,1,47.927,0C2591,1558.774,2531.788,1618,2459,1618Z" transform="translate(-2326.998 -1461.999)" fill="#9ef8df" opacity="0.6" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if($video) { ?>
<!-- modal -->
<div class="mod-bg">
    <div class="mod-container">
        <div class="mod-wraper">
            <div class="close">x</div>
            <div class="col">
                <video width="100%" height="100%" controls>
                    <source src="<?php echo $filmik; ?>" type="video/mp4">
                    <source src="<?php echo $filmik; ?>" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>
<!-- END modal -->
<script>
const display = document.querySelectorAll('.display');
const close = document.querySelector('.close');
let flag = false;


// let in = document.querySelector('.job-title');

function displayModal(e) {
    e.preventDefault();
    if (flag == false) {
        document.querySelector('.mod-bg').style.display = "block";
        document.querySelector('.mod-bg video').play();
        flag = true
    } else {
        document.querySelector('.mod-bg').style.display = "none";
        document.querySelector('.mod-bg video').pause();
        flag = false
    }
}

for (let i = 0; i < display.length; i++) {
    display[i].addEventListener('click', displayModal);
};
// display.addEventListener('click', displayModal);
close.addEventListener('click', displayModal);
</script>
<?php } ?>
