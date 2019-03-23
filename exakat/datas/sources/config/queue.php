<span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><a name="l1" /><br /><a name="l2" /></span><span style="color: #007700">return&nbsp;[<br /><a name="l3" /><br /><a name="l4" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*<br /><a name="l5" />&nbsp;&nbsp;&nbsp;&nbsp;|--------------------------------------------------------------------------<br /><a name="l6" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;Default&nbsp;Queue&nbsp;Connection&nbsp;Name<br /><a name="l7" />&nbsp;&nbsp;&nbsp;&nbsp;|--------------------------------------------------------------------------<br /><a name="l8" />&nbsp;&nbsp;&nbsp;&nbsp;|<br /><a name="l9" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;Laravel's&nbsp;queue&nbsp;API&nbsp;supports&nbsp;an&nbsp;assortment&nbsp;of&nbsp;back-ends&nbsp;via&nbsp;a&nbsp;single<br /><a name="l10" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;API,&nbsp;giving&nbsp;you&nbsp;convenient&nbsp;access&nbsp;to&nbsp;each&nbsp;back-end&nbsp;using&nbsp;the&nbsp;same<br /><a name="l11" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;syntax&nbsp;for&nbsp;every&nbsp;one.&nbsp;Here&nbsp;you&nbsp;may&nbsp;define&nbsp;a&nbsp;default&nbsp;connection.<br /><a name="l12" />&nbsp;&nbsp;&nbsp;&nbsp;|<br /><a name="l13" />&nbsp;&nbsp;&nbsp;&nbsp;*/<br /><a name="l14" /><br /><a name="l15" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'default'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'QUEUE_CONNECTION'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'sync'</span><span style="color: #007700">),<br /><a name="l16" /><br /><a name="l17" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*<br /><a name="l18" />&nbsp;&nbsp;&nbsp;&nbsp;|--------------------------------------------------------------------------<br /><a name="l19" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;Queue&nbsp;Connections<br /><a name="l20" />&nbsp;&nbsp;&nbsp;&nbsp;|--------------------------------------------------------------------------<br /><a name="l21" />&nbsp;&nbsp;&nbsp;&nbsp;|<br /><a name="l22" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;Here&nbsp;you&nbsp;may&nbsp;configure&nbsp;the&nbsp;connection&nbsp;information&nbsp;for&nbsp;each&nbsp;server&nbsp;that<br /><a name="l23" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;is&nbsp;used&nbsp;by&nbsp;your&nbsp;application.&nbsp;A&nbsp;default&nbsp;configuration&nbsp;has&nbsp;been&nbsp;added<br /><a name="l24" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;for&nbsp;each&nbsp;back-end&nbsp;shipped&nbsp;with&nbsp;Laravel.&nbsp;You&nbsp;are&nbsp;free&nbsp;to&nbsp;add&nbsp;more.<br /><a name="l25" />&nbsp;&nbsp;&nbsp;&nbsp;|<br /><a name="l26" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;Drivers:&nbsp;"sync",&nbsp;"database",&nbsp;"beanstalkd",&nbsp;"sqs",&nbsp;"redis",&nbsp;"null"<br /><a name="l27" />&nbsp;&nbsp;&nbsp;&nbsp;|<br /><a name="l28" />&nbsp;&nbsp;&nbsp;&nbsp;*/<br /><a name="l29" /><br /><a name="l30" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'connections'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l31" /><br /><a name="l32" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'sync'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l33" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'driver'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sync'</span><span style="color: #007700">,<br /><a name="l34" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l35" /><br /><a name="l36" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'database'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l37" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'driver'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'database'</span><span style="color: #007700">,<br /><a name="l38" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'table'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'jobs'</span><span style="color: #007700">,<br /><a name="l39" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'queue'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'default'</span><span style="color: #007700">,<br /><a name="l40" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'retry_after'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">90</span><span style="color: #007700">,<br /><a name="l41" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l42" /><br /><a name="l43" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'beanstalkd'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l44" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'driver'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'beanstalkd'</span><span style="color: #007700">,<br /><a name="l45" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'host'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">,<br /><a name="l46" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'queue'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'default'</span><span style="color: #007700">,<br /><a name="l47" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'retry_after'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">90</span><span style="color: #007700">,<br /><a name="l48" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l49" /><br /><a name="l50" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'sqs'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l51" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'driver'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sqs'</span><span style="color: #007700">,<br /><a name="l52" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'key'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'SQS_KEY'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'your-public-key'</span><span style="color: #007700">),<br /><a name="l53" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'secret'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'SQS_SECRET'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'your-secret-key'</span><span style="color: #007700">),<br /><a name="l54" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'prefix'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'SQS_PREFIX'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'https://sqs.us-east-1.amazonaws.com/your-account-id'</span><span style="color: #007700">),<br /><a name="l55" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'queue'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'SQS_QUEUE'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'your-queue-name'</span><span style="color: #007700">),<br /><a name="l56" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'region'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'SQS_REGION'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'us-east-1'</span><span style="color: #007700">),<br /><a name="l57" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l58" /><br /><a name="l59" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'redis'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l60" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'driver'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'redis'</span><span style="color: #007700">,<br /><a name="l61" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'connection'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'default'</span><span style="color: #007700">,<br /><a name="l62" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'queue'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'REDIS_QUEUE'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'default'</span><span style="color: #007700">),<br /><a name="l63" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'retry_after'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">90</span><span style="color: #007700">,<br /><a name="l64" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'block_for'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,<br /><a name="l65" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l66" /><br /><a name="l67" />&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l68" /><br /><a name="l69" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*<br /><a name="l70" />&nbsp;&nbsp;&nbsp;&nbsp;|--------------------------------------------------------------------------<br /><a name="l71" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;Failed&nbsp;Queue&nbsp;Jobs<br /><a name="l72" />&nbsp;&nbsp;&nbsp;&nbsp;|--------------------------------------------------------------------------<br /><a name="l73" />&nbsp;&nbsp;&nbsp;&nbsp;|<br /><a name="l74" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;These&nbsp;options&nbsp;configure&nbsp;the&nbsp;behavior&nbsp;of&nbsp;failed&nbsp;queue&nbsp;job&nbsp;logging&nbsp;so&nbsp;you<br /><a name="l75" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;can&nbsp;control&nbsp;which&nbsp;database&nbsp;and&nbsp;table&nbsp;are&nbsp;used&nbsp;to&nbsp;store&nbsp;the&nbsp;jobs&nbsp;that<br /><a name="l76" />&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;have&nbsp;failed.&nbsp;You&nbsp;may&nbsp;change&nbsp;them&nbsp;to&nbsp;any&nbsp;database&nbsp;/&nbsp;table&nbsp;you&nbsp;wish.<br /><a name="l77" />&nbsp;&nbsp;&nbsp;&nbsp;|<br /><a name="l78" />&nbsp;&nbsp;&nbsp;&nbsp;*/<br /><a name="l79" /><br /><a name="l80" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'failed'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br /><a name="l81" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'database'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">env</span><span style="color: #007700">(</span><span style="color: #DD0000">'DB_CONNECTION'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'mysql'</span><span style="color: #007700">),<br /><a name="l82" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'table'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'failed_jobs'</span><span style="color: #007700">,<br /><a name="l83" />&nbsp;&nbsp;&nbsp;&nbsp;],<br /><a name="l84" /><br /><a name="l85" />];<br /><a name="l86" /></span>
</span>