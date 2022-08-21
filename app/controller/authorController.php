<?php include_once('baseController.php');

function index()
{
    $s = "select * from authors where column_status='ACTIVE' order by id";
    $authors = readQuery($s);
    $authors = json_decode($authors);
    return $authors;
}

function show()
{
    $id = $_REQUEST['id'];
    $s = "select * from authors where id = $id";
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

    $s = "INSERT INTO `authors`(`id`, `name`, `description`) VALUES (null,'$name', '$description')";
    $id = executeQuery($s);
    print_r($id);
    if($id > 0)
    {
        $_SESSION["msg"] = "SUCCESSFULLY CREATED";
        header('Location: show.php?id='.$id);//redirection
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
   
    $sql = "UPDATE `authors` SET `name`='$name',`description`='$description',WHERE id=$id";
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

    $sql = "UPDATE `authors` SET column_status='DELETED' WHERE id=$id";
    $data = deleteAndUpdateQuery($sql);

    if($data == 1)
    {
        $_SESSION["msg"] = "SUCCESSFULLY DELETED";
        header('Location: index.php?id='.$id);
    }
    return;
}