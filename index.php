<?php

require_once("conn.php");

if (isset($_POST['add'])){

  $task=$_POST['task'];

  $add="INSERT INTO data (task) values ('$task')";

  mysqli_query($conn, $add);

}


?>


<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Todo app</title>
  <style>
    *{
      font-family: "Helvetica Neue",Helvetica;
    }
  </style>
</head>
<body>

<div class="min-h-screen  w-full flex p-[1vw] items-center justify-center flex-col bg-zinc-200 text-white">
  <div class="">
  <h1 class="text-3xl text-blue-600 font-bold ">Todo app:-</h1>
  </div>

  <form action="index.php" method="post" class="mt-8 flex gap-6">
    <div class=" text-black ">
      <label class="text-xl" for="task">Add Task:-</label>
      <input class="px-5 py-2 border-b-2 border-black outline-none " type="text" name="task" id="">
    </div>
    <div class="">
      <input type="submit" name="add" id="add" class="bg-red-800 px-5 py-2 rounded-full"/>
    </div>
  </form>

  <div class="">

  </div>
  <?php
  $n=1;
$check="SELECT * FROM data";
$result=mysqli_query($conn,$check);
while ($row=mysqli_fetch_array($result))
  {?>


  <div class="bg-green-400 h-[100px]  w-[100%]  mt-1 border-black border-2 text-pink-900">

<div class="p-12 text-2xl flex gap-3 justify-center items-center ">
  <h1><?= $n++ ?></h1>
<h1>⏭️<?= $row['task'] ?></h1>
<button class="bg-red-800 px-5 py-1 rounded-full text-white"><a href="delete.php?id=<?= $row['id'] ?>">Delete</a></button>
<button class="bg-green-800 px-5 py-1 rounded-full text-white"><a href="edit.php?id=<?= $row['id'] ?>">Edit</a></button>

</div>
  </div>
<?php } ?>
</div>
  
</body>
</html>