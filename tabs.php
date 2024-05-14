<?php

if(isset($_SERVER['REQUEST_URI'])){
    
    $game = $_SERVER['REQUEST_URI'];
    
}else{
    $game = "";
}
?>


    <div class="more-game">
          
          <a href="/">
              <div class="game <?php echo $game == "/" ? "active" : ""; ?>">
                  <img width="32px" height="32px" src="https://www.w3technic.com/wp-content/uploads/2022/05/2048.webp">
                  Original
              </div>
          </a>
          
          <a href="/cupcakes">
              <div class="game <?php echo $game == "/cupcakes/" ? "active" : ""; ?>">
                  <img width="32px" height="32px" src="https://www.w3technic.com/wp-content/uploads/2022/05/2048-cupcakes.webp">
                  Cupcakes
              </div>
          </a>
          
          <a href="/doge">
              <div class="game <?php echo $game == "/doge/" ? "active" : ""; ?>">
                  <img width="32px" height="32px" src="https://www.w3technic.com/wp-content/uploads/2022/05/2048-doge.webp">
                  Doge
              </div>
          </a>
          <a href="/taylor-swift">
              <div class="game <?php echo $game == "/taylor-swift/" ? "active" : ""; ?>">
                  <img width="32px" height="32px" src="/taylorswift2048.webp">
                  Taylor Swift (new)
              </div>
          </a>
      </div>