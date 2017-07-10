<body background="images/background.jpg">

  <div class="foto-title">
    <h1>Foto's</h1>
  </div>

    <div class="foto-wrapper" style="margin-bottom: 100px">
    <div class="wrapperfoto">
 {foreach from=$image_list item=image}
    <div class="thumbnail" style="background-image: url('{$image.images}');"></div>
 {/foreach}
  </div>
  </div>

  <div class="paginas-wrap">
    <p id="pagenumber">Pagina {$page}</p>
    {if $page gt 1}
      <span id="paginas-links">
        <a href="index.php?page=foto&pagina={$page-1}">Vorige</a>
      </span>
    {/if}
    {if $page lt $number_of_pages}
      <span id="paginas-rechts">
        <a href="index.php?page=foto&pagina={$page+1}">Volgende</a>
      </span>
    {/if}
  </div>



</body>
