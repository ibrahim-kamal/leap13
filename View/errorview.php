<html>

<head>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Convergence);

        a {
            text-decoration: none;
        }
        .txt-rt {
            text-align: right;
        } /* text align right */
        .txt-lt {
            text-align: left;
        } /* text align left */
        .txt-center {
            text-align: center;
        } /* text align center */
        .float-rt {
            float: right;
        } /* float right */
        .float-lt {
            float: left;
        } /* float left */
        .clear {
            clear: both;
        } /* clear float */
        .pos-relative {
            position: relative;
        } /* Position Relative */
        .pos-absolute {
            position: absolute;
        } /* Position Absolute */
        .vertical-base {
            vertical-align: baseline;
        } /* vertical align baseline */
        .vertical-top {
            vertical-align: top;
        } /* vertical align top */
        .underline {
            padding-bottom: 5px;
            border-bottom: 1px solid #eee;
            margin: 0 0 20px 0;
        } /* Add 5px bottom padding and a underline */
        nav.vertical ul li {
            display: block;
        } /* vertical menu */
        nav.horizontal ul li {
            display: inline-block;
        } /* horizontal menu */
        img {
            max-width: 100%;
        }
        /*end reset*/
        body {
            background: url("./assets/images/background.jpg")
                no-repeat 100%;
            background-size: 100%;
            font-family: "Convergence";
            font-size: 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        /**-----start-wrap---------**/
        .wrap {
            width: 70%;
            margin: 5.2% auto 4% auto;
        }
        /**-----start-logo--------**/
        .logo {
            padding: 1em;
            text-align: center;
            padding: 1% 1% 5% 1%;
        }
        .logo h1 {
            display: block;
            padding: 2em 0em;
        }
        .logo span {
            font-size: 2em;
            color: #fff;
        }
        .logo span img {
            width: 40px;
            height: 40px;
            vertical-align: bottom;
            margin: 0px 10px;
        }
        /**-----end-logo---------**/
        /**-----start-search-bar-section------**/
        .buttom {
            background: url(./assets/images/bg2.png)
                no-repeat 100% 0%;
            background-size: 100%;
            text-align: center;
            vertical-align: middle;
            margin: 0 auto;
            width: 556px;
        }
        .seach_bar {
            padding: 2em;
        }
        .seach_bar p {
            font-size: 1.5em;
            color: #fff;
            font-weight: 300;
            margin: 2.6em 0em 0.9em 0em;
        }
        .seach_bar span a {
            font-size: 1em;
            color: #fff;
            text-decoration: underline;
            font-weight: 300;
            font-family: "Convergence";
        }
        /**********search_box*************/
        .search_box {
            background: #f1f3f6;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
            padding: 6px 10px;
            position: relative;
            cursor: pointer;
            width: 75%;
            margin: 0 auto;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -o-border-radius: 5px;
            box-shadow: inset 0 0 5px rgba(156, 156, 156, 0.75);
            -moz-box-shadow: inset 0 0 5px rgba(156, 156, 156, 0.75);
            -webkit-box-shadow: inset 0px 0px 5px rgba(156, 156, 156, 0.75);
        }
        .search_box img {
            vertical-align: middle;
            margin-right: 10px;
        }
        .search_box form input[type="text"] {
            border: none;
            outline: none;
            background: none;
            font-size: 1em;
            color: #999;
            width: 100%;
            font-family: "Convergence";
            -webkit-apperance: none;
        }
        .search_box form input[type="submit"] {
            border: none;
            cursor: pointer;
            background: url(./assets/images/search.png)
                no-repeat 0px 1px;
            position: absolute;
            right: 0;
            width: 34px;
            height: 25px;
            outline: none;
            -webkit-appearance: none;
        }
        /*****copy-right*****/
        .copy_right {
            color: #fff;
            font-size: 0.85em;
            line-height: 1.8em;
            padding: 5em 0px 0px 0px;
            font-family: "Convergence";
            text-align: center;
        }
        .copy_right a {
            color: #ff7ed5;
            -webkit-transition: all 0.3s ease-out;
            -moz-transition: all 0.3s ease-out;
            -ms-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
        }
        .copy_right a:hover {
            color: #fff;
        }
        /*********Media Queries************/
        @media only screen and (max-width: 768px) {
            .wrap {
                width: 80%;
            }
            .logo img {
                width: 315px;
            }
        }
        @media only screen and (max-width: 640px) {
            .wrap {
                width: 85%;
            }
            .logo {
                padding: 1% 1% 12% 1%;
            }
            .buttom {
                width: 515px;
            }
            .logo img {
                width: 300px;
            }
        }
        @media only screen and (max-width: 480px) {
            .wrap {
                width: 90%;
            }
            .logo {
                padding: 1% 1% 12% 1%;
            }
            .buttom {
                width: 440px;
            }
            /***/
            .logo span {
                font-size: 1.6em;
            }
            .seach_bar p {
                font-size: 1.2em;
                margin: 2.6em 0em 0.7em 0em;
            }
            .search_box {
                padding: 3px 10px;
            }
            .logo img {
                width: 270px;
            }
        }
        @media only screen and (max-width: 320px) {
            .wrap {
                width: 90%;
            }
            .logo {
                padding: 1% 1% 12% 1%;
            }
            .buttom {
                width: 290px;
            }
            /***/
            .logo span {
                font-size: 1.4em;
            }
            .seach_bar p {
                font-size: 1em;
                margin: 1.5em 0em 2em 0em;
            }
            .logo span img {
                vertical-align: middle;
            }
            .logo img {
                width: 200px;
            }
            .copy_right {
                padding: 2em 0px 0px 0px;
            }
        }

    </style>
</head>

<body>

    <script async type='text/javascript'
        src='//cdn.fancybar.net/ac/fancybar.js?zoneid=1502&serve=C6ADVKE&placement=w3layouts' id='_fancybar_js'>
    </script>

    <!-----start-wrap--------->
    <div class="wrap">
        <!-----start-content--------->
        <div class="content">
            <!-----start-logo--------->
            <div class="logo">
                <h1><a href="#"><img src="./assets/images/404.png" /></a></h1>
                <span><img src="./assets/images/signal.png" />Oops! The Page you
                    requested was not found!</span>
            </div>
            <!-----end-logo--------->
            <!-----start-search-bar-section--------->
            <div class="buttom">
                <div class="seach_bar">
                    <p>you can go to <span><a href="<?php echo base_url(); ?>">home</a></span> page or search here</p>
                    <!-----start-sear-box--------->
                    <div class="search_box">
                        <form>
                            <input type="text" value="Search" onfocus="this.value = '';"
                                onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                        </form>
                    </div>
                </div>
            </div>
            <!-----end-sear-bar--------->
        </div>

        <!----copy-right-------------->
        <p class="copy_right">&#169; 2016 404 error page. All rights reserved | Created by<a
                href="http://ankush.zcat.in" target="_blank">&nbsp;Ankush Minda</a> </p>
    </div>

    <!---------end-wrap---------->

</body>

</html>