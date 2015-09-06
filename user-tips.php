<?php 
include "header.php";

include "sidemenu.php"; 
?>

<div class="content">
<h2>Patches</h2>
<h3>Cinelerra Bezier Patch</h3>
<blockquote>
<p><strong>Hermann Vosseler</strong> created this patch to get a usable bezier automation for Cinelerra 2.1CV fades, camera and projector. It retains backwards and (partially) upwards compatibility of session files. It is a developement/beta version. To know more read its <a href="http://ichthyostega.de/cinelerra/bezier-patch/">nice documentation</a>.
</p>
</blockquote>
<h2>Tools</h2>
<h3>Cinelerra theme helper</h3>
<blockquote>
<p><strong>Paolo Rampino</strong> created a tool to ease the creation of new themes for Cinelerra. It includes the theme from Cinecutie. It depends on Inkscape. <br>
<a href="http://www.tuttoainternet.it/kit/cinelerra-theme-helper.tar.gz">Download Cinelerra theme helper</a><br>
<a href="https://init.linpro.no/pipermail/skolelinux.no/cinelerra/2011-July/018047.html">Get instructions</a>.
</p>
</blockquote>

<h3>IMG2LIST - Cinelerra List Generator</h3>
<blockquote>
<p><strong>Claudio "Malefico" Andaur</strong> wrote a little application called <a
href="http://www.malefico3d.org/blog-en/?page_id=224">IMG2LIST
0.1.5</a>, that is a Cinelerra List Generator for converting an image sequence to a single list file. This script generates a list 
out a frame of an images sequence and autodetects all related parameters with it, including number of frames, file format and image 
resolution. TIFF and PNG are now supported. Download it <a
href="http://www.malefico3d.org/download/img2list-0.1.5.tar.gz" > here</a>. <br> 
(<a href="http://www.malefico3d.org/blog/?page_id=333">Spanish version</a>)<br>
</p>
</blockquote>

<h3>Seven Gnomes</h3>
<blockquote>
<p><strong>Peter Semiletov</strong> wrote a program called 
<a href="http://www.roxton.kiev.ua/sevengnomes.html ">Seven Gnomes</a>.
It is a simple GTK2-based utility
designed to simplify some tasks those useful when people work with
Cinelerra. Seven Gnomes UI is based on drag-and-drop, so to handle
files or directories you can just drop them at the Seven Gnomes
window. Seven Gnomes calls mpeg3toc to index MPEG1/2 files, mencoder
to convert video, and uses GTK functions to create Cinelerra-format
index/toc-files from the sequence of images. No open/save dialogs,
just "drag-and-drop" and few text entries with options. Any ideas
about improvements are welcome! 
</p>
</blockquote>

<h3>mkframelist</h3>
<blockquote>
<p><strong>IL'dar "AkhIL" AKHmetgaleev</strong> wrote a program called <a href="http://akhilman.googlepages.com/mkframelist">mkframelist</a>, that is a command line tool for creating image lists. It supports every file format, EXR included. It autodetects image size and format. Optionally, framerate, size and format can be set.</p>
</blockquote>

<h3>exr2toc</h3>
<blockquote>
<p><strong>Andrey Neskreba</strong> wrote a python script called <a
href="http://www.assistcg.com/index.php/component/content/article/62.html">exr2toc</a>, that is an utility for generation of index TOC files from EXR image sequences. 
<br>
</p>
</blockquote>

<h3>cinelerra-slideshow</h3>
<blockquote>
<p><strong>Alexandre "wacky" Bourget</strong> wrote a python script called <a
href="https://svn.bourget.cc/svn/wackystuff/programs/cinelerra-slideshow/">cinelerra-slideshow</a>, a script that creates a cinelerra .xml file with some already pre-built slideshow tracks. (a bit old)
<br>
</p>
</blockquote>

<h3>bin2cinelerra_header</h3>
<blockquote>
<p><strong>Dominic (Dom) C.</strong> wrote an application called <a
href="http://baltimorebarcams.com/eb/demos/bin2cinelerra_header.c">bin2cinelerra_header</a> 
(version 1.1.) that converts .png files to png.h. This is very useful if you want to create a
new skin for Cinelerra and you need png.h files instead of png files. With
bin2cinelerra_header you can simply create your .png images and then convert
them.<br>
<strong>Franco Iacomella</strong> updated and improved bin2cinelerra_header,
releasing <a
href="http://francoiacomella.org/proyectos/tangolerra/lib/exe/fetch.php?id=start&cache=cache&media=bin2cinelerra_header-1.2.tar.gz"
>bin2cinelerra_header version 1.2</a>.
</p>
</blockquote>

<h3>yuvmotionfps</h3>
<blockquote>
<p><strong>Jerome Cornet</strong> wrote a piece of software called <a
href="http://jcornet.free.fr/linux/yuvmotionfps.html" >yuvmotionfps</a> that converts
frame rates on progressive streams using the <a href="http://mjpeg.sf.net" >
mjpegtools</a>. Unlike yuvfps which simply replicates or eliminates frames, yuvmotionfps calculates intermediates 
frames by interpolating the motion between frames, using an MPEG-style motion compensation algorithm.
</p>
</blockquote>

<h3>framerate</h3>
<blockquote>
<p><strong>David McNab</strong> wrote a little utility called <a href="http://www.freenet.org.nz/misc/framerate.py">framerate</a> to convert a video to same or different format with different framerate, with motion interpolation, using the yuvmotionfps and ffmpeg utilities. <em>framerate</em> is pretty simple. It eliminates the need for typing manual commands and creating huge yuv files on your disk. Its input and/or output can be piped. 
</p>
</blockquote>

<h3>Paste, Turn, Copy!</h3>
<blockquote>
<p><strong>Guy Sheffer</strong> wrote this small tool for writing Hebrew text with the Titler. <em> Paste, Turn, Copy!</em> reverses Hebrew to Left-To-Righ text and reencodes it as cp1252 (instead of cp1255 ) producing text ready to be pasted in the Titler. The compositor will preview the text with the correct direction and caption. This tool can be easily extended for Arabic too. It is available as <a href="http://gnet.homelinux.com/files/paste-turn-copy_0.5-1_i386.deb">.deb package</a> for Debian and Ubuntu. Mail guysoft [at] ort.org.il for help.
</p>
</blockquote>

<h3>CreateCueSheet</h3>
<blockquote>
<p><strong>Alexandre "wacky" Bourget</strong> wrote a python script called <a
href="https://svn.bourget.cc/svn/wackystuff/programs/CreateCueSheet/">CreateCueSheet</a>, a script that creates a PDF Cue-Sheet, based on LABELS in a Cinelerra .xml file. Creates a kind of storyboard, with labels frames marked. Uses LaTeX.
<br>
</p>
</blockquote>

</div>

<address>Last modified on Jul 26 2011</address>
<?php include "footer.php"; ?>

</body>
</html>
