<?xml version="1.0" encoding="UTF-8"?>
<fusebox>

	<circuits>
    <circuit alias="login" path="login/" />
    <circuit alias="wrapper" path="css_js_include/" />
    <circuit alias="vdas" path="VDAS/" />
    <circuit alias="dats" path="DATS/" />
	</circuits>

	<classes>
	</classes>

	<parameters>
    <parameter name="defaultFilename" value="index" />
    <parameter name="self" value="index.php" />
		<parameter name="fuseactionVariable" value="fuseaction" />
		<parameter name="defaultFuseaction" value="login.login" />
		<parameter name="precedenceFormOrUrl" value="form"/>
		<parameter name="mode" value="development" />
		<parameter name="password" value="" />
		<parameter name="parseWithComments" value="false" />
		<parameter name="conditionalParse" value="false" />
		<parameter name="allowLexicon" value="true" />
		<parameter name="useAssertions" value="true" />
		<parameter name="ignoreBadGrammar" value="true"/>
		<parameter name="scriptlanguage" value="php" />
		<parameter name="scriptFileDelimiter" value="php" />
		<parameter name="maskedFileDelimiters" value="htm,html,php,php4,cfm,cfc,asp,aspx,cgi" />
		<parameter name="characterEncoding" value="utf-8" />
		<parameter name="printable" value="true" />
		<parameter name="authenticate_wsdl" value="http://cfdev.phxlab.honeywell.com/cgi-bin/soap/Authen?wsdl" />
	</parameters>

	<globalfuseactions>
		<preprocess>
      <do action="wrapper.ihTemplateHeader" />
      <do action="login.checkLogin" />
		</preprocess>
		<postprocess>
      <do action="wrapper.ihTemplateFooter" />
		</postprocess>
	</globalfuseactions>

	<plugins>
		<phase name="preProcess"></phase>
		<phase name="preFuseaction"></phase>
		<phase name="postFuseaction"></phase>
		<phase name="fuseactionException"></phase>
		<phase name="postProcess"></phase>
		<phase name="processError"></phase>
	</plugins>

</fusebox>
