<span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><a name="l1" /><br /><a name="l2" /></span><span style="color: #FF8000">/**<br /><a name="l3" />&nbsp;*&nbsp;Laravel&nbsp;-&nbsp;A&nbsp;PHP&nbsp;Framework&nbsp;For&nbsp;Web&nbsp;Artisans<br /><a name="l4" />&nbsp;*<br /><a name="l5" />&nbsp;*&nbsp;@package&nbsp;&nbsp;Laravel<br /><a name="l6" />&nbsp;*&nbsp;@author&nbsp;&nbsp;&nbsp;Taylor&nbsp;Otwell&nbsp;&lt;taylor@laravel.com&gt;<br /><a name="l7" />&nbsp;*/<br /><a name="l8" /><br /><a name="l9" /></span><span style="color: #0000BB">$uri&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">urldecode</span><span style="color: #007700">(<br /><a name="l10" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parse_url</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_URI'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">PHP_URL_PATH</span><span style="color: #007700">)<br /><a name="l11" />);<br /><a name="l12" /><br /><a name="l13" /></span><span style="color: #FF8000">//&nbsp;This&nbsp;file&nbsp;allows&nbsp;us&nbsp;to&nbsp;emulate&nbsp;Apache's&nbsp;"mod_rewrite"&nbsp;functionality&nbsp;from&nbsp;the<br /><a name="l14" />//&nbsp;built-in&nbsp;PHP&nbsp;web&nbsp;server.&nbsp;This&nbsp;provides&nbsp;a&nbsp;convenient&nbsp;way&nbsp;to&nbsp;test&nbsp;a&nbsp;Laravel<br /><a name="l15" />//&nbsp;application&nbsp;without&nbsp;having&nbsp;installed&nbsp;a&nbsp;"real"&nbsp;web&nbsp;server&nbsp;software&nbsp;here.<br /><a name="l16" /></span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$uri&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #DD0000">'/'&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">__DIR__</span><span style="color: #007700">.</span><span style="color: #DD0000">'/public'</span><span style="color: #007700">.</span><span style="color: #0000BB">$uri</span><span style="color: #007700">))&nbsp;{<br /><a name="l17" />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><a name="l18" />}<br /><a name="l19" /><br /><a name="l20" />require_once&nbsp;</span><span style="color: #0000BB">__DIR__</span><span style="color: #007700">.</span><span style="color: #DD0000">'/public/index.php'</span><span style="color: #007700">;<br /><a name="l21" /></span>
</span>