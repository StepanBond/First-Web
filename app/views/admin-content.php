<?php
    require __DIR__ ."/../src/app-admin.php";
?>
<div class="bg-dark">
    <table class="table text-white">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">message</th>
        <th scope="col">date</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
                while($row = $result->fetch_assoc()){
                    echo ' <tr>
                                <td>'.$row["id"].'</td>
                                <td>'.$row["name"].'</td>
                                <td>'.$row["email"].'</td>
                                <td>'.$row["message"].'</td>
                                <td>'.$row["date"].'</td>
                    </tr>';
                }
            ?>
        </tr>
    </tbody>
    </table>
</div>