<?php

define('_NP_MOBILEDETECT_DESCRIPTION_', '携帯端末からのアクセスかどうかを判定します。<br />'
                                      . '判定のライブラリは Mobile Detect http://mobiledetect.net/ を使用しています。<br />'
                                      . 'Mobile Detect のライセンスは MIT License です。<br />'
                                      . 'Usage: &lt;%if(MobileDetect[, {mobile, [isMobile|isTablet|isPhone]|extended, device name}])%&gt;&lt;%endif%&gt;<br />'
                                      . 'example1: &lt;%if(MobileDetect)%&gt; （携帯端末） &lt;%endif%&gt;<br />'
                                      . 'example2: &lt;%if(MobileDetect, mobile, isPhone)%&gt; （スマートフォン） &lt;%endif%&gt;<br />'
                                      . 'example3: &lt;%if(MobileDetect, extended, iPhone)%&gt; （iPhone） &lt;%endif%&gt;'
);
