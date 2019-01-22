<?php
    $route = $_GET['route'] ?? null;
?>
<div class="col-md">
    <div class="row d-flex justify-content-between align-items-center border-bottom border-secondary mb-5">
        <div class="flex-column ">
            <small class="text-secondary">DASHBOARD</small>
            <h1 class="text-capitalize text-light"><?= $route ?></h1>
        </div>
        <button class="btn btn-secondary">Date</button>
    </div>
    <?php

        switch ($route) {
            case 'read':
                require_once('inc-read.php');
                break;
            case 'create':
                require_once('inc-create.php');
                break;
            case 'readupdate':
                require_once('inc-read-update.php');
                break;
            case 'update':
                require_once('inc-update.php');
                break;
            case 'delete':
            require_once('inc-delete.php');
            break;
            case '';
                require_once('index.php');
        }
        
    ?>
</div>