<body background="images/background.jpg">
<div class="jumbotron">
   <div id="black">
  <div class="video">
   <video autoplay muted loop >
      <source src="video/videoplayback.mp4" type="video/mp4">
   </video>
   <div class="container">
     <h1>Welkom Op VR46FANS</h1>
     <p>De Website Voor Alle Valentino Rossi Fans.</p>
   </div>
 </div>
  </div>
</div>


 <div class="neighborhood-guides" style="margin-bottom: 100px">
   <h1>Foto's</h1>
   <div class="wrapperfoto">
{foreach from=$image_list item=image}
   <a href="./foto"><div class="thumbnail" style="background-image: url('{$image.images}');"></div></a>
{/foreach}
 </div>
 </div>


<div class="news">
  <div class="news-wrap">
  <h1>Nieuws</h1>
{foreach from=$news_list item=news}
  <div class="news-item">
  <div class="news-image" style="background-image: url('{$news.images}');"></div>
  <div class="content">
  <a href="./nieuws">{$news.title}</a>
  </div>
</div>
{/foreach}
</div>
</div>
</body>
