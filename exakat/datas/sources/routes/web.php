<span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><a name="l1" /><br /><a name="l2" /></span><span style="color: #FF8000">/*<br /><a name="l3" />|--------------------------------------------------------------------------<br /><a name="l4" />|&nbsp;Web&nbsp;Routes<br /><a name="l5" />|--------------------------------------------------------------------------<br /><a name="l6" />|<br /><a name="l7" />|&nbsp;Here&nbsp;is&nbsp;where&nbsp;you&nbsp;can&nbsp;register&nbsp;web&nbsp;routes&nbsp;for&nbsp;your&nbsp;application.&nbsp;These<br /><a name="l8" />|&nbsp;routes&nbsp;are&nbsp;loaded&nbsp;by&nbsp;the&nbsp;RouteServiceProvider&nbsp;within&nbsp;a&nbsp;group&nbsp;which<br /><a name="l9" />|&nbsp;contains&nbsp;the&nbsp;"web"&nbsp;middleware&nbsp;group.&nbsp;Now&nbsp;create&nbsp;something&nbsp;great!<br /><a name="l10" />|<br /><a name="l11" />*/<br /><a name="l12" /><br /><a name="l13" />/*<br /><a name="l14" />|&nbsp;route&nbsp;all&nbsp;requests&nbsp;except&nbsp;api&nbsp;call&nbsp;to&nbsp;our&nbsp;app&nbsp;*/<br /><a name="l15" />&nbsp;</span><span style="color: #0000BB">Route</span><span style="color: #007700">::</span><span style="color: #0000BB">view</span><span style="color: #007700">(</span><span style="color: #DD0000">'/{path?}'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'app'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">where</span><span style="color: #007700">(</span><span style="color: #DD0000">'path'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'^((?!api).)*'</span><span style="color: #007700">);<br /><a name="l16" /></span>
</span>