<?php

define('_NP_MOBILEDETECT_DESCRIPTION_', 'This will determine the access from the mobile devices.<br />'
                                      . 'Mobile Detect library http://mobiledetect.net/<br />'
                                      . 'Mobile Detect is MIT License.<br />'
                                      . 'Usage: &lt;%if(MobileDetect[, {mobile, [isMobile|isTablet|isPhone]|extended, device name}])%&gt;&lt;%endif%&gt;<br />'
                                      . 'example1: &lt;%if(MobileDetect)%&gt; (mobile devices) &lt;%endif%&gt;<br />'
                                      . 'example2: &lt;%if(MobileDetect, mobile, isPhone)%&gt; (Smartphone) &lt;%endif%&gt;<br />'
                                      . 'example3: &lt;%if(MobileDetect, extended, iPhone)%&gt; (iPhone) &lt;%endif%&gt;'
);
