<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>
@if(Request::url() !== 'predictions')
<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('\/6881\/rd.univision_section_deportes\/futbol\/mundialrusia2018\/predictordemisionrusia', [[ 300.0 ,  250.0 ], [ 300.0 ,  600.0 ]], 'div-gpt-ad-1528227919403-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.pubads().collapseEmptyDivs();
    googletag.enableServices();
  });
</script>
@endif


@if(Request::url() === 'predictions')
  <script>
    googletag.cmd.push(function() {
      googletag.defineSlot('\/6881\/rd.univision_section_deportes\/futbol\/mundialrusia2018\/predictordemisionrusia', [[ 728.0 ,  90.0 ]], 'div-gpt-ad-1528227919403-0').addService(googletag.pubads());
      googletag.pubads().enableSingleRequest();
      googletag.pubads().collapseEmptyDivs();
      googletag.enableServices();
    });
  </script>
@endif
