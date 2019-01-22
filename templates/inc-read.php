<?php
    require('database/inc-select.php');
?>
<table class="table table-striped rounded" style="background-color: #6C757D!important;">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $result) : ?>
        <tr>
            <th scope="row"><?php echo $result['id']; ?></th>
            <td><?php echo $result['name']; ?></td>
            <td><?php echo $result['email']; ?></td>
            <td><?php echo $result['phone']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>