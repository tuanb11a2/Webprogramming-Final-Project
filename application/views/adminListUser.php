<?php
//var_dump($data);
?>

<div class="admin__layout">
    <h2>User Table</h2>

    <table>
        <tr>
            <th>client_id</th>
            <th>email</th>
            <th>name</th>
            <th>password</th>
            <th>role_id</th>
            <th>deleteButton</th>
        </tr>
        <?php
        foreach ($data as $user)
        {
//            var_dump($book["Book"]);
            ?>
            <tr>
                <td><?php echo $user["Client"]["client_id"];?></td>
                <td><?php echo $user["Client"]["email"];?></td>
                <td><?php echo $user["Client"]["name"];?></td>
                <td><?php echo $user["Client"]["password"];?></td>
                <td><?php echo $user["Client"]["role_id"];?></td>
                <td><a href="<?php echo LINK; ?>/admin/deleteUser/<?php echo $user["Client"]["client_id"];?>"><button>Delete</button></a></td>
            </tr>
            <?php
        }
        ?>


    </table>

</div>
