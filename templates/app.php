<?php
    $mark_time = Time();
?>

<div style="margin-left:auto; margin-right:auto;">
    <style>
        #mt-root-map {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <script type="module" crossorigin src="<?=plugins_url().'/map-panama-empleos/templates/index.js?v='.$mark_time?>"></script>
    <link rel="stylesheet" crossorigin href="<?=plugins_url().'/map-panama-empleos/templates/index.css?v='.$mark_time?>">
    <div id="mt-root-map" style="margin:0px; padding: 0px; margin-left:auto; margin-right:auto;"></div>
</div>