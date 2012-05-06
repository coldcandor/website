<?xml version="1.0" encoding="UTF-8"?>
<circuit access="public">

  <!-- Main Login Display -->
  <fuseaction name="login">
    <include template="dspLogin" />
<!--     <include template="dspLoginLocalNav" /> -->
  </fuseaction>
 
  <!-- Passwork authentication -->
  <fuseaction name="auth">
    <include template="act_authenticate" />
    <if condition="$_SESSION['loggedin'] != 1">
      <true>
        <do action="login" />
      </true>
      <false>
        <do action="summary" />
      </false>
    </if>
  </fuseaction>
  
  <!-- Select which dataretrieval site to login to -->
  <fuseaction name="summary">
    <include template="summary.php" />
  </fuseaction>
  
  <!-- Check that the user trying to access the page is logged in -->
  <fuseaction name="checkLogin">
    <include template="act_checkLogin" />
  </fuseaction>
  
  <!-- Logout and goto Login Display -->
  <fuseaction name="logout">
    <include template="act_Logout" />
    <do action="login" />
  </fuseaction>

</circuit>