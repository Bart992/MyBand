<body background="images/background.jpg">
  <div class="races-title">
    <h1>Races</h1>
  </div>
  <div class="races">
    <div class="races-wrap">


      <h1>Circuits</h1>

{foreach from=$races_list item=races}
      <div class="races-item">
      <div class="races-image" style="background-image: url('{$races.images}');"></div>
      <div class="races-content">
      <a href="#artikel{$races.id}">
      {$races.title}
    </a>
      </div>
    </div>

    <div class="lightbox short-animate" id="artikel{$races.id}">
    <div class="lightbox-content">
      <div class="lightbox-image" style="background-image:url('{$races.images}');"></div>
      <div class="lightbox-content-text">
        <span style="display: inline-block; margin-top: 25px"><i class="fa fa-clock-o" aria-hidden="true"></i> {$races.date}</span>
        <p><h1>{$races.title}</h1></p>
        <p>{$races.content}</p>
      </div>
    </div>
  </div>
  <div id="lightbox-controls" class="short-animate">
    <a id="close-lightbox" class="long-animate" href="#!"></a>
  </div>

{/foreach}

  </div>
</div>

</body>
