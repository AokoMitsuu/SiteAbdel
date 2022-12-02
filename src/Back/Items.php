<?php
require ('../config.php');

$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);

switch ($data['Mode']) {
    case "Fetch":
        FetchItem($data,$connection);
        break;
    case "Add":
        AddItem($data,$connection);
        break;
    case "Update":
        UpdateItem($data,$connection);
        break;
    case "Delete":
        DeleteItem($data,$connection);
        break;
}
function FetchItem($data,$connection)
{
    $SQL = "SELECT * FROM SiteAbdelItems";
    $stmt = $connection ->prepare($SQL);
    $stmt->execute();
    $items = $stmt->fetchAll();

    echo json_encode($items);
} 
function AddItem($data,$connection)
{
    $SQL = "INSERT INTO `SiteAbdelItems` (`name`, `price`, `description`, `image`) VALUES (:name, :price, :description, :image)";
    $stmt = $connection ->prepare($SQL);
    $stmt->execute([
        'name' => $data['item']['name'],
        'price' => $data['item']['price'],
        'description' => $data['item']['description'],
        'image' => $data['item']['image'],
    ]);
    echo $connection->lastInsertId();
}
function UpdateItem($data,$connection)
{
    $SQL = "UPDATE `SiteAbdelItems` SET `name`=:name, `price`=:price, `description`=:description, `image`=:image WHERE `id` = :id";
    $stmt = $connection ->prepare($SQL);
    $stmt->execute([
        'name' => $data['item']['name'],
        'price' => $data['item']['name'],
        'description' => $data['item']['name'],
        'image' => $data['item']['name'],
        'id' => $data['item']['id'],
    ]);
}
function DeleteItem($data,$connection)
{
    $SQL = "DELETE FROM `SiteAbdelItems` WHERE `id` = :id";
    $stmt = $connection ->prepare($SQL);
    $stmt->execute([
        'id' => $data['item']['id'],
    ]);
} 
?>


