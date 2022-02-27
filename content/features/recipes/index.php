<!doctype html>
<html lang="en">
  <head>
    <title>Semi-Vanilla Minecraft Server | Features | Recipes</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <style>
      section img {
        border-radius: 5px;
      }
    </style>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: url(/assets/images/features-recipes-title.webp); background-position: center;">
        <div>
          <h1>Vanilla+ > Recipes</h1>
          <h2>Custom Features on SVMC</h2>
        </div>
      </div>
      <div class="content split-content">
        <div class="shadow"></div>
        <div>
          <section class="center">
            <h3>Chainmail can be crafted using chains.</h3>
            <img src="/assets/images/custom-recipe-chainmail.webp" alt="8 chains being crafted into a chainmail chestplate"></img>
          </section>
          <section class="center">
            <h3>Charcoal can be crafted into coal blocks.</h3>
            <img src="/assets/images/custom-recipe-charcoal-block.webp" alt="9 charcoal being crafted into a coal block"></img>
          </section>
          <section class="center">
            <h3>Charcoal can be crafted into black dye.</h3>
            <img src="/assets/images/custom-recipe-charcoal-dye.webp" alt="1 charcoal being crafted into black dye"></img>
          </section>
          <section class="center">
            <h3>Cobwebs can be crafted from string and slimeballs.</h3>
            <img src="/assets/images/custom-recipe-cobweb.webp" alt="8 string surrounding a slimeball being crafted into a spiderweb"></img>
          </section>
          <section class="center">
            <h3>Coral can be crafted into coral blocks.</h3>
            <img src="/assets/images/custom-recipe-coral.webp" alt="4 red coral being crafted into a red coral block"></img>
          </section>
          <section class="center">
            <h3>Droppers can be converted to dispensers with string and sticks.</h3>
            <img src="/assets/images/custom-recipe-dispenser.webp" alt="1 hopper surrounded by the bow recipe being crafted into a dispenser"></img>
          </section>
          <section class="center">
            <h3>Glass bottles can be smelted to glass.</h3>
            <img src="/assets/images/custom-recipe-glass.webp" alt="1 glass bottle in a furnace being converted to 1 glass"></img>
          </section>
        </div>
        <div>
          <section class="center">
            <h3>Concrete powder can be converted to concrete with ice.</h3>
            <img src="/assets/images/custom-recipe-ice-concrete.webp" alt="8 red concrete powder surrounding an ice block being crafted into red concrete"></img>
          </section>
          <section class="center">
            <h3>Nametags can be crafted with string and paper.</h3>
            <img src="/assets/images/custom-recipe-nametag.webp" alt="1 string and 2 paper being crafted into a nametag"></img>
          </section>
          <section class="center">
            <h3>Dyed blocks can be re-dyed.</h3>
            <img src="/assets/images/custom-recipe-re-dye.webp" alt="8 red terracotta surrounding blue dye being crafted into 
blue terracotta"></img>
          </section>
          <section class="center">
            <h3>Sand and sandstone can be dyed red.</h3>
            <img src="/assets/images/custom-recipe-red-sand.webp" alt="8 sand surrounding red dye being crafted into red sand"></img>
          </section>
          <section class="center">
            <h3>Stonecutter can cut stones to gravel and sandstones to sand.</h3>
            <img src="/assets/images/custom-recipe-sand-cutter.webp" alt="1 chiseled sandstone in a stonecutter being converted to sand"></img>
          </section>
          <section class="center">
            <h3>Stairs can be converted back to blocks.</h3>
            <img src="/assets/images/custom-recipe-stairs-reverse.webp" alt="4 oak stairs being crafted into 6 oak planks"></img>
          </section>
          <section class="center">
            <h3>String can be converted back to wool.</h3>
            <img src="/assets/images/custom-recipe-string-reverse.webp" alt="1 wool being crafted into 4 string"></img>
          </section>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
