<?php
//print("<pre>".print_r($data,true)."</pre>");
?>

<div class="admin__layout">
    <h2>User Table</h2>

    <table>
        <tr>
            <th>email</th>
            <th>delete</th>
        </tr>
        <?php
        foreach ($data as $email)
        {
            ?>
            <tr>
                <td><?php echo $email["Subcribelist"]["email"];?></td>

                <td><a href="<?php echo LINK; ?>/admin/deleteGuestEmail/<?php echo $email["Subcribelist"]["email"];?>"><button>Delete</button></a></td>
            </tr>
            <?php
        }
        ?>


    </table>
