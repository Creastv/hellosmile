<?php 
$cupon = get_field( 'kod_promocyjny' );
$save = get_field( 'oszczedzasz' );
?>
<div class="cod-promo">
    <div class="cod-promo__wraper">
        
        <div class="cod-promo__wraper__bg">
            <div class="left">
                <span>Oszczędzasz:</span>
                <p><?php echo $save; ?></p>
            </div>
            <div class="right">
                <span>Kopd promocyjny:</span>
                <p ><?php echo $cupon; ?></p>
            </div>
            <div class="copy" onclick="copyToClipboard('<?php echo $cupon; ?>')">
                <span>Kopiuj</span>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12px"
                    height="20px" viewBox="0 0 57.7 72.1" style="enable-background:new 0 0 57.7 72.1;" xml:space="preserve">
                    <path d="M52.8,0c1.3,0.3,2.5,0.8,3.4,1.8c1.1,1.2,1.5,2.7,1.5,4.3c0,10.6,0,21.2,0,31.8c0,5.2,0,10.4,0,15.6c0,2.9-1.7,5.1-4.4,5.8
                        c-0.5,0.1-1,0.2-1.5,0.1c-0.9,0-1.6-0.7-1.8-1.7c-0.1-0.9,0.4-1.8,1.3-2.1c0.1,0,0.2-0.1,0.3-0.1c2-0.5,2.2-0.7,2.2-2.8
                        c0-15.4,0-30.9,0-46.3c0-0.3,0-0.7-0.1-1c-0.1-0.8-0.6-1.3-1.4-1.4C52,4,51.7,4,51.4,4C40.7,4,29.9,4,19.2,4c-0.4,0-0.9,0-1.2,0.2
                        c-0.8,0.3-1,0.9-1.1,1.7c-0.2,1.2-1.1,2-2.2,1.8c-1.1-0.2-1.8-1.1-1.7-2.3c0.3-2.7,2-4.6,4.7-5.2c0.1,0,0.2-0.1,0.2-0.1
                        C29.4,0,41.1,0,52.8,0z"/>
                    <path d="M0,42.3c0-7.9,0-15.8,0-23.7c0-2.5,1-4.4,3.3-5.5c0.8-0.4,1.8-0.6,2.8-0.6c10.9,0,21.9,0,32.8,0c3.7,0,6.1,2.4,6.1,6.1
                        c0,15.7,0,31.5,0,47.2c0,3.7-2.4,6.1-6.1,6.1c-10.9,0-21.8,0-32.7,0C2.4,72.1,0,69.7,0,66C0,58.1,0,50.2,0,42.3z M4,42.3
                        c0,7.8,0,15.6,0,23.4c0,1.9,0.6,2.4,2.4,2.4c10.7,0,21.4,0,32.1,0c1.8,0,2.4-0.6,2.4-2.4c0-15.6,0-31.2,0-46.8
                        c0-1.8-0.6-2.4-2.3-2.4c-10.7,0-21.5,0-32.2,0C4.5,16.6,4,17.2,4,19C4,26.8,4,34.6,4,42.3z"/>
                </svg>
            </div>
        </div>
    </div>
</div>
<script>
    function copyToClipboard(textToCopy) {
        const temp = document.createElement("input")
        temp.type = "text"
        temp.value = textToCopy

        document.body.appendChild(temp)
        temp.select()
        document.execCommand("Copy")
        document.body.removeChild(temp)
    }
</script>