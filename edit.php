<?php 

    include_once("connection.php");

    $statement = $conn->prepare('SELECT * FROM users WHERE id=:id ');
    $statement->execute([
        'id' => $_GET['id']
    ]);
    
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    
?>

<form action="update.php?id=<?php echo $_GET['id']; ?>" method="post">
    <input type="text" name="name" placeholder="Name" value="<?php echo $user['name']; ?>"> <br/>
    <input type="email" name="email" placeholder="Email" value="<?php echo $user['email']; ?>"> <br/>
    <input type="number" name="phone" placeholder="Phone Number" value="<?php echo $user['phone']; ?>"> <br/>
    <button>Update</button>
</form>



