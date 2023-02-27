<?php
$colOne = get_field( 'nakladki' );
$colTwo = get_field( 'aparat_staly' );
$link = $colOne['link'];
if( $link ){
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
?>

<div class="b-n-vs-a">
    <div class="b-n-vs-a__wraper">
        <div class="column nakladki">
            <div class="column__title">
                <h3><?php echo $colOne['tytul_kolumny'];?></h3>
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="17" viewBox="0 0 29 17">
                    <path id="Shape_3_copy_8" data-name="Shape 3 copy 8" d="M2366.5,3090a14.46,14.46,0,0,1-14.5-14.388,2.632,2.632,0,0,1,5.265,0,9.236,9.236,0,0,0,18.47,0,2.632,2.632,0,0,1,5.265,0A14.46,14.46,0,0,1,2366.5,3090Z" transform="translate(-2352 -3072.999)" fill="#575289" />
                </svg>
            </div>
            <?php if($colOne['lista']) { ?>
            <ul>
                <?php foreach($colOne['lista'] as $item) { ?>
                <li class=" <?php echo $item['taknie'] == "Nie" ? 'disabled' : ' '; ?>">
                    <?php if($item['taknie'] == "Tak") { ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.998" height="16.001" viewBox="0 0 17.998 16.001">
                        <path id="Shape_11" data-name="Shape 11" d="M1672.773,3112.1c.483-.57.945-1.132,1.424-1.678a42.479,42.479,0,0,1,7.3-6.737c.285-.2.579-.395.878-.578a.7.7,0,0,1,.334-.1c.615-.01,1.229,0,1.844-.005a.4.4,0,0,1,.417.243.383.383,0,0,1-.129.455,46.84,46.84,0,0,0-6.522,7.427c-1.806,2.443-3.478,4.97-5.045,7.563a.783.783,0,0,1-.213.25.388.388,0,0,1-.558-.166c-.242-.372-.465-.757-.724-1.118q-2.258-3.149-4.529-6.29c-.057-.079-.121-.155-.175-.237a.361.361,0,0,1,.035-.482q.606-.594,1.226-1.174a.393.393,0,0,1,.546,0q1,.669,1.989,1.344Z" transform="translate(-1667.001 -3102.999)" fill="#9df7de" />
                    </svg>
                    <?php } else { ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.001" height="4" viewBox="0 0 18.001 4">
                        <path id="Shape_12" data-name="Shape 12" d="M2189.9,3138.33c-.327-.437-.65-.876-.984-1.307a.6.6,0,0,0-.253-.181c-.292-.111-.588-.214-.887-.3a37.69,37.69,0,0,0-8.783-1.46c-.621-.037-3.452-.364-4.845.666a8.239,8.239,0,0,0-1.565,1.479,4.071,4.071,0,0,0-.564,1.268c-.05.235-.019.423.176.488a.711.711,0,0,0,.295.013c2.719-.32,5.448-.53,8.185-.6a41.962,41.962,0,0,1,8.872.527.358.358,0,0,0,.354-.591Z" transform="translate(-2171.999 -3135)" fill="#b2b2b2" />
                    </svg>
                    <?php } ?>
                    <p><?php echo $item['zaleta']; ?></p>
                </li>
                <?php } ?>
            </ul>
            <?php } ?>
            <?php if($link){?>
            <div class="column-footer">
                <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            </div>
            <?php } ?>
        </div>
        <div class="column aparat">
            <div class="column__title">
                <h3><?php echo $colTwo['tytul_kolumny'];?></h3>
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="17" viewBox="0 0 29 17">
                    <path id="Shape_3_copy_8" data-name="Shape 3 copy 8" d="M2366.5,3090a14.46,14.46,0,0,1-14.5-14.388,2.632,2.632,0,0,1,5.265,0,9.236,9.236,0,0,0,18.47,0,2.632,2.632,0,0,1,5.265,0A14.46,14.46,0,0,1,2366.5,3090Z" transform="translate(-2352 -3072.999)" fill="#575289" />
                </svg>
            </div>

            <?php if($colTwo['lista']) { ?>
            <ul>
                <?php foreach($colTwo['lista'] as $item) { ?>
                <li class=" <?php echo $item['taknie'] == "Nie" ? 'disabled' : ' '; ?>">
                    <?php if($item['taknie'] == "Tak") { ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.998" height="16.001" viewBox="0 0 17.998 16.001">
                        <path id="Shape_11" data-name="Shape 11" d="M1672.773,3112.1c.483-.57.945-1.132,1.424-1.678a42.479,42.479,0,0,1,7.3-6.737c.285-.2.579-.395.878-.578a.7.7,0,0,1,.334-.1c.615-.01,1.229,0,1.844-.005a.4.4,0,0,1,.417.243.383.383,0,0,1-.129.455,46.84,46.84,0,0,0-6.522,7.427c-1.806,2.443-3.478,4.97-5.045,7.563a.783.783,0,0,1-.213.25.388.388,0,0,1-.558-.166c-.242-.372-.465-.757-.724-1.118q-2.258-3.149-4.529-6.29c-.057-.079-.121-.155-.175-.237a.361.361,0,0,1,.035-.482q.606-.594,1.226-1.174a.393.393,0,0,1,.546,0q1,.669,1.989,1.344Z" transform="translate(-1667.001 -3102.999)" fill="#9df7de" />
                    </svg>
                    <?php } else { ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.001" height="4" viewBox="0 0 18.001 4">
                        <path id="Shape_12" data-name="Shape 12" d="M2189.9,3138.33c-.327-.437-.65-.876-.984-1.307a.6.6,0,0,0-.253-.181c-.292-.111-.588-.214-.887-.3a37.69,37.69,0,0,0-8.783-1.46c-.621-.037-3.452-.364-4.845.666a8.239,8.239,0,0,0-1.565,1.479,4.071,4.071,0,0,0-.564,1.268c-.05.235-.019.423.176.488a.711.711,0,0,0,.295.013c2.719-.32,5.448-.53,8.185-.6a41.962,41.962,0,0,1,8.872.527.358.358,0,0,0,.354-.591Z" transform="translate(-2171.999 -3135)" fill="#b2b2b2" />
                    </svg>
                    <?php } ?>
                    <p><?php echo $item['zaleta']; ?></p>
                </li>
                <?php } ?>
            </ul>
            <?php } ?>
        </div>

    </div>
</div>
