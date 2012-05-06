    //<!-- Prevent validator and old browser errors
    
    // Global variables
    var searchCount = 0;
    
    /* Function validate()
     *
     * The only validation that needs to be done on this form is on the date fields.
     *
     * Returns: False if there was a validation error, true otherwise.
     */
    function validate() {
      
      // Reset previous validation results
      document.getElementById("inval3").style.display = "none";
      document.getElementById("inval4").style.display = "none";
      
      // Get the current date for year comparison
      var now = new Date;
      
      // Prep the return value
      var noError = true;
      
      // Set the date validation regex
      var checkDate = /(0?[1-9]|1[012])\/(0?[1-9]|[12][0-9]|3[01])\/(19|20)\d\d/;
      
      // Grab the values from the 2 date fields
      var dateEntry1 = document.forms[0].bDate.value;
      var dateEntry2 = document.forms[0].eDate.value;
      
      // Perform the regex match
      var retArray1 = dateEntry1.match(checkDate);
      var retArray2 = dateEntry2.match(checkDate);
      
      // Check the results of the begin date match
      if (dateEntry1 != "") { // Check if there was a value entered
        if (retArray1 != null) { // Check if the pattern matched
          
          // If it's a valid date format, check that the values entered make sense
          if (retArray2[3] > 2038) {
            if (retArray1[3] < (now.getFullYear() - 10)) {
              alert("The Data and Automation Department only keeps 10 years of data!");
            } // End if statement
          noError = false;
          document.getElementById("inval3").style.display = ""; // Display error message
          }
        } else { // Otherwise, it's already an invalid date
          noError = false;
          document.getElementById("inval3").style.display = ""; // Display error message
        } // End if - else statement
      } // End if statement
        
      // Check the results of the end date match
      if (dateEntry2 != "") { // Check if there was a value entered
        if (retArray2 != null) { // Check if the pattern matched
          
          // If it's a valid date format, check that the values entered make sense
          if (retArray2[3] > 2038) {
            if (retArray2[3] < (now.getFullYear() - 10)) {
              alert("The Data and Automation Department only keeps 10 years of data!");
            } // End if statement
            noError = false;
            document.getElementById("inval4").style.display = ""; // Display error message
          } // End if statement

        } else { // Otherwise, it's already an invalid date
          noError = false;
          document.getElementById("inval4").style.display = ""; // Display error message
        } // End if - else statement
      } // End if statement
      
      return noError;
      
    } // End function validate
    
    /* Function validateDlSubmit()
     *
     * This function is run only when the "Download Selected File(s)" button is pressed.
     * It checks whether there were any files selected.
     *
     */
    function validateDlSubmit() {
      var count = 0;
      for (var i = 0; i < document.forms[0].results.length; i++) {
        if (document.forms[0].results[i].checked == true) {;
          count++;
        } // End if statement
      } // End for loop
      if (count > 0 && count <= 10) {
        document.forms[0].submit();
        return;
      } else if (count == 0) {
        alert('No archives were selected!  Please select at least one file before continuing.');
      } else if (count > 10) {
        alert('You\'ve selected ' + count + ' archives!  Please select less than (or equal to) 10 archives before continuing.');
      } // End if - else statement
    } // End function validateDlSubmit()

    /* Function resetFields()
     *
     * This function is used to reset the form after a search has been preformed.
     * The normal "reset" functionality would only work before a search was preformed.
     *
     */
    function resetFields() {
      document.forms[0].cell.selectedIndex = "0";
      document.forms[0].engine.selectedIndex = "0";
      document.forms[0].serial.value = "";
      document.forms[0].bDate.value = "";
      document.forms[0].eDate.value = "";
      document.getElementById("inval3").style.display = "none";
      document.getElementById("inval4").style.display = "none";
    } // End function resetFields
    
    function uncheckAll() {
      for (var i = 0; i < document.forms[0].results.length; i++) {
        document.forms[0].results[i].checked = false;
      } // End for loop
    } // End function uncheckAll
    
    function checkAll() {
      for (var i = 0; i < document.forms[0].results.length; i++) {
        document.forms[0].results[i].checked = true;
      } // End for loop
    } // End function uncheckAll
    
    //-->
