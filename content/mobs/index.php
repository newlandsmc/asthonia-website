<!doctype html>
<html lang="en">
  <head>
    <title>Semi-Vanilla Minecraft Server | Custom Mobs</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: url(/assets/images/mobs-title.webp); background-position: center;">
        <div>
          <h1>Custom Mobs</h1>
          <h2>Powered by Mythic Mobs</h2>
        </div>
      </div>
      <div class="content split-content">
        <div class="shadow"></div>
        <div>
          <section>
            <h3>Vampire Bat</h3>
            <p>The Vampire Bat may look like a normal bat at first, but its bite will quickly change your mind. Once the Vampire Bat attacks, it also begins calling other Vampire Bats in the area to join.</p>
            <p>The Vampire Bat spawns anywhere a normal bat would.</p>
            <img class="medium" src="/assets/images/mobs-bat.webp" alt="Minecraft bat"></img>
          </section>
          <section>
            <h3>Mob Leader</h3>
            <p>An Illusioner with quite the following, this Illusioner will spawn in a cadre of zombies and skeletons, with more spawning the more you ignore it.</p>
            <p>The Mob Leader can be randomly encountered through the world.</p>
            <img class="medium" src="/assets/images/mobs-mob-leader.webp" alt="Minecraft Illusioner, zombie, and skeleton"></img>
          </section>
        </div>
        <div>
          <section>
            <h3>Skeleton King</h3>
            <p>Leader of the Skeleton World, the Skeleton King summons minions to defend himself if encountered. He also has high HP and decent strength himself, if you can get close enough.</p>
            <p>The Skeleton King can be randomly encountered through the world.</p>
            <img class="medium" src="/assets/images/mobs-skeleton-king.webp" alt="Minecraft Wither Skeleton and two skeletons"></img>
          </section>
          <section>
            <h3>Skeletal Knight</h3>
            <p>The Skeletal Knight is strong, but slow. Unlike the Skeleton King, he fights alone, and with no ranged attacks. It's a battle of endurance for the Skeletal Knight.</p>
            <p>The Skeletal Knight can be randomly encountered through the world.</p>
            <img class="medium" src="/assets/images/mobs-wither-skeleton.webp" alt="Minecraft Wither Skeleton"></img>
          </section>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
