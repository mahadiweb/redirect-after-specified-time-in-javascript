<div id="show"></div>

<script type="text/javascript">
	// redirect to google after 5 seconds
// window.setTimeout(function() {
//     window.location.href = 'http://www.google.com';
// }, 5000);

var n = 10;
setTimeout(countDown,1000);

function countDown(){
   n--;
   if(n > 0){
      setTimeout(countDown,1000);
   }
   //console.log(n);
   document.getElementById("show").innerHTML = n;
   if (n == 0) {
   	window.location.href = 'https://google.com';
   }
}
 </script>
