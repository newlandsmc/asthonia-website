<!doctype html>
<html lang="en">
  <head>
    <title>Semi-Vanilla Minecraft Server | Skills & Abilities</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: url(/assets/images/skills-title.webp); background-position: center;">
        <div>
          <h1>Skills & Abilities</h1>
          <h2>Powered by Aurelium Skills</h2>
        </div>
      </div>
      <div class="content split-content">
        <div class="shadow"></div>
        <div>
          <section>
            <h3>Skills</h3>
            <p>There are 15 unique skills on SemiVanilla that you will level up as you play the game. You gain XP in each of them automatically by doing relevant activities.</p>
            <p>As you level up each skill, you will unlock special <strong>abilities</strong> and level up your <strong>stats</strong>.</p>
            <p>You can check your skills levels anytime with <strong>/skills</strong> or <strong>/&lt;skillname&gt;</strong>.
            <ul>
              <li><strong>Farming</strong> - Harvest crops to earn XP</li>
              <li><strong>Foraging</strong> - Cut trees to earn XP</li>
              <li><strong>Mining</strong> - Mine stone and ores to earn XP</li>
              <li><strong>Fishing</strong> - Catch fish to earn XP</li>
              <li><strong>Excavation</strong> - Dig with a shovel to earn XP</li>
              <li><strong>Archery</strong> - Shoot mobs or players with a bow to earn XP</li>
              <li><strong>Defense</strong> - Take damage from mobs or players to earn XP</li>
              <li><strong>Fighting</strong> - Fight mobs or players with melee weapons to earn XP</li>
              <li><strong>Endurance</strong> - Walk or run to earn XP</li>
              <li><strong>Agility</strong> - Jump or take fall damage to earn XP</li>
              <li><strong>Alchemy</strong> - Brew potions to earn XP</li>
              <li><strong>Enchanting</strong> - Enchant items to earn XP</li>
              <li><strong>Sorcery</strong> - Use mana abilities to earn XP</li>
              <li><strong>Healing</strong> - Drink or splash potions to earn XP</li>
              <li><strong>Forging</strong> - Combine or apply books in an anvil to earn XP</li>
            </ul>
          </section>
          <section>
            <h3>XP Boosts</h3>
            <p>You can purchase XP boosts in our <a href="https://store.semivanilla.com" target="_blank">online store</a>. XP Boosts apply to the <strong>ENTIRE</strong> server and last 2 hours.</p>
            <p>Premium ranks also receive a permanent small XP boost.</p>
            <ul>
              <li><a href="https://store.semivanilla.com" target="_blank"><span style="color:rgb(0,111,144);">D</span><span style="color:rgb(43,132,162);">i</span><span style="color:rgb(70,154,180);">a</span><span style="color:rgb(95,177,199);">m</span><span style="color:rgb(120,199,217);">o</span><span style="color:rgb(145,223,236);">n</span><span style="color:rgb(171,246,255);">d</span></a> - 30% XP boost</li>
              <li><a href="https://store.semivanilla.com" target="_blank"><span style="color:rgb(0,83,0);">E</span><span style="color:rgb(28,108,30);">m</span><span style="color:rgb(49,134,58);">e</span><span style="color:rgb(69,161,85);">r</span><span style="color:rgb(89,189,113);">a</span><span style="color:rgb(110,217,143);">l</span><span style="color:rgb(130,246,173);">d</span></a> - 20% XP boost</li>
              <li><a href="https://store.semivanilla.com" target="_blank"><span style="color:rgb(26,61,143);">L</span><span style="color:rgb(51,82,165);">a</span><span style="color:rgb(73,104,188);">p</span><span style="color:rgb(95,127,211);">i</span><span style="color:rgb(116,151,234);">s</span></a> - 10% XP boost</li>
            </ul>
          </section>
          <section>
            <h3>Ranks</h3>
            <p>Ranks on the server are tied to your Sorcery skill. Every 20 levels in Sorcery you will rank up. There are no benefits to ranks, but they do appear in chat before your name to indicate your experience level on the server.</p>
            <p>There are currently 5 ranks on the server, as the max level for all skills is currently <strong>97</strong>.
            <ul>
              <li><strong>Vagrant</strong> - New player</li>
              <li><strong>Awoken</strong> - Level 20</li>
              <li><strong>Adept</strong> - Level 40</li>
              <li><strong>Savant</strong> - Level 60</li>
              <li><strong>Legend</strong> - Level 80</li>
            </ul>
          </section>
        </div>
        <div>
          <section>
            <h3>Stats</h3>
            <p>You have 6 different stats that increase as you level up your different skills. Each stat increases a specific aspect of your character - such as max health, max mana, or damage resistance.</p>
            <p>Use <strong>/stats</strong> to check your stats at any time.</p>
              <ul>
                <li><span style="color:#ff5555;">Strength</span> - Increases your attack damage</li>
                <li><span style="color:#ffaa00;">Health</span> - Increases max health</li>
                <li><span style="color:#ffff55;">Regeneration</span> - Increases health and mana regen</li>
                <li><span style="color:#55ff55;">Luck</span> - Increases chance of getting rare loot</li>
                <li><span style="color:#55ffff;">Wisdom</span> - Increases max mana, experience gain, and decreases anvil cost</li>
                <li><span style="color:#ff55ff;">Toughness</span> - Decreases damage from enemies</li>
              </ul>
          </section>
          <section>
            <h3>Mana Abilities</h3>
            <p>Mana abilities, or active abilities, are short and intense benefits that you can activate by using <strong>Mana</strong>. Each skill has unique Mana abilities that you will unlock as you level up.</p>
            <p>To use a Mana ability, hold the applicable tool (such as a pickaxe for a mining ability), right click, and then 
start using that tool. You will see the message "You ready your tool" after right clicking, followed by additional messages as 
the skill activates and is used.</p>
            <p>Mana abilities require Mana to use. You can see how much Mana you have with <strong>/mana</strong>. Mana regenerates over time, and your max Mana can be increased by leveling up your Wisdom stat.</p>
          </section>
          <section>
            <h3>Passive Abilities</h3>
            <p>Each skill has passive abilities that unlock as you level up. Passive abilities are always active and provide you a small benefit, similar to stats. </p>
            <p>You can see which passive abilities are unlocked, or available, by looking at the GUI page for any skill.</p>
          </section>
          <section>
            <h3>Useful Commands</h3>
            <ul>
              <li><strong>/skills</strong> - View all skills</li>
              <li><strong>/stats</strong> - View all your stats</li>
              <li><strong>/&lt;skillname&gt;</strong> - View specific skill details</li>
              <li><strong>/mana</strong> - View your mana level</li>
              <li><strong>/abtoggle</strong> - Toggle actionbar messages</li>
            </ul>
          </section>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
