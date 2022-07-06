<html>
<head>
<!-- Start HTML Slider Code HEAD section -->
<style>
/* (A) OUTER CONTAINER */
.hwrap {
  /* (A1) DIMENSIONS */
  width: 100%;
  height: 195px;
  padding:20px;  /* OPTIONAL */

  /* (A2) COSMETICS */

  overflow: hidden; /* HIDE SCROLLBARS */
}

/* (B) MIDDLE CONTAINER - FLEX LAYOUT */
.hmove {
  display: flex;
  position: relative;
  top: 0; right: 0;
}

/* (C) SLIDES - FORCE INTO ONE LONG HORIZONTAL ROW */
.hslide {
  width: 100%;
  flex-shrink: 0;
  box-sizing: border-box;
  padding: 10px;
}

/* (D) SLIDE ANIMATION */
@keyframes slideh {
  /* (D0) THE IDEA - USE KEYFRAMES TO SHIFT SLIDES *
  0% { right: 0; }
  33% { right: 100%; }
  66% { right: 200%; }
  100% { right: 0; }
 
  /* (D1) BUT THE ABOVE WILL SHIFT NON-STOP */
  /* SO WE ADD PAUSES BETWEEN EACH SLIDE */
  0% { right: 0; }
  30% { right: 0; }
  33% { right: 100%; }
  63% { right: 100%; }
  66% { right: 200%; }
  97% { right: 200%; }
  100% { right: 0; }
}
.hmove { animation: slideh linear 8s infinite; }
.hmove:hover { animation-play-state: paused; }
</style>
<!-- End HTML Slider Code HEAD section -->
</head>
<!-- Start Slider HTML Code BODY section -->
<div class="hwrap">
<h1 align="center" style="background-color:#CCCCFF;font-family:High Tower Text;color:#000099;font-size:40px;"> <b>some customer review </b></h1>
<div class="hmove">
  <div class="hslide">
    <p style="font-family:Sylfaen;font-size:18px;">If you are health conscious and if you need fresh milk everyday order Shelar Milk. I am quite impressed with the quality of milk, it's definitely worth it. Also they are very professional when it comes to delivering the milk at the doorstep. Personally I prefer the Shelar Milk Gir cow milk and people who are gym freaks should definitely order this. Keep it up Team.
<br><font style="color:green;"> - Pratiksha S</font>
<br>
</p>
  </div>
  <div class="hslide">
    <p style="font-family:Sylfaen;font-size:19px;">The milk is so nutritious and Tasty as well. It is natural with no edibles. It is delivered in very safe way to doorsteps . Keep it up 👍
<br><font style="color:green;">- Vaibhavi M</font>
</p>
  </div>
  <div class="hslide">
    <p style="font-family:Sylfaen;font-size:19px;">Many Gir cows are there and fresh milk is provided... and feed provided to cows is completely organic! Must try their products! Worth it..
<br><font style="color:green;">- anagha a</font>
<br>
</p>
  </div>
</div></div>
<!-- Slider HTML Code BODY section -->
</html>