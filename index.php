<?php

include "header.php";

include "funcs.php";

$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);

include "newsidemenu.php";

?>


<div class='content'><p><strong>This is a branched version of Cinelerra sometimes called Cinelerra-CV.  Please visit 
<a href="about.php">about</a> section for more information regarding this duality.</strong></p>
<h2><a name="news">News</a></h2>

<p>
<strong>January &nbsp;10, 2007</strong><br>
* <a href="http://cvs.cinelerra.org/docs/wiki/doku.php">New Cinelerra CV wiki.</a>
</p>

<p>
<strong>November &nbsp;18, 2006</strong><br>
* <a href="http://cvs.cinelerra.org/docs.php">New Cinelerra CV manuals in html, pdf and txt.</a>
</p>

<p>
<strong>September &nbsp;13, 2006</strong><br>
* <a href="http://cvs.cinelerra.org/getting_cinelerra.php">New Debian sid packages</a> ready for download (without OpenGL acceleration for the moment).
</p>

<p><strong>September &nbsp;10, 2006</strong><br/>
* The merge of Cinelerra 2.1 is done in svn as of a couple days ago, 
packages will follow as people get to them.  Please report problems
on the mailing list.<br><br>
</p>

<p><strong>July&nbsp;10, 2006</strong><br/>
* Cinelerra 2.1 has been released upstream (last week sometime)<br/>
- Johannes Sixt and Pierre Dumuid are currently undertaking to do a combined effort merge attempt.<br/>
- Personally, I (Pierre Dumuid) prefer to see the "news" at <a href='svn_log.php'>SVN Log</a>
</p>

<p><strong>November &nbsp;5, 2005</strong><br />
* Welcome back :) a lot of new things happened in the last two months:<br>
- new version of cinelerra<br>
- we moved from cvs to <a href="svnusage.php">svn</a><br>
- new packages of cinelerra-cv 2.0 (slackware and Debian/sid)<br><br>
</p>

<p><strong>September &nbsp;11, 2005</strong><br>
* Finally the merge is complete :) ! checkout the new <strong>cinelerra-2.0cvs</strong> :)<br>
  Many thanks to Johannes Sixt who merged the cinelerra 2.0 code into cinelerra-cvs :) (kudos to him)<br><br>
  </p>
  
<p><strong>September &nbsp;11, 2005</strong><br>
* <a href="bounty.html">Bounty</a>, bounty a lot of bounty :)<br>
* cinelerra2.0 still in transition
</p>

<p><strong>September &nbsp;11, 2005</strong><br><br>
* Cinelerra 2.0 avaiable on heroinwarrior.com.<br>
The code of cinelerra 2.0 will be merged in cinelerra-cvs ASAP :).<br>
<strong>stay tuned</strong></p>

<p><strong>August &nbsp;11, 2005 </strong><p><br>
* Look at the  <a href="changelog.html">ChangeLog</a> :)
</p>

<p><strong>July &nbsp;9, 2005</strong><p>
* Add bin2cinelerra_headers to <a href="user-tips.html">user tips</a> webpage.<br><br>
</p>

<p><strong>July &nbsp;1, 2005</strong><br><br>
* New version of <a href="user-tips.html">Seven Gnome</a>.<br>
</p>

<p><strong>June &nbsp;27, 2005</strong><p>
* Updated <a href="getting_cinelerra.html">packages</a> webpage<br>
* Updated <a href="user-tips.html">usertips page</a></p>

<p><strong>June &nbsp;5, 2005</strong><br>
* New layout.<br>
<br>
* Now we
provide a online <a href="changelog.html">ChangeLog</a>
so people can know what comes IN/OUT from the CVS :)<br><br>
* Cinelerra NOW supports theora/ogg movie for input files. Try it
(note: if you use debian try the new <a href="getting_cinelerra.html">.deb</a>)<br>
<br>
</p>

<p><a href="oldnews.html">Older news...</a></p>
</div>
<!-- End body. -->
<hr>
<address><strong><strong><strong><strong>Riccardo Setti
, giskard at
autistici.org</strong></strong></strong></strong></address>
</body>
</html>
