<!-- ih template circuit
  This is the circuit.xml.php file which
  define all the circuits available and their actions. -->
<circuit access="internal">

  <!-- Header -->
  <fuseaction name="ihTemplateHeader">
    <include template="dspHeader"  contentvariable="header"/>
  </fuseaction>

  <!-- Footer -->
  <fuseaction name="ihTemplateFooter">
    <include template="dspFooter"/>
  </fuseaction>

</circuit>