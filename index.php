<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $_SERVER['SERVER_NAME']; ?> - frisch erstellte Domain</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
        <style media="screen" type="text/css">
                html {
                        height:100%;
                }
                body {
                        color: #fff; 
                        margin: 0;
                        font-family: 'Montserrat', sans-serif;
                        font-style: normal;
                        font-size: 14px;
                        line-height: 22px;
                        height: 100%; 
                        background-color: #fff;
                }
                h1 {
                        margin-top: 20px;
                        font-size: 50px;
                        opacity: 1;
                }
                @media all and (max-width: 980px) {
                        h1 {
                                font-size: 35px;
                        }
                        .under-construction p {
                                font-size: 20px;
                        }
                }
                @media all and (max-width: 767px) {
                        h1 {
                                font-size: 28px;
                        }
                        .under-construction p {
                                font-size: 16px;
                        }
                }
                h2 {
                        font-style: normal;
                        font-size: 14px;
                        line-height: 22px;
                        margin: 0;
                }
                .wrap {
                        height: auto; 
                        min-height: 100%; 
                        background-color: #3B4251;
                }
                .domain {
                        position: absolute; 
                        text-align: center; 
                        width: 100%; 
                        margin-left: -50%; 
                        top: 42.5%;
                        left: 50%;
                }

                .footer {
                        text-align: center;
                        color:#DCDCDC; 
                        margin:auto;
                        padding:15px 20px 18px 20px;
                        position:relative;
                        clear:both;
                        height:40px;
                        margin-top:-73px;
                        background-color:#444;
                        font-size: 12px;
                        line-height: 22px;
                }
                p {
                        margin: 0;
                }

                .footer a {
                        color:#DCDCDC; 
                }
                p.description {
                    padding-top: 10px;
                    font-size: 18px;
                }
                .avoori-logo {
                    margin: 20px;
                    max-width: 40px;
                }
                .under-construction {
                    position: absolute; 
                    text-align: center; 
                    width: 100%; 
                    bottom: 5%;
                    font-size: 24px;
                    line-height: 1;   
                    font-weight: 300;
                }
                img {
                    filter: brightness(0) invert(1);
                }

        
        </style>
</head>
<body>
        <div class="wrap">
               
                <div class="domain">
                        <h1 id="site_domain"><?php echo $_SERVER['SERVER_NAME']; ?></h1>
                </div>
                <div class="under-construction">
                        <p>Diese Domain ist frisch erstellt. Bald gibt es hier auch Inhalte.</p>
                </div>
        </div>
        <script>
            document.getElementById("site_domain").innerHTML = window.location.hostname;
        </script>
</body>
</html>