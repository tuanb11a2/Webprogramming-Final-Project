<h1>List Book</h1>
<?php
//    var_dump($data);

?>

<div class="admin__layout">
    <h2>HTML Table</h2>

    <table>
        <tr>
            <th>book_id</th>
            <th>title</th>
            <th>author</th>
            <th>description</th>
            <th>rating</th>
            <th>number_of_review</th>
            <th>publisher</th>
            <th>thumbnail_address</th>
            <th>bookPDF</th>
        </tr>
        <?php
        foreach ($data as $book)
        {
//            var_dump($book["Book"]);
        ?>
        <tr>
            <td><?php echo $book["Book"]["book_id"];?></td>
            <td><?php echo $book["Book"]["title"];?></td>
            <td><?php echo $book["Book"]["author"];?></td>
            <td><?php echo $book["Book"]["description"];?></td>
            <td><?php echo $book["Book"]["rating"];?></td>
            <td><?php echo $book["Book"]["number_of_review"];?></td>
            <td><?php echo $book["Book"]["publisher"];?></td>
            <td><?php echo $book["Book"]["thumbnail_address"];?></td>
            <td><?php echo $book["Book"]["bookPDF"];?></td>
        </tr>
        <?php
        }
        ?>


    </table>

</div>
