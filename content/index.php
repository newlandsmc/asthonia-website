<!doctype html>
<html lang="en">
  <head>
    <title>Semi-Vanilla Minecraft Server | Hard Survival | RPG</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async defer>
      function copyToClipboard(id) {
        var aux = document.createElement("input");
        aux.setAttribute("value", "play.semivanilla.com");
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
      $(function() {
        $('#scrollbutton, #scrollupbutton').click(function() {
          var id = $(this).attr('href');
          $('html,body').animate({ scrollTop: $(id).offset().top }, 'slow');
          return false;
        });
      });
      $(document).ready(function () {
        jQuery.getJSON("https://api.mcsrvstat.us/2/mc.semivanilla.com",function(json){
          if (json.online == false) {
          }
          else {
            // success
            document.getElementById('player-count').innerHTML = json.players.online + ' Players Online';
          }
        });
      });
    </script>
  </head>
  <body id="landing-body">
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="title" style="background: linear-gradient( rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3) ), url(/assets/images/the-world-out-there.webp); background-size: cover; background-position: 85%;">
        <div id="landing-title-text" style="text-align: center">
          <img id="landing-logo" src="/assets/images/logo.webp" alt="SemiVanilla MC Logo" />
          <h1 class="hide-mobile-2">Adventure Awaits</h1>
          <h2 class="hide-mobile" id="player-count">99 Players Online</h2>
          <p class="ip">play.semivanilla.com</p>
          <div style="width:100%">
            <button type="button" id="copybutton" onclick="copyToClipboard('copybutton')">Play Now</button>
          </div>
          <a id="scrollbutton" href="#welcome">
            <span></span>
            <p style="display: none;">Learn More</p>
          </a>
        </div>
        <div style="position:absolute; bottom:80px;" id="welcome"></div>
      </div>
      <div class="content" id="landing">
        <div class="shadow"></div>
        <section class="center" style="flex-direction: column; max-width: 600px; border-radius: 50px; border: #ff674d dotted 3px; margin: 50px;">
          <h3>Welcome to SemiVanilla</h3>
          <p>Not your average cookie-cutter SMP. SemiVanilla is a hard difficulty, pvp-enabled, survival RPG server. Danger lurks around every corner. Will you survive?</p>
        </section>
        <section class="center">
          <div>
            <h3>Hard Difficulty Survival</h3>
            <p>Zombies can break through wooden doors and spawn reinforcements. Spiders have beneficial status effects. Villagers turn into zombie villagers when killed. Hostile mobs deal more damage. Starvation kills.</p>
          </div>
          <div>
            <img class="small" src="/assets/images/landing-zombie.webp" alt="Minecraft Zombie" />
          </div>
        </section>
        <section class="center">
          <div>
            <img class="small" src="/assets/images/landing-pickaxe.webp" alt="Minecraft Enchanted Pickaxe" />
          </div>
          <div>
            <h3>+ RPG Elements</h3>
            <p>Level up your skills to unlock special abilities. Level up your mana to use them. Enchant your weapons with custom enchantments and use your power to fight off challenging mobs, or summon a boss and defeat them to earn rewards.</p>
          </div>
        </section>
        <section class="center">
          <div>
            <h3>+ Competitive Multiplayer</h3>
            <p>Hunt down other players and you'll become a bounty. Hunt down Bounties and you'll become a hero. Team up with others to build your base and strengthen your defenses, or go rogue and fight anyone who dares approach.</p>
          </div>
          <div>
            <img class="small" src="/assets/images/landing-pvp.webp" alt="Minecraft Swords" />
          </div>
        </section>
        <section class="center" style="flex-direction: column; max-width: 600px;">
          <h3>Redefining Semi-Vanilla</h3>
          <p>A unique survival experience that builds on the vanilla survival game. A challenging adventure awaits... do you accept?</p>
          <button type="button" id="copybutton2" onclick="copyToClipboard('copybutton2')">Play Now</button>
        </section>
      </div>
      <div class="overlay">
        <div class="overlay-bg" onclick="overlayDismiss()"></div>
        <div class="overlay-fg">
          <p class="ip">play.semivanilla.com</p>
          <p style="margin:10px 0 30px 0;">Copied to Clipboard</p>
          <a href="/join/"><button type="button">More Help</button></a>
          <button type="button" onclick="overlayDismiss()">Okay</button>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
