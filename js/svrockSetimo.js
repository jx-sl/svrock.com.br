/*!
 * Jx Solucoes
 * http://jxsolucoes.com.br
 * Jx Default Javascript File
 *
 * Date: 2014-01-28 23:07
 */
 

/* BANNER RAPIDO JX */
 function trocaBanner(id){
 	$('#banner .active').removeClass('active');
 	$('#banner ul li a').removeClass('active');
 	$('#banner ul li a[name='+id+']').addClass('active');
 	$('#'+id).addClass('active');
 }

 function getId(){
 	var idProximo = $('#banner .active').next('figure').attr('id');
 	if(idProximo==undefined){
 		idProximo = $('#banner figure').first().attr('id');
 	}
 	return idProximo;
 }

/* FIM BANNER RAPIDO JX */

 $(function(){
	window.setInterval(function(){
	  trocaBanner(getId());
	}, 16000);
 });


(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=156398437887367";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
