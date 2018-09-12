# Kratos

A clean, simple and responsive blog theme of WordPress, based on [Bootstrap](https://github.com/twbs/bootstrap) and [Font Awesome](https://github.com/FortAwesome/Font-Awesome). Created and maintained by Vtrois.

![Kratos Demo](https://s1.ax1x.com/2018/04/01/9zYjNn.png) 

## Structure
Within the download you'll find the following directories and files. You'll see something like this :point_down:

```
kratos
├── 404.php
├── LICENSE
├── comments.php
├── content.php
├── css
│   ├── animate.min.css
│   ├── bootstrap.min.css
│   ├── font-awesome.min.css
│   ├── layer.min.css
│   └── superfish.min.css
├── fonts
│   ├── FontAwesome.otf
│   ├── fontawesome-webfont.eot
│   ├── fontawesome-webfont.svg
│   ├── fontawesome-webfont.ttf
│   ├── fontawesome-webfont.woff
│   └── fontawesome-webfont.woff2
├── footer.php
├── functions.php
├── header-abstract.php
├── header-banner.php
├── header.php
├── images
│   ├── 404.jpg
│   ├── about.jpg
│   ├── ad.png
│   ├── arrow.png
│   ├── avatar.png
│   ├── background.jpg
│   ├── default.jpg
│   ├── fingerprint.png
│   ├── icon-ext.png
│   ├── icon-police.png
│   ├── icon.png
│   ├── licenses.png
│   ├── options(has some options pic)
│   ├── smilies(has some emoji pic)
│   ├── ul-li.png
│   └── weixin.png
├── inc
│   ├── share.php
│   ├── theme-options
│   │   ├── css
│   │   │   └── optionsframework.css
│   │   ├── images
│   │   │   └── ico-delete.png
│   │   ├── includes
│   │   │   ├── class-options-framework-admin.php
│   │   │   ├── class-options-framework.php
│   │   │   ├── class-options-interface.php
│   │   │   ├── class-options-media-uploader.php
│   │   │   └── class-options-sanitization.php
│   │   ├── js
│   │   │   ├── media-uploader.js
│   │   │   └── options-custom.js
│   │   └── options-framework.php
│   ├── version.php
│   └── widgets.php
├── index.php
├── js
│   ├── bootstrap.min.js
│   ├── buttons(has some button pic)
│   │   └── more.js
│   ├── hoverIntent.min.js
│   ├── jquery.easing.min.js
│   ├── jquery.min.js
│   ├── jquery.qrcode.min.js
│   ├── jquery.stellar.min.js
│   ├── jquery.waypoints.min.js
│   ├── kratos.js
│   ├── layer.min.js
│   ├── modernizr.min.js
│   └── superfish.js
├── options.php
├── page-home.php
├── page-notitle.php
├── page.php
├── screenshot.png
├── single.php
├── smiley.php
└── style.css
```

# 相比原版我的修改
## 登录页面修改为使用[M.J](http://webjyh.com/wordpress-login-page/)方案
修改方法见[修改博客的登录页面](http://www.wangxianfeng.cn/wordpress/2017/10/09/%e4%bf%ae%e6%94%b9%e5%8d%9a%e5%ae%a2%e7%9a%84%e7%99%bb%e5%bd%95%e9%a1%b5%e9%9d%a2/)

<br/>

![登录页面](/doc/images/login-page.png)


## 在文章列表和文章详情添加“编辑”按钮
文章列表页面
<br/>
![编辑按钮](/doc/images/edit_button.png)
<br/>
文章详情页面
<br/>
![编辑按钮](/doc/images/edit_button2.png)
## 小屏幕页面添加“登录”和“搜索”图标
右上角添加2个图标
<br/>
![登录搜索](/doc/images/search_login_button.png)
<br/>
点击搜索按钮的时候搜索框出现
<br/>
![登录搜索](/doc/images/search_login_button2.png)
<br/>
  
## License

- The Kratos Html,CSS,JavaScript,and PHP files are licensed under the GNU General Public License v3:
  - http://www.gnu.org/licenses/gpl-3.0.html

- The Kratos documentation is licensed under the CC BY 4.0 License:
  - https://creativecommons.org/licenses/by/4.0
