<div class="usernav">
    <?php
        $sql2 = "SELECT COUNT(*) AS count FROM friendship 
                 WHERE friendship.user2_id = {$_SESSION['user_id']} AND friendship.friendship_status = 0";
        $query2 = mysqli_query($conn, $sql2);
        $row = mysqli_fetch_assoc($query2);
    ?>
    <ul> <!-- Ensure there are no enter escape characters.-->
        <li><a href="requests.php">Friend Requests (<?php echo $row['count'] ?>)</a></li><li><a href="profile.php">Profile</a></li><li><a href="friends.php">Friends</a></li><li><a href="home.php">Home</a></li><li><a href="logout.php">Log Out</a></li>
    </ul>
    <div class="globalsearch">
        <form method="get" action="search.php" onsubmit="return validateField()"> <!-- Ensure there are no enter escape characters.-->
            <select name="location">
                <option value="emails">Emails</option>
                <option value="names">Names</option>
                <option value="hometowns">Hometowns</option>
                <option value="posts">Posts</option>
            </select><input type="text" placeholder="Search" name="query" id="query"><input type="submit" value="Search" id="querybutton">
        </form>
    </div>
</div>

<script>
function validateField(){
    var query = document.getElementById("query");
    var button = document.getElementById("querybutton");
    if(query.value == "") {
        query.placeholder = 'Type something!';
        return false;
    }
    return true;
}
</script>