<span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><a name="l1" /><br /><a name="l2" /></span><span style="color: #007700">use&nbsp;</span><span style="color: #0000BB">Monolog</span><span style="color: #007700">\</span><span style="color: #0000BB">Handler</span><span style="color: #007700">\</span><span style="color: #0000BB">StreamHandler</span><span style="color: #007700">;<br /><a name="l3" />use&nbsp;</span><span style="color: #0000BB">Monolog</span><span style="color: #007700">\</span><span style="color: #0000BB">Handler</span><span style="color: #007700">\</span><span style="color: #0000BB">SyslogUdpHandler</span><span style="color: #007700">;<br /><a name="l4" /><br /><a name="l5" />return&nbsp;[<br /><a name="l6" /><br /><a name="l7" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*<br /><a name="l8" />&nbsp;&nbsp;&nbsp;&nbsp;|--------------------------------------------------------------------------<br /><a name="l9" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;Default&nbsp;Log&nbsp;Channel<br /><a name="l10" />&nbsp;&nbsp;&nbsp;&nbsp;|--------------------------------------------------------------------------<br /><a name="l11" />&nbsp;&nbsp;&nbsp;&nbsp;|<br /><a name="l12" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;This&nbsp;option&nbsp;defines&nbsp;the&nbsp;default&nbsp;log&nbsp;channel&nbsp;that&nbsp;gets&nbsp;used&nbsp;when&nbsp;writing<br /><a name="l13" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;messages&nbsp;to&nbsp;the&nbsp;logs.&nbsp;The&nbsp;name&nbsp;specified&nbsp;in&nbsp;this&nbsp;option&nbsp;should&nbsp;match<br /><a name="l14" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;one&nbsp;of&nbsp;the&nbsp;channels&nbsp;defined&nbsp;in&nbsp;the&nbsp;"channels"&nbsp;configuration&nbsp;array.<br /><a name="l15" />&nbsp;&nbsp;&nbsp;&nbsp;|<br /><a name="l16" />&nbsp;&nbsp;&nbsp;&nbsp;*/<br /><a name="l17" /><br /><a name="l18" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'default'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'LOG_CHANNEL'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'stack'</span><span style="color: #007700">),<br /><a name="l19" /><br /><a name="l20" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*<br /><a name="l21" />&nbsp;&nbsp;&nbsp;&nbsp;|--------------------------------------------------------------------------<br /><a name="l22" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;Log&nbsp;Channels<br /><a name="l23" />&nbsp;&nbsp;&nbsp;&nbsp;|--------------------------------------------------------------------------<br /><a name="l24" />&nbsp;&nbsp;&nbsp;&nbsp;|<br /><a name="l25" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;Here&nbsp;you&nbsp;may&nbsp;configure&nbsp;the&nbsp;log&nbsp;channels&nbsp;for&nbsp;your&nbsp;application.&nbsp;Out&nbsp;of<br /><a name="l26" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;the&nbsp;box,&nbsp;Laravel&nbsp;uses&nbsp;the&nbsp;Monolog&nbsp;PHP&nbsp;logging&nbsp;library.&nbsp;This&nbsp;gives<br /><a name="l27" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;you&nbsp;a&nbsp;variety&nbsp;of&nbsp;powerful&nbsp;log&nbsp;handlers&nbsp;/&nbsp;formatters&nbsp;to&nbsp;utilize.<br /><a name="l28" />&nbsp;&nbsp;&nbsp;&nbsp;|<br /><a name="l29" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;Available&nbsp;Drivers:&nbsp;"single",&nbsp;"daily",&nbsp;"slack",&nbsp;"syslog",<br /><a name="l30" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"errorlog",&nbsp;"monolog",<br /><a name="l31" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"custom",&nbsp;"stack"<br /><a name="l32" />&nbsp;&nbsp;&nbsp;&nbsp;|<br /><a name="l33" />&nbsp;&nbsp;&nbsp;&nbsp;*/<br /><a name="l34" /><br /><a name="l35" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'channels'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l36" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'stack'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l37" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'driver'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'stack'</span><span style="color: #007700">,<br /><a name="l38" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'channels'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'daily'</span><span style="color: #007700">],<br /><a name="l39" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l40" /><br /><a name="l41" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'single'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l42" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'driver'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'single'</span><span style="color: #007700">,<br /><a name="l43" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'path'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">storage_path</span><span style="color: #007700">(</span><span style="color: #DD0000">'logs/laravel.log'</span><span style="color: #007700">),<br /><a name="l44" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'level'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'debug'</span><span style="color: #007700">,<br /><a name="l45" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l46" /><br /><a name="l47" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'daily'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l48" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'driver'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'daily'</span><span style="color: #007700">,<br /><a name="l49" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'path'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">storage_path</span><span style="color: #007700">(</span><span style="color: #DD0000">'logs/laravel.log'</span><span style="color: #007700">),<br /><a name="l50" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'level'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'debug'</span><span style="color: #007700">,<br /><a name="l51" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'days'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">14</span><span style="color: #007700">,<br /><a name="l52" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l53" /><br /><a name="l54" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'slack'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l55" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'driver'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'slack'</span><span style="color: #007700">,<br /><a name="l56" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'url'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'LOG_SLACK_WEBHOOK_URL'</span><span style="color: #007700">),<br /><a name="l57" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'username'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Laravel&nbsp;Log'</span><span style="color: #007700">,<br /><a name="l58" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'emoji'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">':boom:'</span><span style="color: #007700">,<br /><a name="l59" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'level'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'critical'</span><span style="color: #007700">,<br /><a name="l60" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l61" /><br /><a name="l62" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'papertrail'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l63" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'driver'&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'monolog'</span><span style="color: #007700">,<br /><a name="l64" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'level'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'debug'</span><span style="color: #007700">,<br /><a name="l65" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'handler'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">SyslogUdpHandler</span><span style="color: #007700">::class,<br /><a name="l66" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'handler_with'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l67" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'host'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'PAPERTRAIL_URL'</span><span style="color: #007700">),<br /><a name="l68" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'port'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'PAPERTRAIL_PORT'</span><span style="color: #007700">),<br /><a name="l69" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l70" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l71" /><br /><a name="l72" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'stderr'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l73" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'driver'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'monolog'</span><span style="color: #007700">,<br /><a name="l74" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'handler'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">StreamHandler</span><span style="color: #007700">::class,<br /><a name="l75" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'formatter'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'LOG_STDERR_FORMATTER'</span><span style="color: #007700">),<br /><a name="l76" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'with'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l77" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'stream'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'php://stderr'</span><span style="color: #007700">,<br /><a name="l78" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l79" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l80" /><br /><a name="l81" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'syslog'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l82" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'driver'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'syslog'</span><span style="color: #007700">,<br /><a name="l83" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'level'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'debug'</span><span style="color: #007700">,<br /><a name="l84" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l85" /><br /><a name="l86" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'errorlog'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l87" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'driver'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'errorlog'</span><span style="color: #007700">,<br /><a name="l88" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'level'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'debug'</span><span style="color: #007700">,<br /><a name="l89" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l90" />&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l91" /><br /><a name="l92" />];<br /><a name="l93" /></span>
</span>