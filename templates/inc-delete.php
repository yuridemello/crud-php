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
            <th scope="col">Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $result) : ?>
        <tr>
            <th scope="row"><?php echo $result['id']; ?></th>
            <td><?php echo $result['name']; ?></td>
            <td><?php echo $result['email']; ?></td>
            <td><?php echo $result['phone']; ?></td>
            <td><a style="background-image: linear-gradient(to right, #516090 , #92A9ED);" href="database/inc-db-delete.php?id=<?php echo $result['id']; ?>">Delete</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>