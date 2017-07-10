<body background="images/background.jpg">

  <div class="nieuws-title">
    <h1>Nieuws</h1>
  </div>

  <div class="nieuws">
    <div class="nieuws-wrap">
  {foreach from=$news_list item=news}
    <div class="nieuws-item">
    <div class="nieuws-image" style="background-image: url('{$news.images}');"></div>
    <div class="nieuws-content">



  <a href="#artikel{$news.id}">
  {$news.title}
  </a>
    </div>
  </div>
  <div class="lightbox short-animate" id="artikel{$news.id}">
  <div class="lightbox-content">
    <div class="lightbox-image" style="background-image:url('{$news.images}');"></div>
    <div class="lightbox-content-text">
      <span style="display: inline-block; margin-top: 25px"><i class="fa fa-clock-o" aria-hidden="true"></i> {$news.date}</span>
      <p><h1>{$news.title}</h1></p>
      <p>{$news.content}</p>
    </div>
  </div>
</div>
<div id="lightbox-controls" class="short-animate">
  <a id="close-lightbox" class="long-animate" href="#!"></a>
</div>

  {/foreach}
  </div>
  </div>








  <div class="paginas-wrap">
    <p id="pagenumber">Pagina {$page}</p>
    {if $page gt 1}
      <span id="paginas-links">
        <a href="index.php?page=nieuws&pagina={$page-1}">Vorige</a>
      </span>
    {/if}
    {if $page lt 3}
      <span id="paginas-rechts">
        <a href="index.php?page=nieuws&pagina={$page+1}">Volgende</a>
      </span>
    {/if}
  </div>




</body>
