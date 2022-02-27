<!doctype html>
<html lang="en">
  <head>
    <title>Semi-Vanilla Minecraft Server | Custom Enchants</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: url(/assets/images/enchants-title.webp); background-position: center;">
        <div>
          <h1>Custom Enchants</h1>
          <h2>Powered by Advanced Enchantments</h2>
        </div>
      </div>
      <div class="content split-content">
        <div class="shadow"></div>
        <div>
          <section>
            <h3>Custom Enchants</h3>
            <p>There are <strong>123</strong> custom enchants available on SemiVanilla. They are available for all types of weapons, armor, and tools.</p>
            <p>To see a list of all available enchants, <a href="all/">click here</a>.</p>
            <p>Custom enchants are broken up into 6 different rarity categories. The higher the rarity, the less likely you are to find that enchant.</p>
            <ul>
              <li><span style="color: #ffffff;">Common</span> - 25% chance</li>
              <li><span style="color: #55ff55;">Uncommon</span> - 20% chance</li>
              <li><span style="color: #55ffff;">Rare</span> - 15% chance</li>
              <li><span style="color: #ff55ff;">Legendary</span> - 10% chance</li>
              <li><span style="color: #ffaa00;">Exotic</span> - 5% chance</li>
              <li><span style="color: #ffff00;">Fabled</span> - 2.5% chance</li>
            </ul>
          </section>
          <section>
            <h3>Obtaining Items/Enchants</h3>
            <p>Custom enchants work just like vanilla enchants! They can be obtained by enchanting an item in an Enchantment Table, or by using a Custom Enchantment Books.</p>
            <p>Custom enchant items (orbs, scrolls, trackers, and books), can be obtained by trading with villagers or found in loot chests around the world.</p>
            <p style="color: #ff674d;">Warning: Books CANNOT receive custom enchants in Enchantment Tables.</p>
          </section>
          <section>
            <h3>Limits</h3>
            <p>By default, a single item can have up to 3 custom enchantments applied to it. This can be increased up to 7 with <strong>Orbs</strong>.</p>
            <p>Additionally, some custom enchantments are not compatible with others.</p>
            <ul>
              <li>Strike and Area Strike are exclusive.</li>
              <li>Hasten, Haste, Trench, and Vein Miner are exclusive.</li>
              <li>Heavy, Tank, and Valor are exclusive.</li>
            </ul>
          </section>
        </div>
        <div>
          <section>
            <h3>Using Enchants</h3>
            <p>All enchants activate automatically! Read the description of each enchant carefully to learn what it does and when it applies.</p>
            <p>If an enchant description starts with "Chance of" the enchant will activate randomly when the item is used. If an enchant
description does NOT say those words, then A) the enchant activates every time the item is used, or B) the enchant activates randomly, and provides an "average benefit".</p>
            <p>For example, if an enchant provides an increase to damage dealt - it most likely applies randomly while the item is used,
providing an increase in damage dealt overall.</p>
            <p style="color: #ff674d;">Warning: Enchanted items do NOT work in offhand.</p>
          </section>
          <section>
            <h3>Custom Items</h3>
            <p>Custom enchanting-related items can be found by trading with Villagers, or in loot chests.</p>
            <ul>
              <li><strong>Orbs</strong> - Increases the maximum enchants you can add to an item. Each one has a unique success rate (chance of the upgrade working).</li>
              <li><strong>Black Scrolls</strong> - Removes a random enchant from an item and turns it into a book you can reuse on a different item.</li>
              <li><strong>Trackers</strong> - Adds a stat counter to track how many times you've used that item.</li>
              <li><b>Holy White Scrolls</b> - Allows you to keep the item on death. Only works once.</li>
              <li><strong>Enchant Books</strong> - Used in an anvil to enchant an item.</li>
            </ul>
          </section>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
