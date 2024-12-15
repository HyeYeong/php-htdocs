<html>
  <h1>
    <?php
      $thisIsVariable = 'this is variable !';
      $thisIsNumber = 16;
      echo "Hello world. ".$thisIsVariable ." ";
      echo var_dump($thisIsVariable)
    ?>
  </h1>
  <p>
    <?php
      echo $thisIsVariable;
      echo var_dump($thisIsNumber);
      echo var_dump($thisIsNumber/5);
    ?>
  </p>
</html>