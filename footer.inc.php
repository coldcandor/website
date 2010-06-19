    <!-- Start Footer -->
    <div id="footer">
      <div id="bottomNav">
        <a href="<?php echo $path ?>/map.php">Site Map</a> | <a href="<?php echo $path ?>/contact.php">Contact the Webmaster</a>
      </div>
      <div id="validation">
        <a href="javascript: void(0);" onclick="window.open('http://validator.w3.org/check?uri=referer')">
          <img src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88" />
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="javascript: void(0);" onclick="window.open('http://jigsaw.w3.org/css-validator/check/referer')">
          <img src="http://www.w3.org/Icons/valid-css" alt="Valid CSS" height="31" width="88" />
        </a>
      </div>
      <div id="copyright">
        Website design and implementation &copy;2007 Eric Shields<br />
        Website Content &copy;2007 Freedom's Choice, a World of Warcraft&reg; Guild<br />
        <hr style="width: 20%" />
        Icon images and World of Warcraft&reg; &copy;Blizzard Entertainment Inc.
      </div>
      <?php if (substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/') + 1) == 'index.php') { ?>
      <div id="hit_counter">
        <img src="/cgi-sys/webcounter.cgi?c=000000&o=10&t=2&s=90x20&user=deathtoll2001&counter=" alt="Advanced Web Counter" />
      </div>
      <?php } ?>
    </div>
  </div> <!-- End container div -->
  </body>
</html>