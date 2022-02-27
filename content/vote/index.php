<!doctype html>
<html lang="en">
  <head>
    <title>Semi-Vanilla Minecraft Server | Vote</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script async src="/assets/javascript/button_clicked.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <style>
      .content p, .content h3 {
        margin: 0;
        min-height: 2.5em;
      }
    </style>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: url(/assets/images/vote-title.webp); background-position: center;">
        <div>
          <h1>Vote for Us</h1>
          <h2>Earn Rewards In-Game Every Day!</h2>
        </div>
      </div>
      <div class="content" id="vote">
        <div class="shadow"></div>
        <section class="center">
          <h3>Reward: Expeditions</h3>
          <p>Earn up to 7 Expeditions every day + 1 FREE Premium Expedition each week!</p>
          <p>Every vote earns you a Vote Expedition. Vote on all 6 sites to receive a Super Vote Expedition. Vote 7 days in a row to receive a FREE Premium Expedition. Learn more: <a href="/features/expeditions/">What's in an Expedition?</a></p>
        </section>
        <section class="center" id="votelinks">
          <div>
            <h3>minecraftservers.org</h3>
            <a href="https://minecraftservers.org/vote/630602" target="_blank"><button type="button" id="vote1" onclick="buttonClicked('vote1')">Vote</button></a>
          </div>
          <div>
            <h3>topmcservers.com</h3>
            <a href="https://topmcservers.com/server/1610/vote" target="_blank"><button type="button" id="vote2" onclick="buttonClicked('vote2')">Vote</button></a>
          </div>
          <div>
            <h3>minecraft-server-list.com</h3>
            <a href="https://minecraft-server-list.com/server/484896/vote/" target="_blank"><button type="button" id="vote3" onclick="buttonClicked('vote3')">Vote</button></a>
          </div>
          <div>
            <h3>planetminecraft.com</h3>
            <a href="https://www.planetminecraft.com/server/semivanilla-mc/vote/" target="_blank"><button type="button" id="vote4" onclick="buttonClicked('vote4')">Vote</button></a>
          </div>
          <div>
            <h3>best-minecraft-servers.co</h3>
            <a href="https://best-minecraft-servers.co/server-semivanilla-mc.3773/vote" target="_blank"><button type="button" id="vote5" onclick="buttonClicked('vote5')">Vote</button></a>
          </div>
          <div>
            <h3>minecraft.buzz</h3>
            <a href="https://minecraft.buzz/vote/3877" target="_blank"><button type="button" id="vote6" onclick="buttonClicked('vote6')">Vote</button></a>
          </div>
        </section>
        <section class="center">
          <h3>Reddit</h3>
          <p>We are also listed on /r/mcservers! Find our latest post to upvote and comment!</p>
          <p>Note: This site does not grant voting rewards.</p>
          <a href="https://www.reddit.com/user/semivanillamc" target="_blank"><button type="button" id="vote7" onclick="buttonClicked('vote7')">Visit Reddit</button></a>
        </section>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
