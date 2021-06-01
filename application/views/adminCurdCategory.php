<?php
print("<pre>".print_r($data,true)."</pre>");
?>

<p>Hello</p>
<div style="width: 50%; float: left">
    Update and Delete category
    <table>
        <tr>
            <th>Company</th>
            <th>Contact</th>
            <th>Country</th>
            <th>Country</th>
        </tr>

        <?php
        foreach ($data[0] as $category)
        {
//            var_dump($book["Book"]);
            ?>
            <tr>
                <td><?php echo $category["Category"]["category_id"];?></td>
                <td><?php echo $category["Category"]["category_name"];?></td>
                <td><a href="<?php echo LINK; ?>/admin/editCategory/<?php echo $category["Category"]["book_id"];?>"><button>Edit</button></a></td>
                <td><a href="<?php echo LINK; ?>/admin/deleteCategory/<?php echo $category["Category"]["book_id"];?>"><button>Delete</button></a></td>
            </tr>
            <?php
        }
        ?>

    </table>
</div>
<div style="width: 50%; float: left">
    Update and Delete category
    <form action="addCategory" method="post">
        <label>New category name:</label><br>
        <input type="text" id="category_name" name="category_name" required><br><br>
        <input type="submit" value="Submit">
    </form>
</div>