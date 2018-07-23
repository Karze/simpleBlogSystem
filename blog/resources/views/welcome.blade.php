<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Karze Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
            }

            .full-height {

            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                margin-top: 300px;
            }

            .sub-title {
                font-size: 35px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .m-b-lg {
                margin-bottom: 300px;
            }

            .m-l-lg {
                margin-left: 200px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Karze Blog
                </div>

                <div class="sub-title m-l-lg m-b-lg">
                    -- By Laravl use Homestead
                </div>

                <div class="blog-content" style="text-align: left;margin-left: 200px;margin-bottom: 100px;margin-right:200px;background-color: snow;">
                    Laravel+Homestead+Vagrant环境搭建<br><br>

                    本次安装采用分项目独立安装Homestead的方式<br><br>

                    需要事先安装：<br>
                    1. php7<br>
                    2. laravel<br>
                    3. git<br>
                    4. virtualbox<br>
                    5. composer<br><br>

                    使用composer安装homestead路径<br>
                    composer require laravel/homestead --dev<br><br>

                    生成homestead配置<br>
                    vendor\\bin\\homestead make<br><br>

                    安装vagrant<br>
                    https://www.vagrantup.com/<br><br>

                    生成ssh-key，用户名和邮箱自定<br>
                    ①  cd ~/.ssh/    【如果没有对应的文件夹，则执行  mkdir  ./.ssh】<br><br>

                    ②  git config --global user.name "username"<br><br>

                    ③  git config --global user.email "useremail"<br><br>

                    ④  ssh-keygen -t rsa -C "useremail"<br><br>

                    如果可以高速连接国外网络，可以在项目根目录下直接运行vagrant up，期间会下载virtualbox文件<br><br>

                    大部分国内网络推荐直接下载virtualbox文件，可以先通过vagrant up查看下载地址和版本号，然后ctrl+c取消后通过下载软件离线下载virtualbox文件，如果下载后发现文件名乱码，重新命名即可<br><br>

                    新建文件metadata.json，输入以下信息<br>
                    <div class="code">
                        {<br>
                        &emsp;"name": "laravel/homestead",<br>
                        &emsp;"versions":<br>
                        &emsp;[<br>
                        &emsp;&emsp;{<br>
                        &emsp;&emsp;&emsp;"version": "6.1.0",<br>
                        &emsp;&emsp;&emsp;"providers": [<br>
                        &emsp;&emsp;&emsp;&emsp;{<br>
                        &emsp;&emsp;&emsp;&emsp;&emsp;"name": "virtualbox",<br>
                        &emsp;&emsp;&emsp;&emsp;&emsp;"url": "file:///D:/virtualboxdata/virtualbox.box"<br>
                        &emsp;&emsp;&emsp;&emsp;}<br>
                        &emsp;&emsp;&emsp;]<br>
                        &emsp;&emsp;}<br>
                        &emsp;]<br>
                        }<br>
                    </div>

                    其中version写的是下载的virtualbox文件的版本，url则是该文件的路径，将文件放到virtualbox相同的路径下<br>
                    进入virtualbox路径，运行vagrant box add metadata.json，等待安装完成<br><br>

                    之后运行vagrant up启动虚拟机<br><br>

                    可以通过vagrant ssh连接到虚拟机<br>
                </div>

                <div class="links" style="display: none">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
