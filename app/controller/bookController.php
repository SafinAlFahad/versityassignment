<?php include_once('baseController.php');

function index()
{
    $s = "select * from book_details where status='Available' order by id";
    $book_details = readQuery($s);
    $book_details = json_decode($book_details);
    return $book_details;
}

function show()
{
    $id = $_REQUEST['id'];
    $s = "select * from book_details where id = $id";
    $json = readQuery($s);                  //json
    $data = json_decode($json);             //array
    return $data;
}

function authorList()
{
    $s = "select * from authors";
    $authors = readQuery($s);
    $authors = json_decode($authors);
    return $authors;
}
function categoryList()
{
    $s = "select * from categories";
    $categories = readQuery($s);
    $categories = json_decode($categories);
    return $categories;
}
function publisherList()
{
    $s = "select * from publishers";
    $publishers = readQuery($s);
    $publishers = json_decode($publishers);
    return $publishers;
}
function booktypeList()
{
    $s = "select * from book_types";
    $book_types = readQuery($s);
    $book_types = json_decode($book_types);
    return $book_types;
}

//saving to data base
if(isset($_REQUEST['create']))
{
    store();
}
function store()
{
    $title = $_REQUEST['title'];
    $isbn = $_REQUEST['isbn'];
    $publisher_id = $_REQUEST['publisher_id'];
    $language = $_REQUEST['language'];
    $number_of_page = $_REQUEST['number_of_page'];
    $author_id = $_REQUEST['author_id'];
    $publish_date = $_REQUEST['publish_date'];
    $version = $_REQUEST['version'];
    $category_id = $_REQUEST['category_id'];
    $description = $_REQUEST['description'];
    $status = "AVAILABLE";
    $book_type_id = $_REQUEST['book_type_id'];
    $buying_price = $_REQUEST['buying_price'];
    $selling_price = $_REQUEST['selling_price'];
    $rent_price = $_REQUEST['rent_price'];
    $location = $_REQUEST['location'];
    $fine = $_REQUEST['fine'];
    $quantity = $_REQUEST['quantity'];
    
//    print_r($GLOBALS);

    $s = "INSERT INTO `books`(`id`, `title`, `isbn`, `publisher_id`, `language`, `number_of_page`, `author_id`, `publish_date`, `version`, `category_id`, `description`, `status`, `book_type_id`, `buying_price`, `selling_price`, `rent_price`, `location`, `fine`,quantity) VALUES (null,'$title', '$isbn','$publisher_id', '$language', '$number_of_page','$author_id','$publish_date', '$version', '$category_id', '$description', '$status','$book_type_id', '$buying_price','$selling_price','$rent_price','$location', '$fine','$quantity')";
    $id = executeQuery($s);
    print_r($id);
    if($id > 0)
    {
        $_SESSION["msg"] = "SUCCESSFULLY UPDATED";
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
    $title = $_REQUEST['title'];
    $isbn = $_REQUEST['isbn'];
    $publisher_id = $_REQUEST['publisher_id'];
    $language = $_REQUEST['language'];
    $number_of_page = $_REQUEST['number_of_page'];
    $author_id = $_REQUEST['author_id'];
    $publish_date = $_REQUEST['publish_date'];
    $version = $_REQUEST['version'];
    $category_id = $_REQUEST['category_id'];
    $description = $_REQUEST['description'];
    $status = $_REQUEST['status'];
    $book_type_id = $_REQUEST['book_type_id'];
    $buying_price = $_REQUEST['buying_price'];
    $selling_price = $_REQUEST['selling_price'];
    $rent_price = $_REQUEST['rent_price'];
    $location = $_REQUEST['location'];
    $fine = $_REQUEST['fine'];
    $quantity = $_REQUEST['quantity'];
   
    
    $type = $_REQUEST['type'];
    $sql = "UPDATE `books` SET `title`='$title',`isbn`='$isbn',`publisher_id`='$publisher_id', `language`='$language', `number_of_page`='$number_of_page',`author_id`='$author_id', `publish_date`='$publish_date', `version`='$version',`category_id`='$category_id', `description`='$description', `status`='$status',`book_type_id`='$book_type_id', `buying_price`='$buying_price',`selling_price`='$selling_price',`rent_price`='$rent_price',`location`='$location', `fine`='$fine',WHERE id=$id";
    $data = deleteAndUpdateQuery($sql);

    if($data == 1)
    {
        
        $_SESSION["msg"] = "SUCCESSFULLY CREATED";
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

    $sql = "UPDATE `books` SET column_status='DELETED' WHERE id=$id";
    $data = deleteAndUpdateQuery($sql);

    if($data == 1)
    {
        $_SESSION["del_msg"] = "SUCCESSFULLY DELETED";
        header('Location: index.php?id='.$id);
    }
    return;
}