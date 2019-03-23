<span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><a name="l1" /><br /><a name="l2" /></span><span style="color: #007700">return&nbsp;[<br /><a name="l3" /><br /><a name="l4" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*<br /><a name="l5" />&nbsp;&nbsp;&nbsp;&nbsp;|--------------------------------------------------------------------------<br /><a name="l6" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;Default&nbsp;Broadcaster<br /><a name="l7" />&nbsp;&nbsp;&nbsp;&nbsp;|--------------------------------------------------------------------------<br /><a name="l8" />&nbsp;&nbsp;&nbsp;&nbsp;|<br /><a name="l9" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;This&nbsp;option&nbsp;controls&nbsp;the&nbsp;default&nbsp;broadcaster&nbsp;that&nbsp;will&nbsp;be&nbsp;used&nbsp;by&nbsp;the<br /><a name="l10" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;framework&nbsp;when&nbsp;an&nbsp;event&nbsp;needs&nbsp;to&nbsp;be&nbsp;broadcast.&nbsp;You&nbsp;may&nbsp;set&nbsp;this&nbsp;to<br /><a name="l11" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;any&nbsp;of&nbsp;the&nbsp;connections&nbsp;defined&nbsp;in&nbsp;the&nbsp;"connections"&nbsp;array&nbsp;below.<br /><a name="l12" />&nbsp;&nbsp;&nbsp;&nbsp;|<br /><a name="l13" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;Supported:&nbsp;"pusher",&nbsp;"redis",&nbsp;"log",&nbsp;"null"<br /><a name="l14" />&nbsp;&nbsp;&nbsp;&nbsp;|<br /><a name="l15" />&nbsp;&nbsp;&nbsp;&nbsp;*/<br /><a name="l16" /><br /><a name="l17" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'default'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'BROADCAST_DRIVER'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'null'</span><span style="color: #007700">),<br /><a name="l18" /><br /><a name="l19" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*<br /><a name="l20" />&nbsp;&nbsp;&nbsp;&nbsp;|--------------------------------------------------------------------------<br /><a name="l21" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;Broadcast&nbsp;Connections<br /><a name="l22" />&nbsp;&nbsp;&nbsp;&nbsp;|--------------------------------------------------------------------------<br /><a name="l23" />&nbsp;&nbsp;&nbsp;&nbsp;|<br /><a name="l24" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;Here&nbsp;you&nbsp;may&nbsp;define&nbsp;all&nbsp;of&nbsp;the&nbsp;broadcast&nbsp;connections&nbsp;that&nbsp;will&nbsp;be&nbsp;used<br /><a name="l25" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;to&nbsp;broadcast&nbsp;events&nbsp;to&nbsp;other&nbsp;systems&nbsp;or&nbsp;over&nbsp;websockets.&nbsp;Samples&nbsp;of<br /><a name="l26" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;each&nbsp;available&nbsp;type&nbsp;of&nbsp;connection&nbsp;are&nbsp;provided&nbsp;inside&nbsp;this&nbsp;array.<br /><a name="l27" />&nbsp;&nbsp;&nbsp;&nbsp;|<br /><a name="l28" />&nbsp;&nbsp;&nbsp;&nbsp;*/<br /><a name="l29" /><br /><a name="l30" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'connections'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l31" /><br /><a name="l32" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'pusher'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l33" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'driver'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'pusher'</span><span style="color: #007700">,<br /><a name="l34" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'key'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'PUSHER_APP_KEY'</span><span style="color: #007700">),<br /><a name="l35" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'secret'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'PUSHER_APP_SECRET'</span><span style="color: #007700">),<br /><a name="l36" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'app_id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'PUSHER_APP_ID'</span><span style="color: #007700">),<br /><a name="l37" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l38" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cluster'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'PUSHER_APP_CLUSTER'</span><span style="color: #007700">),<br /><a name="l39" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'encrypted'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br /><a name="l40" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l41" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l42" /><br /><a name="l43" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'redis'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l44" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'driver'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'redis'</span><span style="color: #007700">,<br /><a name="l45" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'connection'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'default'</span><span style="color: #007700">,<br /><a name="l46" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l47" /><br /><a name="l48" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'log'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l49" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'driver'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'log'</span><span style="color: #007700">,<br /><a name="l50" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l51" /><br /><a name="l52" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'null'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l53" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'driver'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'null'</span><span style="color: #007700">,<br /><a name="l54" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l55" /><br /><a name="l56" />&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l57" /><br /><a name="l58" />];<br /><a name="l59" /></span>
</span>