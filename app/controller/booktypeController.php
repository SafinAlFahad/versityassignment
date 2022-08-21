<?php include_once('baseController.php');

function index()
{
    $s = "select * from book_types where column_status='ACTIVE' order by id";
    $book_types = readQuery($s);
    $book_types = json_decode($book_types);
    return $book_types;
}

function show()
{
    $id = $_REQUEST['id'];
    $s = "select * from book_types where id = $id";
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
    
   //print_r($name);

    $s = "INSERT INTO `book_types`(`id`, `name`) VALUES (null,'$name')";
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
    $sql = "UPDATE `book_types` SET `name`='$name',WHERE id=$id";
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

    $sql = "UPDATE `book_types` SET column_status='DELETED' WHERE id=$id";
    $data = deleteAndUpdateQuery($sql);

    if($data == 1)
    {
        $_SESSION["msg"] = "SUCCESSFULLY DELETED";
        header('Location: index.php?id='.$id);
    }
    return;
}