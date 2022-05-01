<!doctype html>
<html lang="en">
  <head>
    <title>Asthonia Minecraft Server | Land Claiming</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: url(/assets/images/claiming-title.webp); background-position: center;">
        <div>
          <h1>Land Claiming</h1>
          <h2>Powered by GriefPrevention</h2>
        </div>
      </div>
      <div class="content split-content">
        <div class="shadow"></div>
        <div>
          <section>
            <h3>Overview</h3>
            <p>Land can be claimed on Asthonia using GriefPrevention. GriefPrevetion lets you select any rectangular area to protect. Claims automatically extend up to Y 320, and will extend downward as you build. Anything within a claimed area - builds, chests, villagers, animals, and more - is protected.</p>
            <p>Claim owners can control access to their land in several ways. There are different types of trust that you can give players to allow them complete access, only access to chests, or only access to use buttons/levers (access trust). Claims can also be divided into "subdivisions" to control access to specific parts of a claim.</p>
          </section>
          <section>
            <h3>Trusting Others</h3>
            <p>Trusting players is at-your-own-risk! Claim owners have control over who can access their claim and what they can do (containertrust, accesstrust, permissiontrust, and full trust). It is up to you to give people appropriate access, and 
make sure you only trust people you know. We are not responsible for players abusing their trust to take your stuff or grief your claim.</p>
            <p>To grant someone access to a specific part of your claim, use subdivisions. You can divide your claim into subdivisions by using subdivision mode (hold a golden shovel and run <strong>/subdivideclaims</strong>). Creating subdivisions works exactly the same as creating regular claims. You are essentially creating mini-claims within your claim that you can use to grant people access to only specific areas.</p>
          </section>
          <section>
            <h3>Limits</h3>
            <p>New players will start with 500 "claim blocks". Each "claim block" allows you to add 1 block to your claim size (only counting length and width - remember claims dont count height!).</p>
            <p>You will earn an additional 1000 claim blocks for every mining level you unlock. This means at maximum mining level (mining level 97) you will be able to claim up to 97,500 blocks.</p>
            <p>If you need additional claim blocks, you can ask a staff member for more. We will provide more on a case-by-case basis.</p>
            <p>You can create up to 15 separate claims. Your "claim blocks" limit is shared between all of your claims.</p>
          </section>
          <section>
            <h3>Automatic Claim Delection</h3>
            <p>If a claim owner is offline for 90 days, the claim will be deleted. After this, the land is free-game to be reused or raided by anyone.</p>
          </section>
        </div>
        <div>
         <section>
            <h3>Creating a Claim</h3>
            <p>To claim land, you will need a golden shovel, and, optionally, a stick. You can craft these items yourself or do <strong>/claim</strong> to receive them for free. The shovel is used for modifying claims and the stick is used for viewing claim information.</p>
            <p>All claims are rectangular. Determine what size/shape rectangle you need to claim to protect your entire build. Then, use the golden shovel to right click two opposite corners of that rectangle. This will create a claim. You can visualize the claim by looking at the glowstone and gold blocks that are temporarily placed to outline the claim.</p>
            <p>To resize a claim, use the golden shovel to right click one of the corners (represented by glowstone) and then right click a new location you want that corner to be.</p>
            <p style="color:#4ad555;">Remember, claims automatically extend vertically! You only need to worry about the length/width of the claim, not the height.</p>
            <img src="/assets/images/claiming-border.webp" alt="Glowstone and gold block border around a claim in-game" style="border-radius: 5px;"></img>
          </section>
          <section>
            <h3>Useful Commands</h3>
            <ul>
              <li><strong>/unclaim</strong> - Delete a claim</li>
              <li><strong>/containertrust &lt;player&gt;</strong> - Allow someone to access your chests</li>
              <li><strong>/permissiontrust &lt;player&gt;</strong> - Allow someone to trust/untrust others</li>
              <li><strong>/accesstrust &lt;player&gt;</strong> - Allow someone to access your doors and redstone</li>
              <li><strong>/trust &lt;player&gt;</strong> - Allow someone to build and access your chests</li>
              <li><strong>/untrust &lt;player&gt;</strong> - Remove someones access</li>
              <li><strong>/trustlist</strong> - See all players you trusted</li>
              <li><strong>/setclaimspawn</strong> - See claim spawn point</li>
              <li><strong>/gptp &lt;claimID&gt;</strong> - Teleport to your claim spawn point</li>
              <li><strong>/gptlist</strong> - List your claims and claimIDs</li>
              <li><strong>/gptname</strong> - Name your claim (make them easier remember)</li>
            </ul>
          </section>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
