      //<!--
      function  validate() {
        
        // Set the EID validation regex
        var checkEID = /[eE]\d{6}/;
        
        // Grab the entered EID
        var eid = document.forms[0].eid.value;
        
        // Perform the regex match
        var retArray1 = eid.match(checkEID);
        
        // Check validity
        if (retArray1 != null) {
          noError = true;
          document.getElementById('submit').value=' working... ';
        } else {
          noError = false;
          document.getElementById('eid').style.color='red';
          document.getElementById('error').style.display="";
        } // End if - else statement

        return noError;
      }
      //--> 
