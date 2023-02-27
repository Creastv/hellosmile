<?php
$table = get_field( 'tabela' );
?>
<div class="b-table--dlaczego-waro">
    <?php 
if ( ! empty ( $table ) ) {

    echo '<table border="0">';
        if ( ! empty( $table['caption'] ) ) {
            echo '<caption>' . $table['caption'] . '</caption>';
        }
        if ( ! empty( $table['header'] ) ) {
            echo '<thead>';
                echo '<tr>';
                    foreach ( $table['header'] as $th ) {
                        echo '<th>';
                            echo $th['c'];
                        echo '</th>';
                    }
                echo '</tr>';
            echo '</thead>';
        }
        echo '<tbody>';
            foreach ( $table['body'] as $tr ) {
                echo '<tr>';
                    foreach ( $tr as $td ) {
                        echo '<td>';
                            if($td['c'] == '"TAK"'){
                                echo '<svg xmlns="http://www.w3.org/2000/svg" width="23.998" height="21.001" viewBox="0 0 23.998 21.001">
                                <path id="Shape_11_copy_11" data-name="Shape 11 copy 11" d="M2258.7,5797.945c.644-.748,1.26-1.485,1.9-2.2a56.277,56.277,0,0,1,9.731-8.842c.38-.266.772-.518,1.171-.758a.934.934,0,0,1,.446-.136c.819-.013,1.639-.006,2.459-.006a.537.537,0,0,1,.556.318.5.5,0,0,1-.172.6,61.8,61.8,0,0,0-8.7,9.748c-2.408,3.206-4.637,6.523-6.727,9.925a1.035,1.035,0,0,1-.284.328.521.521,0,0,1-.744-.217c-.322-.488-.62-.994-.965-1.468q-3.01-4.133-6.038-8.255c-.076-.1-.161-.2-.233-.311a.467.467,0,0,1,.047-.632q.807-.781,1.635-1.542a.531.531,0,0,1,.728,0q1.328.879,2.651,1.764Z" transform="translate(-2251.001 -5785.999)" fill="#9df7de"/>
                                </svg>
                                ';
                            } elseif( $td['c'] == '"NIE"') {
                                echo '<svg xmlns="http://www.w3.org/2000/svg" width="16.999" height="17" viewBox="0 0 16.999 17">
                                <path id="Shape_15_copy_8" data-name="Shape 15 copy 8" d="M2268.718,5742.8c-.543.067-1.084.129-1.631.2a1,1,0,0,0-.332.126c-.33.192-.658.391-.983.6-1.9,1.215-3.73,2.534-5.512,3.926q-.371-.456-.746-.909c-.5-.6-2.682-3.412-4.315-4.124a8.27,8.27,0,0,0-1.985-.618,2.19,2.19,0,0,0-1.06.193c-.151.087-.214.221-.083.44a1.48,1.48,0,0,0,.237.281q3.1,3.032,6.089,6.232-.747.615-1.484,1.245c-.589.5-3.365,2.719-4.067,4.375a8.566,8.566,0,0,0-.609,2.013,2.273,2.273,0,0,0,.19,1.075c.085.153.218.217.433.083a1.48,1.48,0,0,0,.277-.24q3.316-3.484,6.838-6.833a86.019,86.019,0,0,1,6.459,7.852.549.549,0,0,0,.405.28c.146,0,.185-.115.164-.286-.066-.551-.127-1.1-.2-1.653a1.017,1.017,0,0,0-.125-.337q-.284-.5-.591-1a74.7,74.7,0,0,0-4.483-6.384,81.577,81.577,0,0,1,7.117-5.968.562.562,0,0,0,.277-.411C2269,5742.816,2268.886,5742.777,2268.718,5742.8Z" transform="translate(-2252.001 -5741.999)" fill="gray"/>
                                </svg>
                                ';
                            } else{
                                echo $td['c'];
                            }
                        echo '</td>';
                    }
                echo '</tr>';
            }
        echo '</tbody>';
    echo '</table>';
}
?>
</div>
