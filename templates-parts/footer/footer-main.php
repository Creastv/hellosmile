<?php
$adres = get_field( 'adres', 'options' );

$menu1 = get_field( 'menu_1', 'options' );
$menu2 = get_field( 'menu_2', 'options' );
$menu3 = get_field( 'menu_3', 'options' );

$sm = get_field( 'social_media', 'options' );
$pay = get_field( 'platnosci', 'options' );
$send = get_field( 'wysylka', 'options' );

?>
<div class="f-main">
    <div class="f-main__wraper">
        <div class="col">
            <a class="logo" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="211" height="22" viewBox="0 0 211 22">
                    <g id="Vector_Smart_Object" data-name="Vector Smart Object" transform="translate(-701.981 -228.833)">
                        <path id="Path_241" data-name="Path 241" d="M715.571,241.478v8.989h3.657v-21.33h-3.657V238h-9.932v-8.867h-3.658v21.33h3.658v-8.989Z" fill="#313531" />
                        <path id="Path_242" data-name="Path 242" d="M744.153,250.467h14.6v-3.413H747.81V229.138h-3.658v21.33Z" fill="#313531" />
                        <path id="Path_243" data-name="Path 243" d="M763.543,250.467h14.6v-3.413H767.2V229.138h-3.658v21.33Z" fill="#313531" />
                        <path id="Path_244" data-name="Path 244" d="M822.064,234.714a2.286,2.286,0,0,1,.892-1.813,3.785,3.785,0,0,1,2.5-.746,7.5,7.5,0,0,1,2.825.563,12.682,12.682,0,0,1,2.825,1.631l1.963-2.834a12.178,12.178,0,0,0-3.435-2,11.664,11.664,0,0,0-4.118-.686,8.866,8.866,0,0,0-2.854.442,6.505,6.505,0,0,0-2.245,1.265,5.849,5.849,0,0,0-2.007,4.509,6.207,6.207,0,0,0,.461,2.529,4.828,4.828,0,0,0,1.338,1.767,7.486,7.486,0,0,0,2.171,1.219,24.479,24.479,0,0,0,2.959.883,23.634,23.634,0,0,1,2.364.7,5.93,5.93,0,0,1,1.427.716,2.058,2.058,0,0,1,.713.838,2.634,2.634,0,0,1,.193,1.036,2.33,2.33,0,0,1-1,1.98,4.456,4.456,0,0,1-2.691.731,8.257,8.257,0,0,1-3.509-.716,12.769,12.769,0,0,1-3.063-2.057l-2.2,2.681a12.533,12.533,0,0,0,4.074,2.575,12.836,12.836,0,0,0,4.609.838,10.041,10.041,0,0,0,3-.427,6.719,6.719,0,0,0,2.349-1.249,5.729,5.729,0,0,0,1.532-2.011,6.388,6.388,0,0,0,.55-2.712,5.8,5.8,0,0,0-.432-2.331A4.979,4.979,0,0,0,832,240.305a7.192,7.192,0,0,0-2.1-1.265,23.022,23.022,0,0,0-2.9-.945q-1.487-.366-2.453-.7a5.986,5.986,0,0,1-1.517-.731,2.221,2.221,0,0,1-.758-.854,2.632,2.632,0,0,1-.208-1.1Z" fill="#313531" />
                        <path id="Path_245" data-name="Path 245" d="M856.374,235.171v15.3h3.658V229.138h-3.9L849.8,239.223l-6.334-10.086h-3.9v21.329h3.6V235.232l6.512,9.994h.119l6.571-10.055Z" fill="#313531" />
                        <path id="Path_246" data-name="Path 246" d="M867.029,229.138v21.329h3.657V229.138Z" fill="#313531" />
                        <path id="Path_247" data-name="Path 247" d="M877.012,250.467h14.6v-3.413H880.67V229.138h-3.658v21.329Z" fill="#313531" />
                        <path id="Path_248" data-name="Path 248" d="M912.832,229.138H897.4v21.329h15.581v-3.352H901.057v-5.729h10.437v-3.352H901.057v-5.546h11.775v-3.352Z" fill="#313531" />
                        <path id="Path_249" data-name="Path 249" d="M780.822,239.863a11.384,11.384,0,0,0,.8,4.236,10.82,10.82,0,0,0,2.23,3.5,10.442,10.442,0,0,0,3.419,2.361,10.9,10.9,0,0,0,4.4.868,10.733,10.733,0,0,0,4.4-.884,10.866,10.866,0,0,0,3.449-2.392,10.743,10.743,0,0,0,2.26-3.52,11.378,11.378,0,0,0,.8-4.175h-3.836a8.291,8.291,0,0,1-.52,2.911,7.45,7.45,0,0,1-1.442,2.407,6.923,6.923,0,0,1-7.909,1.6,6.944,6.944,0,0,1-2.245-1.646,7.492,7.492,0,0,1-1.457-2.423,8.276,8.276,0,0,1-.52-2.849Z" fill="#4c5c8d" />
                        <path id="Path_250" data-name="Path 250" d="M780.822,239.863a11.382,11.382,0,0,1,.8-4.236,10.817,10.817,0,0,1,2.23-3.5,10.441,10.441,0,0,1,3.419-2.361,10.893,10.893,0,0,1,4.4-.869,10.741,10.741,0,0,1,4.4.884,10.868,10.868,0,0,1,3.449,2.392,10.736,10.736,0,0,1,2.26,3.519,11.378,11.378,0,0,1,.8,4.175h-3.836a8.291,8.291,0,0,0-.52-2.911,7.456,7.456,0,0,0-1.442-2.407,6.923,6.923,0,0,0-7.909-1.6,6.951,6.951,0,0,0-2.245,1.646,7.5,7.5,0,0,0-1.457,2.423,8.279,8.279,0,0,0-.52,2.85Z" fill="#313531" />
                        <path id="Path_251" data-name="Path 251" d="M739.213,229.061H723.78v21.33h15.581v-3.352H727.438v-5.729h10.437v-3.352H727.438v-5.546h11.775v-3.352Z" fill="#313531" />
                    </g>
                </svg>
            </a>

            <?php if($adres) { ?>
            <div class="calaps">
                <div class="calaps__opener">
                    <p>Kontakt</p>
                </div>
                <div class="calaps__list">
                    <address>
                        <?php if ( $adres['nazwa'] ) { ?>
                        <p><b><?php echo $adres['nazwa']; ?></b></p>
                        <?php } ?>
                        <?php if ( $adres['adres'] ) { ?>
                        <p><?php echo $adres['adres']; ?>
                        </p>
                        <?php } ?>
                        <?php if ( $adres['nip'] ) { ?>
                        <p><?php echo $adres['nip']; ?></p>
                        <?php } ?>
                        <br>
                        <?php if($adres['kontakt']) { ?>
                        <?php foreach ($adres['kontakt'] as $con) { ?>
                        <?php if($con['link']) { ?>
                        <a class="link" href="<?php echo $con['link']; ?>">
                            <?php } else { ?>
                            <p class="link">
                                <?php } ?>
                                <?php if($con['ikona']) { ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/icons/<?php echo $con['ikona']; ?>.svg" alt="ikona" width="19px" height="19px">
                                <?php } ?>
                                <?php if($con['tresc']) { ?>
                                <span><?php echo $con['tresc']; ?></span>
                                <?php } ?>
                                <?php if($con['link']) { ?>
                        </a>
                        <?php } else { ?>
                        <p>
                            <?php } ?>

                            <?php } ?>
                            <?php } ?>
                    </address>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="col">

            <div class="calaps">
                <?php if($menu1['tytul']) { ?>
                <div class="calaps__opener">
                    <p class="title-menu"><?php echo $menu1['tytul']; ?></p>
                </div>
                <?php } ?>

                <?php if($menu1['menu']) { ?>
                <div class="calaps__list">
                    <?php echo $menu1['menu']; ?>
                </div>
                <?php } ?>
            </div>

        </div>
        <div class="col">
            <div class="calaps">
                <?php if($menu2['tytul']) { ?>
                <div class="calaps__opener">
                    <p class="title-menu"><?php echo $menu2['tytul']; ?></p>
                </div>
                <?php } ?>
                <?php if($menu2['menu']) { ?>
                <div class="calaps__list">
                    <?php echo $menu2['menu']; ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="col">
            <div class="calaps">
                <?php if($menu3['tytul']) { ?>
                <div class="calaps__opener">
                    <p class="title-menu"><?php echo $menu3['tytul']; ?></p>
                </div>
                <?php } ?>
                <?php if($menu3['menu']) { ?>
                <div class="calaps__list">
                    <?php echo $menu3['menu']; ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="col">
            <?php if($sm) { ?>
            <div class="social-media">
                <?php if($sm['tytul']) { ?>
                <span><?php echo $sm['tytul']; ?></span>
                <?php } ?>
                <?php if($sm['linki']) { ?>
                <ul>
                    <?php foreach($sm['linki'] as $s) { ?>
                    <li>
                        <a href="<?php echo $s['link']; ?>" target="_blank">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/icons/<?php echo $s['ikona']; ?>.svg" width="28px" height="28px" alt="Social media">
                        </a>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </div>
            <?php } ?>
            <?php if($send) { ?>
            <div class="delivery">
                <?php if($send['tytul']) { ?>
                <span><?php echo $send['tytul']; ?></span>
                <?php } ?>
                <?php if($send['logos']) { ?>
                <ul>
                    <?php foreach($send['logos'] as $logo) { ?>
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/icons/<?php echo $logo['logo']; ?>.svg" alt="Wysyłka"></li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </div>
            <?php } ?>
            <?php if($send) { ?>
            <div class="pay">
                <?php if($pay['tytul']) { ?>
                <span><?php echo $pay['tytul']; ?></span>
                <?php } ?>
                <?php if($pay['logos']) { ?>
                <ul>
                    <?php foreach($pay['logos'] as $logo) { ?>
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/icons/<?php echo $logo['logo']; ?>.svg" alt="Wysyłka"></li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </div>
            <?php } ?>

        </div>
    </div>
</div>
