<?php
echo "firstName is: " . trim(strtoupper(strip_tags($_POST["firstName"]))) . "<br>";
echo "lastName is: " . trim(strtoupper(strip_tags($_POST["lastName"]))) . "<br>";
echo "address is: " . trim(strtoupper(strip_tags($_POST["address"]))) . "<br>";
echo "gender is: " . trim(strtoupper(strip_tags($_POST["gender"]))) . "<br>";
echo "country: " . trim(strtoupper(strip_tags($_POST["country"]))) . "<br>";

if (isset($_POST["skills"])) {
    $skills = implode("<br/>", $_POST["skills"]) . "<br>";
} else {
    $skills = "";
}
echo $skills . "<br>";

if (!empty($_FILES["userimage"])) {
    $name = $_FILES["userimage"]["name"];
    $tmpName = $_FILES["userimage"]["tmp_name"];
    $allowedext = ['png', 'jpg', 'jpeg', 'gif'];
    $explodeFile = explode(".", $name);
    $fileext = end($explodeFile);
    if (in_array($fileext, $allowedext)) {
        move_uploaded_file($tmpName, "img/" . $name);
    } else {
        echo "not allowed<br>";
    }
} else {
    echo "Please upload your image <br>";
}

echo "password is: " . trim(strtoupper(strip_tags($_POST["password"]))) . "<br>";
echo "department is: " . trim(strtoupper(strip_tags($_POST["department"]))) . "<br>";
echo trim(strtoupper(strip_tags($_POST["captcha"]))) . "<br>";

$F_Name = $_POST["firstName"];
$L_Name = $_POST["lastName"];
$address = $_POST["address"];
$gender = $_POST["gender"];
$fileHandler = fopen("assets/form.txt", "w");
fwrite($fileHandler, $F_Name . "\n");
fwrite($fileHandler, $L_Name . "\n");
fwrite($fileHandler, $address . "\n");
fwrite($fileHandler, $gender . "\n");
fclose($fileHandler);

?>

<img src="<?= "img/" . $name ?>" alt="kak" height="200" width="200">