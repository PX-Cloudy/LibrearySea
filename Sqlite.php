
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>SQLite Home Page</title>
<style type="text/css">
body {
    margin: auto;
    font-family: Verdana, sans-serif;
    padding: 8px 1%;
}

a { color: #044a64 }
a:visited { color: #734559 }

.logo { position:absolute; margin:3px; }
.tagline {
  float:right;
  text-align:right;
  font-style:italic;
  width:300px;
  margin:12px;
  margin-top:58px;
}

.menubar {
  clear: both;
  border-radius: 8px;
  background: #044a64;
  padding: 0px;
  margin: 0px;
  cell-spacing: 0px;
}    
.toolbar {
  text-align: center;
  line-height: 1.6em;
  margin: 0;
  padding: 0px 8px;
}
.toolbar a { color: white; text-decoration: none; padding: 6px 12px; }
.toolbar a:visited { color: white; }
.toolbar a:hover { color: #044a64; background: white; }

.content    { margin: 5%; }
.content dt { font-weight:bold; }
.content dd { margin-bottom: 25px; margin-left:20%; }
.content ul { padding:0px; padding-left: 15px; margin:0px; }

/* Things for "fancyformat" documents start here. */
.fancy img+p {font-style:italic}
.fancy .codeblock i { color: darkblue; }
.fancy h1,.fancy h2,.fancy h3,.fancy h4 {font-weight:normal;color:#044a64}
.fancy h2 { margin-left: 10px }
.fancy h3 { margin-left: 20px }
.fancy h4 { margin-left: 30px }
.fancy th {white-space:nowrap;text-align:left;border-bottom:solid 1px #444}
.fancy th, .fancy td {padding: 0.2em 1ex; vertical-align:top}
.fancy #toc a        { color: darkblue ; text-decoration: none }
.fancy .todo         { color: #AA3333 ; font-style : italic }
.fancy .todo:before  { content: 'TODO:' }
.fancy p.todo        { border: solid #AA3333 1px; padding: 1ex }
.fancy img { display:block; }
.fancy :link:hover, .fancy :visited:hover { background: wheat }
.fancy p,.fancy ul,.fancy ol,.fancy dl { margin: 1em 5ex }
.fancy li p { margin: 1em 0 }
/* End of "fancyformat" specific rules. */

.yyterm {
  background: #fff;
  border: 1px solid #000;
  border-radius: 11px;
  padding-left: 4px;
  padding-right: 4px;
}
</style>
  
</head>
<body>
<div><!-- container div to satisfy validator -->

<a href="home.html">
<img class="logo" src="images/sqlite370_banner.gif" alt="SQLite Logo"
 border="0"></a>
<div><!-- IE hack to prevent disappearing logo--></div>
<div class="tagline">Small. Fast. Reliable.<br>Choose any three.</div>

<table width=100% class="menubar"><tr>
  <td width=100%>
  <div class="toolbar">
    <a href="about.html">About</a>
    <a href="docs.html">Documentation</a>
    <a href="download.html">Download</a>
    <a href="copyright.html">License</a>
    <a href="support.html">Support</a>
    <a href="http://www.hwaci.com/sw/sqlite/prosupport.html">Purchase</a>
  </div>
<script>
  gMsg = "Search SQLite Docs..."
  function entersearch() {
    var q = document.getElementById("q");
    if( q.value == gMsg ) { q.value = "" }
    q.style.color = "black"
    q.style.fontStyle = "normal"
  }
  function leavesearch() {
    var q = document.getElementById("q");
    if( q.value == "" ) { 
      q.value = gMsg
      q.style.color = "#044a64"
      q.style.fontStyle = "italic"
    }
  }
  function hideorshow(btn,obj){
    var x = document.getElementById(obj);
    var b = document.getElementById(btn);
    if( x.style.display!='none' ){
      x.style.display = 'none';
      b.innerHTML='show';
    }else{
      x.style.display = '';
      b.innerHTML='hide';
    }
    return false;
  }
</script>
<td>
    <div style="padding:0 1em 0px 0;white-space:nowrap">
    <form name=f method="GET" action="https://www.sqlite.org/search">
      <input id=q name=q type=text
       onfocus="entersearch()" onblur="leavesearch()" style="width:24ex;padding:1px 1ex; border:solid white 1px; font-size:0.9em ; font-style:italic;color:#044a64;" value="Search SQLite Docs...">
      <input type=submit value="Go" style="border:solid white 1px;background-color:#044a64;color:white;font-size:0.9em;padding:0 1ex">
    </form>
    </div>
  </table>

<div class=startsearch></div>
  


<table border="0" width="100%">
<tr><td valign="top">
<h3>Welcome</h3>
<p>SQLite is a software library that implements a
<a href="selfcontained.html">self-contained</a>, 
<a href="serverless.html">serverless</a>,
<a href="zeroconf.html">zero-configuration</a>,
<a href="transactional.html">transactional</a>
SQL database engine.
SQLite is the <a href="mostdeployed.html">most widely deployed</a>
database engine in the world.
The source code for SQLite is in the
<a href="copyright.html">public domain</a>.
<a href="about.html">More...</a></p>

<hr style="color: #044a64" height="2">

<h3>Sponsors</h3>
<p>Ongoing development and maintenance of SQLite is
sponsored in part by <a href="consortium.html">SQLite Consortium</a>
members, including:</p>

<a name="consortium_members"></a>
<center>
<table border="0" cellpadding="15">


<script language="JavaScript">
  var sponsor = new Array()
  sponsor[0] = '<tr><td align="center"> <a href="https://www.mozilla.com/"> <img src="images/foreignlogos/mozilla.gif" alt="mozilla.com" border="0"> </a></td><td> <a href="https://www.mozilla.com/">Mozilla</a> - Working to preserve  choice and innovation on the internet.</td></tr>'

  sponsor[1] = '<tr><td align="center"> <a href="https://www.bloomberg.com/"> <img src="images/foreignlogos/bloomberg.gif" alt="bloomberg.com" border="0"> </a></td><td> <a href="https://www.bloomberg.com/">Bloomberg</a> -  A world leader in financial-information technology.</td></tr>'

  sponsor[2] = '<tr><td align="center"> <a href="https://www.bentley.com/"> <img src="images/foreignlogos/bentley.gif" alt="bentley.com" border="0"> </a></td><td> <a href="https://www.bentley.com/">Bentley</a> - Comprehensive software  solutions for Sustaining Infrastructure.</td></tr>'

  sponsor[3] = '<tr><td align="center"> <a href="http://www.nds-association.org/"> <img src="images/foreignlogos/nds.png" alt="nds-association.org" border="0"> </a></td><td> <a href="http://www.nds-association.org/">NDS</a> - The leading map standard  for automotive infotainment and autonomous driving.</td></tr>'

  sponsor[4] = '<tr><td align="center"> <a href="https://www.expensify.com/"> <img src="images/foreignlogos/expensify.png" width="225" height="32"  alt="expensify.org" border="0"> </a></td><td> <a href="https://www.expensify.com/">Expensify</a> -  We power the most exciting companies in the world using SQLite. </td></tr>'

  count = 5
  while( count>0 ){
    i = Math.floor(Math.random()*6)
    if( sponsor[i]!=null ){
      document.write(sponsor[i])
      sponsor[i] = null
      count--
    }
  }
</script>


</table>
</center>


</td>
<td width="20"></td><td bgcolor="#044a64" width="1"></td><td width="20"></td>
<td valign="top">
<h3>Current Status</h3>

<p><ul>
<li><a href="releaselog/3_9_2.html">Version 3.9.2</a>
of SQLite is recommended for all new development.
</li>
</ul></p>

<h3>Common Links</h3>

<p><ul>
<li> <a href="features.html">Features</a> </li>
<li> <a href="whentouse.html">When to use SQLite</a> </li>
<li> <a href="faq.html">Frequently Asked Questions</a> </li>
<li> <a href="famous.html">Well-known Users</a> </li>
<li> <a href="quickstart.html">Getting Started</a> </li>
<li> <a href="lang.html">SQL Syntax</a>
<ul>
<li> <a href="pragma.html#toc">Pragmas</a>
<li> <a href="lang_corefunc.html">SQL functions</a>
<li> <a href="lang_datefunc.html">Date &amp; time functions</a>
<li> <a href="lang_aggfunc.html">Aggregate functions</a>
<li> <a href="json1.html">JSON functions</a>
</ul>
</li>
<li> <a href="c3ref/intro.html">C/C++ Interface Spec</a>
<ul>
<li> <a href="cintro.html">Introduction</a>
<li> <a href="c3ref/funclist.html">List of C-language APIs</a>
</ul>
</li>
<li> <a href="tclsqlite.html">The TCL Interface Spec</a>
<li> <a href="http://www.sqlite.org/src/timeline">Development Timeline</a> </li>
<li> <a href="http://www.sqlite.org/src/wiki?name=Bug+Reports">Report a Bug</a> </li>
<li> <a href="news.html">News</a> </li>
</ul></p>

</td></tr>
</table>

