    <?php include("../header.inc.php"); ?>
    <div id="subHeader"> <!-- For easy determination of current page, without the nasty PHP/JS -->
      Guild Bank Overview
    </div>
    <div id="bankOverviewContent"> <!-- Start Index Content -->
      <?php
        if ($accessLevel >= 1) {
          ?><p>The guild has an active banking system.  Our banks are revolving doors, and work on the honors system.  You ask when you need something, and send in when you have extras.</p>
          <p>For instance, I need Runecloth to make stuff on an alt to break for enchanting mats.  I ask Tam to send me some from fbtailor.  Then, when I'm moshing in jadefire run and a green drops, I send it in to fbequipment and have it for the next guildie who needs a new staff.  Please remember to save some stuff for yourself, sell it in the AH or actually equip it.</p>
          <p>Our active banks are:</p>
          <table border="1" cellpadding="3" cellspacing="1">
            <tr class="tableHeader">
              <td>Bank</td>
              <td>Items</td>
              <td>Officer In Charge</td>
            </tr>
            <tr class="tableRowOdd">
              <td>Freedomsbank</td>
              <td>Rares, Epics, Tier pieces, Anything you don't know what else to do with</td>
              <td>Ham</td>
            </tr>
            <tr class="tableRowEven">
              <td>Fbprofs</td>
              <td>Blacksmithing/Mining/Engineering/Jewelcrafting</td>
              <td>Arch</td>
            </tr>
            <tr class="tableRowOdd">
              <td>Fbskills</td>
              <td>First Aid/Fishing</td>
              <td>Arch</td>
            </tr>
            <tr class="tableRowEven">
              <td>Hamaid</td>
              <td>Ham's alt also serves as Gem Bank - send any gem-like items</td>
              <td>Ham</td>
            </tr>
            <tr class="tableRowOdd">
              <td>Fbleather</td>
              <td>Leather/meat for pets</td>
              <td>Lar</td>
            </tr>
            <tr class="tableRowEven">
              <td>Fbalchemy</td>
              <td>Alchemy mats/recipes</td>
              <td>Slake</td>
            </tr>
            <tr class="tableRowOdd">
              <td>Fbenchant</td>
              <td>Enchanting mats/recipes</td>
              <td>Who</td>
            </tr>
            <tr class="tableRowEven">
              <td>Fbtailor</td>
              <td>Tailoring mats/recipes</td>
              <td>Tam</td>
            </tr>
            <tr class="tableRowOdd">
              <td>Fbcook</td>
              <td>meat/rare or expensive spices/recipes</td>
              <td>Ham</td>
            </tr>
            <tr class="tableRowEven">
              <td>Fbequipment </td>
              <td>Basic armor and weps, up to greens</td>
              <td>Red</td>
            </tr>
            <tr class="tableRowOdd">
              <td>Fbherb </td>
              <td>Herbs and potions</td>
              <td>Fam</td>
            </tr>
            <tr class="tableRowEven">
              <td>Fbrep</td>
              <td>Reputation items and Motes/Primals</td>
              <td>Toby</td>
            </tr>
          </table>
          <p>While there is always room for more banks, it does take a lot of time and effort, and we are doing just fine right now.  If you want to help, ask an officer what their bank needs, or send some gold to cover costs of new bank slots or tabards.  If you do not know where to send an item, send to freedomsbank and Arch will distribute it out to the right bank.  If you need mats and the officer isn't on, send a mail to the bank, or to Arch and he'll get it forwarded to the right spot.</p>
          <br />
          <h3>To update the guild bank inventory for your character(s)...</h3>
          <p>For a quick recap of what to do if you have already set up these files, follow these steps: (If this is your first time, skip this list and read on)</p>
          <ol>
            <li>Enter the game with your bank character</li>
            <li>Go to the bank and open the bank window (bank or inventory bags do NOT need to be open)</li>
            <li>Type '/gts', click on the tab "bank management", and click on "scan now" in the top section of the window.</li>
            <li>Log out of the game world</li>
            <li>Double-click on the file 'wowpase.bat' (May appear as just 'wowparse')</li>
            <li>E-mail the created file ('bank.html' or 'bank') created to webmaster@coldcandor.com</li>
            <li>That's it!</li>
          </ol>
          <p>If you have multiple bank characters, uploading all of them is also very easy!  Simply repeat the in-game steps for each of your bank characters.  Their inventories will be stored seperately in the output file.  They will be seperated into individual inventory windows in the single HTML file.  Simple as that!</p>
          <br />
          <p>The process to update the bank inventories for the first time is, unfortunately, not the simplest.  I will attempt to write out an extensive description here, but feel free to contact me in game, through email, or even through IM, phone, or teamspeak if necessary.  Once the stuff is set up, the update process should be very simple.  Alright, here goes:</p>
          <p><strong>Please don't let the seeming complexity of this deter you!  Once you've done it once, most of the steps are no longer needed, and it is a very simple process!  Having access to the bank inventories will be a HUGE beneift to guild, so please work with me to make this work!</strong></p>
          <ol>
            <li>Download the GuildToolS addon pack <a href="javascript: void(0);" onclick="window.open('http://wow.curse-gaming.com/en/files/details/1386/guildtools/')">here.</a>  Grab the newest release version.</li>
            <li>Install the addon pack as you would a standard addon:  Extract the contents to your addons directory.  The default path to this directory is C:\Program Files\World of Warcraft\Interface\Addons.  To extract something, open the downloaded file (this should either open a window that looks like a standard "My Computer" window, or your winzip, winrar, etc window), find the button that says "Extract All" or "Extract files", click that and enter (or browse to) your addons directory (described earlier).</li>
            <li>(Optional)If you wish to cut down on the amount of addons (even though they are disabled by default), then before you enter the game with a character, but after logging into your account, there is a button in the lower left labeled "addons".  Click it and click the checkmark to the left of the addons GTS_incomingMail, GTS_OutgoingMail, and GTS_guildRosterScan.  This will ensure that they are always disabled.</li>
            <li>Save the contents of your bank (all bank bags and inventory bags are included in the scan).  The following steps will accomplish this task.
              <ol>
                <li>Enter the game world with your bank character</li>
                <li>Type '/gts'</li>
                <li>If nothing happens or you get an error message in your chat window like "command not recognized.  Type /help to see a list of commands.", then chances are you either did not install it correctly, or the addon is classified as "Out of Date".  First thing to check:  Log back out and click on the "addons" button described in optional step 3.  Make sure that the addons GTS_Core and GTS_BankScan appear in the list and are checked.  If a message to the right of them says "Out of Date", then you must click the checkbox labeled "Load Out of Date Addons" in the upper right corner of the addons window.</li>
                <li>In the window that appears after typing /gts, select the tab at the bottom that says "Bank Management".  Now click the button labeled "Load Now" on the right side of the top "segment" of the GTS window.  Also click the checkbox labeled "load on login" on the left side.  If you had the bank window open, you must close and reopen it.</li>
                <li>Go to the bank and open the bank window (you do not need to open the bags)</li>
                <li>If you closed the window to make it easier to walk to the bank, type /gts and click on the Bank Management tab again now.</li>
                <li>Now click the button labeled "Scan Now" on the right side of the top "segment" of the GTS window.  You can also click on the checkbox labeled "scan on bank open" if you wish to bypass the steps on opening the GTS window in the future.</li>
                <li>A message should appear in your chat window saying something like "Scan Successful, you may now log out and run the parser"</li>
                <li>Log out of the game world, you do not need to exit the game completely.</li>
                <li>You have now saved your bank information to your computer!</li>
              </ol>
            </li>
            <li>Setup a batch file to extract the bank contents and create a nice HTML file for the website. The following steps will accomplish this task. <br /><strong>WARNING:</strong>  If you do not trust running .exe files downloaded from either me or the addon I have mentioned, DO NOT PERFORM these next steps!  Instead, you will simply email the raw file created by the in-game addon to me and I will parse it myself.  Skip to the last step if this is the case.
              <ol>
                <li>Download the basic batch file I created <a href="wowparse.zip">here</a>.  This is a standard zip file with one file in it, wowparse.bat.  Extract this file to somewhere you know how to get to.  I recommend your desktop or "My documents" folder.  By default, a folder called "wowparse" will appear where you extract the file.  The file "wowparse.bat" will be the only file in this folder.  NOTE:  By default, Windows hides the ".xxx" in file names.  Therefore, the file may appear to be simply called "wowparse".</li>
                <li>Open the file "wowparse.bat" in a basic text editor, like Notepad.  DO NOT open it in Microsoft Word or Wordpad!  Also DO NOT simply double click on the file (that will run the file, which you don't want!).  Instead, drag the file into your text editor or right click on it and select "Edit".</li>
                <li>The file should look like this:
                  <blockquote style="margin: 10px; padding: 0px; text-align: left; font-family: terminal; font-weight: bold; font-size: 80%;">
                    c:<br />
                    cd "\Program Files\World of Warcraft\interface\addons\GTS_Core\SV"<br />
                    copy "\Program Files\World of Warcraft\WTF\Account\&lt;account name&gt;\SavedVariables\GTS_Core.lua" .<br />
                    cd "..\apps"<br />
                    GTS -bank -o \bank.html -php
                  </blockquote>
                </li>
                <li>The first thing to change is the letter on the first line.  If WoW is installed on any hard drive other then the one windows is installed on (typically C), enter the letter of the drive WoW is installed on here.  Otherwise, delete or ignore this line.</li>
                <li>The next 2 lines contain directory paths.  If you installed WoW in a directory other than the default (Program Files\World of Warcraft), then enter that path in place of "Program Files\World of Warcraft" on both lines 2 and 3.  Regardless, on line 3, replace &lt;account name&gt; (including the '&lt;' and '&gt;') with your account name (Not you character name).</li>
<!--                <li>On the last line, there is another directory path.  This is where the html file you need to send to Ham will be created.  Change this to anything you desire.</li> -->
                <li>Now the file should be good to go.  <!-- I highly recommend placing it in your "Documents and Settings\&lt;your windows account name&gt;" folder, since that's where the Windows command prompt defaults to.--></li>
              </ol>
            </li>
<!--            <li>Now open a command prompt.  To do this, click Start -> Run, type "cmd", and hit enter.  A black and white terminal window should appear</li> -->
<!--            <li>If you followed my advice and saved the file in your "My Documents" folder, typing "wowparse" should trigger the batch file.  If you did not, then you must first navigate to the directory you placed the batch file in.</li> -->
<!--            <li>A series of text should appear in the terminal window.  Read through it quickly and see if anything says error, failed, etc.</li> -->
            <li>Double click on "wowparse.bat" to run the program.  This will create the HTML file.  The file will be created in your base directory (c:\, d:\, etc, depending on the letter in line 1), called bank.html.</li>
            <li>If no errors occured, then the HTML file has been created!  Email the "bank.html" (may appear as just "bank" on windows computers) file to webmaster@coldcandor.com</li>
            <li>Unfortunately, I don't know how to make the window that appears when you run the file stay open, so the only way to know if the HTML file was created successfully is to check the directory it is supposed to be created in.</li>
            <li>Congratulations!  You've successfully uploaded your bank information to the website!  (Well... as soon as I check my email and upload it to the actual site.  I hope to put in an Upload button to make this last step not needed.)</li>
            <li>If you do not wish to run a .exe file on your computer, then email the file "GTS_Core.lua" to webmaster@coldcandor.com.  This file is located inside your World of Warcraft directory, in the folder WTF/Account/&lt;your account name&gt;/SavedVariables/</li>
          </ol>
          <p>If you had problems running through this, and would like a reference, the manual that comes with the addon can be viewed <a href="manual.html">here.</a>  If this still does not help, please contact me and I will walk you thorough the process.</p><?php
        } else {
          ?><p class="accessDenied">You do not have sufficient permission to access this page.  If you have gained a rank and think you may now qualify, please contact Ham via the link below.  Thank you.</p><?php
        } // End if - else statements
      ?>
    </div> <!-- End Index Content -->
    <?php include("../footer.inc.php"); ?>
