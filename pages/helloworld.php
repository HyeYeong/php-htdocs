<html>
  <h1>
    <?php
      $thisIsVariable = 'this is variable !';
      $thisIsNumber = 16;
      echo "Hello world{$thisIsVariable}-!";
      echo var_dump($thisIsVariable);
      echo gettype($thisIsNumber);
      
    ?>
  </h1>
  <p>
    <?php
      echo $thisIsVariable;
      echo var_dump($thisIsNumber);
      echo var_dump($thisIsNumber/5);
      // is_int
      if(is_int($thisIsNumber)) {
        echo $thisIsNumber + 12;
      }
      // variables
      $title = "subject";
      $$title = "this is subject title";
      echo $subject;
    ?>
  </p>
  <form method="post" action="confirm.php">
    id: <input type="text" name="id"/>
    password: <input type="password" name="password"/>
    <input type="submit"/>
  </form>

  <?php
      $array1 = ["tim", "kim", "him", "dim", "aim", "bim", "gim"];
      echo count($array1);
      array_push($array1, 'mit');
      echo count($array1);
      array_pop($array1);
      echo count($array1);
      array_shift($array1);
      echo count($array1);
      array_unshift($array1, "Mint");
      rsort($array1);
      echo var_dump($array1);

      function changeFirstAlphabet ($arr) {
        for($i=0; $i<count($arr); $i++) {
          sort($arr);
          echo ucfirst($arr[$i]);
        }
      }
      changeFirstAlphabet($array1);
    ?>
</html>