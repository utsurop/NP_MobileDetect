# NP_MobileDetect

NP_MobileDetect は NucleusCMS のプラグインです。
アクセス元により条件分岐させることができます。
PCからのアクセス、またはスマートフォンからのアクセスかを判定し CSS を適切に挿入したり広告コードを変更したりすることが可能になります。

判定ライブラリに [MIT License](https://opensource.org/licenses/mit-license.php "The MIT License (MIT) | Open Source Initiative") の [MobileDetect](http://mobiledetect.net/ "Mobile Detect - lightweight PHP class for detecting mobile devices (including tablets)") を使用しています。

## 使い方

Usage: &lt;%if(MobileDetect[, {mobile, [isMobile | isTablet | isPhone] | extended, device name}])%&gt;&lt;%endif%&gt;

example1: &lt;%if(MobileDetect)%&gt; （携帯端末） &lt;%endif%&gt;

example2: &lt;%if(MobileDetect, mobile, isPhone)%&gt; （スマートフォン） &lt;%endif%&gt;

example3: &lt;%if(MobileDetect, extended, iPhone)%&gt; （iPhone） &lt;%endif%&gt;
