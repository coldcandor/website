        <?php
        // <!-- Added in dspPostFuseaction.php --> 
        
        if ( (  isset($printable)) || (! isset($fuseaction))) {
          echo "  <input type=\"hidden\" name=\"login\" value=\"true\" /> \n";
          echo " </body> \n</html> \n";
          return;
        };
        ?>
        
      </div>
    </div>
    
    <div id="Menu">
      <!-- localNav.html - defines the links used for local navigation in the -->
      <!-- CSS-based Inside Honeywell template                                -->
      <!-- Local Navigation is defined below using the List Item (li) tags -->
      <div id="localNavigation">
        <ul>
          <li>&nbsp;</li>
        </ul>
      </div>
    </div>
    
  </body>
</html>
