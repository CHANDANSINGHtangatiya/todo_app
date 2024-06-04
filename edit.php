<?php

require_once("conn.php");
$id=$_GET['id'];
$qurey="SELECT * FROM data WHERE id='$id'";
$data=mysqli_query($conn,$qurey);

$row=mysqli_fetch_array($data);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<?php

if(isset($_POST['edit'])){
    $task=$_POST['task'];

    $upadte="UPDATE data SET task='$task' WHERE id='$id'";

    mysqli_query($conn,$upadte);

    header("Location:index.php");
    exit();


}

?>
    
<div class="flex items-center h-[30vh] flex-col justify-center absolute left-[30%] px-9 rounded-xl top-1/2 bg-zinc-300">
<div class="">
  <h1 class="text-3xl text-blue-600 font-bold ">Todo app:-</h1>
  </div>

  <form action="edit.php?id=<?= $id ?>" method="post" class="mt-8 flex gap-6">
    <div class=" text-black ">
      <label class="text-xl" for="task">Edit Task:-</label>
      <input class="px-5 py-2 border-b-2 border-black outline-none " type="text" name="task" id="" value="<?= $row['task'] ?>" >
    </div>
    <div class="">
      <input type="submit" name="edit" id="edit" class="bg-red-800 px-5 py-2 rounded-full"/>
    </div>
  </form>
</div>
</body>
</html>