        <!-- Start footer include (Completes the HTML document) -->
        
        <!-- footer.html defines the layout of footer section of the CSS-based -->
        <!-- Inside Honeywell template.  The values used are defined in the    -->
        <!-- "content_owner_publisher.js" file -->
        
        <div id="footer">
          <script type="text/javascript">
            //<!-- Prevent validator and old browser errors
            if(navigator.appName == "Microsoft Internet Explorer")
            {
              document.write("<br />")
            }
            //-->
          </script>
          
          <p>Content Owner:
          
          <script type="text/javascript">
            //<!-- Prevent validator and old browser errors
            document.write(pageOwnerURL);
            //-->
          </script>
          
          <br />
          Content Publisher:
          
          <script type="text/javascript">
            //<!-- Prevent validator and old browser errors
            document.write(pagePublisherURL);
            //-->
          </script>
          
          <br /><br />
          
          &copy; 2006
          
          <script type="text/javascript">
            //<!-- Prevent validator and old browser errors
            if( now.getFullYear() != 2006 ) {
              document.write(" - " + now.getFullYear());
            }
            //-->
          </script>
          
          Honeywell International, All Rights Reserved</p>
        
          <table border="0" width="100%">
          <tr>
            <td style="border: 0px ;background-color: #fff;">&nbsp;</td>
          </tr>
          </table>
          
        </div>
        
      </div> <!-- End div for backgroundImage -->
    </div> <!-- End div for content -->
    
    <div id="Menu">
      <?php 
        switch($_GET['fuseaction']) {
          case 'login.login':
          case 'login.logout':
          case 'login.summary':
          case 'login.auth':
            include 'loginLocalNav.php'; 
            break;
          case 'vdas.recall':
          case 'vdas.PDF';
          case 'vdas.contacts':
          case 'vdas.feedback':
          case 'vdas.new':
          case 'vdas.inv':
          case 'vdas.inv_edit':
          case 'vdas.stats':
            include 'vdasLocalNav.php';
            break;
          case 'dats.recall':
          case 'dats.xfer':
          case 'dats.cgi_exec':
            include 'datsLocalNav.php';
            break;
          default:
            include 'defaultLocalNav.php'; 
            break;
        } // End switch statement
      ?>
    </div>
  </body>
</html>