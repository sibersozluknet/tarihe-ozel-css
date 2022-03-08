<?php
$tarihler = ['10-29', '04-23', '05-19', '08-30', '01-26']; // m-d formatında (ay-gün)

if (in_array(date('m-d'), $tarihler)) { ?>
    <style>
        body {
            background-color: rebeccapurple;
        }
    </style>
<?php }
