<?php
session_start();
if ( !empty($_POST['new_task'])) {


    $new_task = htmlspecialchars($_POST['new_task']); 

    // $_SESSION['a']  VARIABLE for session like $x=4;
    
    if (!isset($_SESSION['a'])) {
        $_SESSION['a'] = [];
    }

    $_SESSION['a'][] = $new_task;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>To-Do List</title>
</head>

<body>
    <h1>To-Do List</h1>
    <form method="POST" action="">
        <input type="text" name="new_task" placeholder="New Task">
        <button type="submit">Add Task</button>
    </form>
    <ul>
        <?php
   
        if (isset($_SESSION['a'])) {
            foreach ($_SESSION['a'] as $task) {
                echo "<li>$task</li>";
            }
        }
      
        
        ?>
    </ul>


    <!-- tasks 4 -->

    <br>
    <br>
    <h1>Task 4</h1>

    <?php   $currentPage= $_SERVER['SCRIPT_NAME']; 
  

  $SCRIPa = substr($currentPage, 1); 
  $currentPage = substr($currentPage, 24); 
    
  echo $currentPage;  
  echo "<br>";
  echo $SCRIPa;  
  echo "<br>";
  $w=$_SERVER['REQUEST_TIME'];
   strval($w);
//   $e=implode(" ",$w);

  $date=date_create();
echo  "<br>";
  
echo date_format($date,"Y/m/d H:i:s");
//   echo $_SERVER['REQUEST_TIME'];
   ?>

</body>

</html>