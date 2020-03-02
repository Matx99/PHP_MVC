<section id="main-section">
<?php
    if($_SESSION['user']){
        echo'<div>
        <h2 class="center">List of users</h2>
                <table class="">
                <tr>
                    <th>Email</th>
                    <th>Password</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Admin</th>
                </tr>';
        foreach($usersList as $u){
            echo '</tr>
            <td>'.$u['email'].'</td>
            <td>'.$u['password'].'</td>
            <td>'.$u['firstName'].'</td>
            <td>'.$u['lastName'].'</td>
            <td>'.$u['admin'].'</td>
        <tr>';
        }
        echo'</table></div>';
    } else {
        require('unauthorized.php');
    }
?>
</section>