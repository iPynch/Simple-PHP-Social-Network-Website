<?php

echo '<div class="post">';
if($row['post_public'] == 'Y') {
    echo '<p class="public">';
    echo 'Public';
}else {
    echo '<p class="public">';
    echo 'Private';
}
echo '<br>';
echo '<span class="postedtime">' . $row['post_time'] . '</span>';
echo '</p>';
echo '<div>';
include 'profile_picture.php';
echo '<a class="profilelink" href="profile.php?id=' . $row['user_id'] .'">' . $row['user_firstname'] . ' ' . $row['user_lastname'] . '<a>';
echo'</div>';
echo '<br>';
echo '<p class="caption">' . $row['post_caption'] . '</p>';
echo '<center>'; 
$target = glob("data/images/posts/" . $row['post_id'] . ".*");
if($target) {
    echo '<img src="' . $target[0] . '" style="max-width:580px">'; 
    echo '<br><br>';
}
echo '</center>';
echo '</div>';

?>