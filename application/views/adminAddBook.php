<h1>Admin add book</h1>
<form action="addBookQuery" method="POST" enctype="multipart/form-data">
  <label>Book title:</label><br>
  <input type="text" id="title" name="title"><br>
  <label>Author:</label><br>
  <input type="text" id="author" name="author"><br><br>
  <label>Description:</label><br>
  <input type="text" id="description" name="description"><br><br>
  <label>Publisher:</label><br>
  <input type="text" id="publisher" name="publisher"><br><br>
  <label>Thumbnail:</label><br>
  <input type="file" id="thumbnail" name="thumbnail"><br><br>
  <label>PDF:</label><br>
  <input type="file" id="bookPDF" name="bookPDF"><br><br>
  <input type="hidden" id="actionID" name="actionID" value="1"><br><br>
  <input type="submit" value="Submit">
</form> 

<?php //echo php_ini_loaded_file(); ?>