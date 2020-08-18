<?php include_once("connection.php"); ?>

<a href="create.php">+ Add User</a>

<table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Action</th>
    </tr>

    <?php $query = $conn->query('SELECT * FROM users'); ?>

    <?php if($query->rowCount() > 0): ?>
        <?php 
            $no = 1; 
            foreach($query->fetchAll(PDO::FETCH_ASSOC) AS $row): 
        ?>  
            <tr>
                <td> <?php echo $no; ?> </td>
                <td> <?php echo $row['name']; ?> </td>
                <td> <?php echo $row['email']; ?> </td>
                <td> <?php echo $row['phone']; ?> </td>
                <td> 
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php 
            $no++; 
            endforeach; 
        ?>
    <?php else: ?>        
        <tr>
            <th colspan="5">Belum ada data user</th>
        </tr>
    <?php endif; ?>
</table>



