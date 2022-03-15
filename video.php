<div class="video-container">
      <video src="" width="640" height="360" ></video>
      <h3>{{this.activeVideo.title}}</h3>
    <div class="row">
        <p>{{this.activeVideo.views}} views</p> 
        <p>{{this.activeVideo.likes}} <button>Like</button></p>
    </div>
</div>
<style>
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