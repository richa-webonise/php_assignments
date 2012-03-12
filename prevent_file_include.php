<form method="get">
   <select name="COLOR">
      <option value="red">red</option>
      <option value="blue">blue</option>
   </select>
   <input type="submit">
</form>

<?php
   $color = 'blue';
   if (isset( $_GET['COLOR'] ) )
      $color = $_GET['COLOR'];
   include_once( $color . '.php' );
?>
