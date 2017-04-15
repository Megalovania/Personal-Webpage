/**
 * Cory Cizauskas
 * 
 * This file reads information from the NYT api and sends it to article tags
*/

$( document ).ready(function() {
  var url = "https://api.nytimes.com/svc/topstories/v2/opinion.json";
  url += '?' + $.param({
    'api-key': "7fe2b85c1cef4b39bcc739f0330f2791"
  });
  $.ajax({
    url: url,
    method: 'GET',
  }).done(function(result) {
    
    
    //console.log(result);
    
    
    //document.getElementById("art1").innerHTML = result.results["0"].title;
    /*$("#art1").find(".title").text(result.results["0"].title);
    $("#art1").find(".abstract").text(result.results["0"].abstract);
    $("#art1").find("a").attr('href',result.results["0"].url);*/
    $(".nyt-art").each(function(i){
      $(this).find(".title").text(result.results[i].title);
      $(this).find(".abstract").text(result.results[i].abstract);
      $(this).find("a").attr('href',result.results[i].url);
    });
    
  }).fail(function(err) {
    throw err;
  });
});