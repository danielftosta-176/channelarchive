
<div class="video-container">
      <?php
            echo '<video controls src="/videos/';
            echo $_GET['v'];
            echo '.mp4" width="640" height="360"></video>';
    ?>
<?php
echo '<h3>';
echo $_GET['t'];
echo '</h3>';
//echo $_GET['v'];
//echo $_POST['t'];
?>
    <div class="row">
        <p>nil views</p> 
        <p>nil <button>Like</button></p>
    </div>
</div>


<style>
.thumbnail{
    display:flex;
}

.thumbnail img{
    width:168px;
}

.thumbnail-info{
    margin-left:20px;
}

.thumbnail h3{
    font-size:16px;
}

h3,
p{
    margin:0;
    padding:0;
}

.thumbnail-views{
    font-size:14px;
}

.video-player{
    display:flex;
    width:1200px;
    margin:auto;
}

.video-container{
    margin-right:40px;
}

.row{
    display:flex;
    justify-content:space-between;
}

button{
    background:#D0021B;
    color:white;
    border:none;
    padding:10px 20px;
}
</style>