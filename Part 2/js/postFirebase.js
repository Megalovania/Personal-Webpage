var database = firebase.database();
      
//var getPost = database.ref('/posts/').orderByKey();

var hi = database.ref('posts').once('value').then(function(snapshot){
  //console.log(snapshot.val());
  snapshot.forEach(function(child){
    //console.log(child.key, child.val());
    var title = child.val().title;
    var date = child.val().date;
    var content = child.val().content;
    $('#post_start').append('<article class="post"><div class="thumb"><img id="coffee"/></div><div class="content"><header><h4>'+title+'</h4><time>'+date+'</time></header><p>'+content+'</p></div></article>');
    $('#post_start').append('<article class="post"><div class="thumb"><img id="coffee"/></div><div class="content"><header><h4>'+title+'</h4><time>'+date+'</time></header><p>'+content+'</p></div></article>');
    $('#post_start').append('<article class="post"><div class="thumb"><img id="coffee"/></div><div class="content"><header><h4>'+title+'</h4><time>'+date+'</time></header><p>'+content+'</p></div></article>');
  });
});

/*
getPost.on('value', function(snapshot){
  console.log(snapshot.val());
  
  snapshot.forEach(function(child){
    console.log(child.key, child.val());
  });
  
});
*/