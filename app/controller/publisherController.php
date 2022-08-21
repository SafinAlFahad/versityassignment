<?php include_once('baseController.php');

function index()
{
    $s = "select * from publishers where column_status='ACTIVE' order by id";
    $publishers = readQuery($s);
    $publishers = json_decode($publishers);
    return $publishers;
}

function show()
{
    $id = $_REQUEST['id'];
    $s = "select * from publishers where id = $id";
    $json = readQuery($s);                  //json
    $data = json_decode($json);             //array
    return $data;
}

//saving to data base
if(isset($_REQUEST['create']))
{
    store();
}
function store()
{
    $name = $_REQUEST['name'];
    $description = $_REQUEST['description'];
   
   //print_r($name);

    $s = "INSERT INTO `publishers`(`id`, `name`, `description`) VALUES (null,'$name', '$description')";
    $id = executeQuery($s);
    print_r($id);
    if($id > 0)
    {
        $_SESSION["msg"] = "SUCCESSFULLY CREATED";
        header('Location: show.php?id='.$id);//redirect
    }
    return;

}

if(isset($_REQUEST['update']))
{
    update();
}
function update()
{
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $description = $_REQUEST['description'];
    
    $sql = "UPDATE `publishers` SET `name`='$name',`description`='$description',WHERE id=$id";
    $data = deleteAndUpdateQuery($sql);

    if($data == 1)
    {
        $_SESSION["msg"] = "SUCCESSFULLY UPDATED";
        header('Location: show.php?id='.$id);
    }
    return;
}


// delete
if(isset($_REQUEST['delete']))
{
    delete();
}
function delete()
{
    $id = $_POST['id'];

    $sql = "UPDATE `publishers` SET column_status='DELETED' WHERE id=$id";
    $data = deleteAndUpdateQuery($sql);

    if($data == 1)
    {
        $_SESSION["msg"] = "SUCCESSFULLY DELETED";
        header('Location: index.php?id='.$id);
    }
    return;
}