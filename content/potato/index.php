<!doctype html>
<html lang="en">
  <head>
    <title>Semi-Vanilla Minecraft Server | Optimize Potato PC</title>
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
    <style>
      section {
        justify-content: center;
        align-items: center;
      }
      section img {
        border-radius: 15px;
      }
      .content ul li {
        margin: 0 0 0.5em 0;
      }
      .content ul p {
        margin: 0;
      }
    </style>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title">
        <div>
          <h1>Potato Optimization</h1>
          <h2>How to run Minecraft on a Slow Computer</h2>
        </div>
        <div style="position:absolute; bottom:80px;" id="welcome"></div>
      </div>
      <div class="content" id="landing" style="max-width:1400px;">
        <div class="shadow"></div>
        <section>
          <div class="narrow">
            <h3>The SVMC Optimization Pack</h3>
            <p>The directions below will walk you through installing our performance modpack!</p>
            <p>Some users have alternatively recommended trying <a href="https://www.lunarclient.com/" target="_blank">LunarClient.</a></p>
            <p>Our modpack:</p>
            <ul style="columns:2; -webkit-columns:2; -moz-columns:2;">
              <li><a href="https://fabricmc.net/use/installer/" target="_blank">Fabric Core</a></li>
              <li><a href="https://www.curseforge.com/minecraft/mc-mods/fabric-api" target="_blank">Fabric API</a></li>
              <li><a href="https://www.curseforge.com/minecraft/mc-mods/clumps" target="_blank">Clumps</a></li>
              <li><a href="https://www.curseforge.com/minecraft/mc-mods/krypton" target="_blank">Krypton</a></li>
              <li><a href="https://www.curseforge.com/minecraft/mc-mods/lazy-language-loader" target="_blank">lazy-language-loader</a></li>
              <li><a href="https://www.curseforge.com/minecraft/mc-mods/lazydfu" target="_blank">LazyDFU</a></li>
              <li><a href="https://www.curseforge.com/minecraft/mc-mods/sodium" target="_blank">Sodium</a></li>
              <li><a href="https://www.curseforge.com/minecraft/mc-mods/starlight" target="_blank">Starlight</a></li>
            </ul>
          </div>
          <div>
            <img class="wide" src="/assets/images/potato-modpack-icon.webp" alt="SVMC Optimization Modpack Icon" />
          </div>
        </section>
        <section>
          <div>
            <img class="wide" src="/assets/images/potato-curseforgeapp.webp" alt="CurseForge App Screenshot" />
          </div>
          <div class="narrow">
            <h3>1. Install CurseForge App</h3>
            <p>We will use the CurseForge App to install some mods. It makes managing your mods very easy.</p>
            <p>After this, you will always launch Minecraft through the CurseForge App.</p>
            <p><a href="https://download.curseforge.com/" target="_blank">download.curseforge.com</a></p>
          </div>
        </section>
        <section>
          <div class="narrow">
            <h3>2. Add our Modpack</h3>
            <p>Open CurseForge App, click on "Minecraft" and then "Browse Modpacks".</p>
            <p>Search for "SVMC" and select our Modpack "SVMC Potato Optimization Pack"</p>
            <p>Click "Install"</p>
          </div>
          <div>
            <img class="wide" src="/assets/images/potato-search.webp" alt="CurseForge App - Minecraft - Search for SVMC" />
          </div>
        </section>
        <section>
          <div>
            <img class="wide" src="/assets/images/potato-launchminecraft.webp" alt="CurseForge App - Minecraft - My Modpacks" />
          </div>
          <div class="narrow">
            <h3>3. Launch Minecraft</h3>
            <p>Navigate to the "My Modpacks" tab, select our Modpack, and click "Play"!</p>
            <p>This will open a new Minecraft launcher with our mods pre-installed.</p>
            <p style="color:#4ad555;">Note: This instance of Minecraft will not have your old worlds and servers. You can still access your old worlds and servers by opening Minecraft without using CurseForge App.</p>
          </div>
        </section>
        <section>
          <div class="narrow">
            <h3>4. Minecraft Settings</h3>
            <p>Finally, let's apply some optimized settings. In Minecraft, click on "Options", then "Video Settings", and apply the following:</p>
            <ul>
              <li><p><strong>General -> Render Distance</strong> - <span style="color:#4ad555;">8</span></p><p>(The server will not show over 10)</p></li>
              <li><p><strong>General -> Simulation Distance</strong> - <span style="color:#4ad555;">6</span></p><p>(The server will not show over 8)</p></li>
              <li><strong>Quality -> Graphics</strong> - <span style="color:#4ad555;">Fast</span></li>
              <li><strong>Quality -> Clouds</strong> - <span style="color:#4ad555;">Fast</span></li>
              <li><strong>Quality -> Particles</strong> - <span style="color:#4ad555;">Minimal</span></li>
              <li><p><strong>Quality -> Mipmap Levels</strong> - <span style="color:#4ad555;">0</span></p><p>(Increase if possible)</p></li>
            </ul>
          </div>
          <div>
            <img class="wide" src="/assets/images/potato-settings.webp" alt="Minecraft Settings Screenshot" />
          </div>
        </section>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
