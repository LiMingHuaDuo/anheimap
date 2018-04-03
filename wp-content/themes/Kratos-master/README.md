# Kratos(Modified)

This is a modified version of Kratos2.5.8. For the original version, please visit [https://github.com/Vtrois/Kratos](https://github.com/Vtrois/Kratos).

这是一个Kratos2.5.8主题的修改版，作者的原版见[https://github.com/Vtrois/Kratos](https://github.com/Vtrois/Kratos).

修改版演示地址：[https://www.fczbl.vip](https://www.fczbl.vip)

Kratos: A clean, simple and responsive blog theme of WordPress, based on [Bootstrap](https://github.com/twbs/bootstrap) and [Font Awesome](https://github.com/FortAwesome/Font-Awesome). Created and maintained by Vtrois. Stay up to date with the latest release and announcements on [Bulletin Board](https://github.com/Vtrois/Kratos/issues). 

![Kratos Demo](https://www.fczbl.vip/wp-content/uploads/kratos.png) 

## Changes
![Kratos Demo](https://www.fczbl.vip/wp-content/uploads/kratos.jpg)
```
二次元风格
启用Admin Bar，并将其设置为新注册用户默认不显示
移除Admin Bar左边的WP LOGO
图片banner高度调整
以顶部"图片文字"代替左上角站点文字LOGO
顶部"图片文字"点击可返回首页
添加博客小人spig（请在\js\spig.js中修改小人的提示内容）
无图片的文章特色图片随机化（\images\thumb\下的10张图片）
置顶文章加上了文字和图标标记
在post-meta中加入作者信息
在分享按钮中添加分享到QQ空间选项
评论区评论嵌套样式修改（参考Ravenclaw主题样式）
添加评论框中"扑街"图片
更换表情面板为DIYgay的OwO，支持更多表情（请在\inc\OwO.json中修改表情链接）
底部社交组件中添加EMAIL
底部添加建站时间统计（请在\js\kratos.js中修改建站时间）
修改鼠标指针样式
添加复制站点内容时的弹窗提示
添加了登录/注册页面样式
添加友链模板
非Admin用户评论中可使用img标签
支持文章内容的+展开/-收缩
后台HTML编辑器上的更多按钮
后台编辑器可直接插入表情
表情/图片样式的调整
后台用户页面显示用户最近一次登录IP

全部信息请前往https://www.fczbl.vip/787.html查看
```

## Structure
Within the download you'll find the following directories and files. You'll see something like this :point_down:

```
kratos/
├── css/
│   ├── animate.min.css
│   ├── bootstrap.min.css
│   ├── customlogin.css
│   ├── font-awesome.min.css
│   ├── layer.min.css
│   └── superfish.min.css
├── fonts/
│   ├── FontAwesome.otf
│   ├── fontawesome-webfont.eot
│   ├── fontawesome-webfont.svg
│   ├── fontawesome-webfont.ttf
│   ├── fontawesome-webfont.woff
│   └── fontawesome-webfont.woff2
├── images/
│   ├── options/
│   │   └── (has some options pic)
│   ├── smilies/
│   │   └── (has some emoji pic)
│   ├── thumb/
│   │   └── (has some thumb pic)
│   ├── 404.jpg
│   ├── about.jpg
│   ├── ad.png
│   ├── arrow.png
│   ├── avatar.png
│   ├── background.jpg
│   ├── bak.jpg
│   ├── comment.png
│   ├── cursor.cur
│   ├── default-logo.png
│   ├── fingerprint.png
│   ├── icon.png
│   ├── icon-ext.png
│   ├── icon-police.png
│   ├── licenses.png
│   ├── move.cur
│   ├── photo.jpg
│   ├── pointer.cur
│   ├── spig.png
│   ├── sticky.png
│   ├── ul-li.png
│   └── weixin.png
├── inc/
│   ├── theme-options/
│   │   ├── css/
│   │   │   └── optionsframework.css
│   │   ├── images/
│   │   │   └── ico-delete.png
│   │   ├── includes/
│   │   │   ├── class-options-framework.php
│   │   │   ├── class-options-framework-admin.php
│   │   │   ├── class-options-interface.php
│   │   │   ├── class-options-media-uploader.php
│   │   │   └── class-options-sanitization.php
│   │   ├── js/
│   │   │   ├── media-uploader.js
│   │   │   └── options-custom.js
│   │   └── options-framework.php
│   ├── OwO.json
│   ├── share.php
│   └── widgets.php
├── js/
│   ├── buttons/
│   │   ├── images/
│   │   │   └── (has some button pic)
│   │   └── more.js
│   ├── bootstrap.min.js
│   ├── hoverIntent.min.js
│   ├── jquery.easing.js
│   ├── jquery.min.js
│   ├── jquery.qrcode.min.js
│   ├── jquery.stellar.min.js
│   ├── jquery.waypoints.min.js
│   ├── kratos.js
│   ├── layer.min.js
│   ├── modernizr.min.js
│   ├── OwO.min.js
│   ├── spig.js
│   └── superfish.js
├── 404.php
├── comments.php
├── content.php
├── footer.php
├── functions.php
├── header.php
├── header-abstract.php
├── header-banner.php
├── index.php
├── link.php
├── options.php
├── page.php
├── page-home.php
├── page-notitle.php
├── screenshot.png
├── single.php
└── style.css

```
  
## License

- The Kratos Html,CSS,JavaScript,and PHP files are licensed under the GNU General Public License v3:
  - http://www.gnu.org/licenses/gpl-3.0.html

- The Kratos documentation is licensed under the CC BY 4.0 License:
  - https://creativecommons.org/licenses/by/4.0
