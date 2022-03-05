<!doctype html>
<html lang="en">
  <head>
    <title>Asthonia Minecraft Server | Join</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async defer>
      function copyToClipboard(id) {
        var aux = document.createElement("input");
        aux.setAttribute("value", "play.asthonia.com");
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
        document.getElementById(id).style.backgroundColor = "#d2a69f";
        $('.overlay').addClass('active');
      }
      function overlayDismiss() {
        $('.overlay').removeClass('active');
      }
    </script>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <script defer async type="module">
      import '/assets/javascript/jquery-3.6.0.min.js';
      $(document).ready(function () {
        jQuery.getJSON("https://api.mcsrvstat.us/2/play.asthonia.com",function(json){
          if (json.online == false) {
          }
          else {
            // success
            document.getElementById('player-count').innerHTML = json.players.online + ' Players Online';
          }
        });
      });
    </script>
    <style>
      section {
        justify-content: center;
        align-items: center;
      }
      section img {
        border-radius: 15px;
      }
    </style>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background: url(/assets/images/starshrew-bg.webp); background-size: cover; background-position: 85%;">
        <div>
          <h1>How to Join</h1>
          <h2 id="player-count">99 Players Online</h2>
        </div>
        <div style="position:absolute; bottom:80px;" id="welcome"></div>
      </div>
      <div class="content" id="landing" style="max-width:1400px;">
        <div class="shadow"></div>
        <section>
          <div class="narrow">
            <h3>Java Edition</h3>
            <ol>
              <li>In Minecraft, go to <strong>Multiplayer</strong> and then <strong>Add Server</strong>.</li>
              <li>Enter a name, this can be anything you want!</li>
              <li>Enter "play.khavalon.com" for the <strong>Server Address</strong>.</li>
              <li>Click <strong>Done</strong>.</li>
              <li>Select our server and join!</li>
            </ol>
          </div>
          <div>
            <img class="wide" src="/assets/images/join-java-edition.webp" alt="Minecraft Java Edition Screenshot" />
          </div>
        </section>
        <section>
          <div>
            <img class="wide" src="/assets/images/join-bedrock-edition.webp" alt="Minecraft Bedrock Edition Screenshot" />
          </div>
          <div class="narrow">
            <h3>Bedrock Edition</h3>
            <ol>
              <li>In Minecraft, go to <strong>Play</strong> and then <strong>Servers</strong>.</li>
              <li>Scroll to the bottom and tap on <strong>Add Server</strong>.
              <li>Enter a name, this can be anything you want!</li>
              <li>Enter "play.semivanilla.com" for the <strong>Server Address</strong>. Leave the default port (19132).</li>
              <li>Tap <strong>Play</strong>!</li>
            </ol>
          </div>
        </section>
        </section>
        <section class="center" style="flex-direction: column; max-width: 600px;">
          <h3>Ready?</h3>
          <p>Click the button below to copy the IP!</p>
          <button type="button" id="copybutton2" onclick="copyToClipboard('copybutton2')">Play Now</button>
        </section>
      </div>
      <div class="overlay">
        <div class="overlay-bg" onclick="overlayDismiss()"></div>
        <div class="overlay-fg">
          <p class="ip">play.khavalon.com</p>
          <p style="margin:10px 0 30px 0;">Copied to Clipboard</p>
          <button type="button" onclick="overlayDismiss()">Okay</button>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
