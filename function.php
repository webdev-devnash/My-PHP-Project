<?php

    require "connect.php";

    function dbconnect()
    {
        $mysqli = new mysqli(server,username,password,database);
        if($mysqli->connect_error!=0)
        {
              return FALSE;

        }else{
            return $mysqli;
        }

    }


    function getcategories(){
        $mysqli=dbconnect();
        $result=$mysqli->query("SELECT DISTINCT Category FROM cat_products");
        while($row=$result->fetch_assoc()){
            $categories[] =$row;

        }
        return $categories;
    }

    // function gethomepagepro($int){
    //     $mysqli=dbconnect();
    //     $result=$mysqli->query("SELECT * FROM cat_products ORDER BY rand() LIMIT $int");
    //     while($row=$result->fetch_assoc()){
    //         $data[]=$row;
    //     }
    //     return $data;
    // }

   
// function dbconnect() {
//     $mysqli = new mysqli("localhost", "root", "", "patel_electric");
//     if ($mysqli->connect_error) {
//         die("Connection failed: " . $mysqli->connect_error);
//     }
//     return $mysqli;
// }

function gethomepagepro($category) {
    $mysqli = dbconnect();
    $sql = "SELECT * FROM cat_products";
    if ($category) {
        $sql .= " WHERE Category='$category'";
    }
    $result = $mysqli->query($sql);
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;
}


// function getProductsByCategoryAndSearch($category = '', $searchTerm = '') {
//     // Connect to the database using the existing dbconnect function
//     $mysqli = dbconnect();

//     // Base query to fetch products from `cat_products`
//     $sql = "SELECT * FROM cat_products WHERE 1=1"; // `1=1` is used as a base condition to append more filters dynamically

//     // Append category filter if provided
//     if (!empty($category)) {
//         // Sanitize the category input to prevent SQL injection
//         $category = $mysqli->real_escape_string($category);
//         $sql .= " AND Category='$category'";
//     }

//     // Append search term filter if provided
//     if (!empty($searchTerm)) {
//         // Sanitize the search term input to prevent SQL injection
//         $searchTerm = $mysqli->real_escape_string($searchTerm);
//         $sql .= " AND Pro_title LIKE '%$searchTerm%'";
//     }

//     // Execute the query
//     $result = $mysqli->query($sql);

//     // Fetch data and store in an array
//     $data = [];
//     while ($row = $result->fetch_assoc()) {
//         $data[] = $row;
//     }

//     // Return the array of products
//     return $data;
// }



?>