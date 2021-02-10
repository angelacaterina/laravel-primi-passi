<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel About</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .container{
                width: 84%;
                height: 100%;
                margin: 0 auto;
            }
            .d-flex{
                display: flex;
            }
            .j_center{
                justify-content: center;
            }
            .main-height {
                height: 64vh;
            }
            /* SEZIONE NAVBAR */
            nav{
                height: 70px;
                align-items: center;
            }
            nav a{
                font-size: 16px;
                color: #333338;
                text-decoration: none;
            }
            nav a:not(:last-child){
                padding-right: 70px;    
            }
            nav a:active,
            nav a:hover{
                color: #FC7523FC;       
            }
            /* CHIUSURA HEADER */
            /* FOOTER */
            footer#site_footer{
                background: #F5F5F1;
                text-align: center;
                font-size: 13px;
                padding: 30px;
            }
            /* CHIUSURA FOOTER */

            
        </style>
    </head>
    <body>
        <header id="site_header">
             <div class="d-flex j_center">
                <h1>LARAVEL</h1>
            </div>
            <!-- Navbar -->
            <nav  class="d-flex j_center">
                <a href="/">Home</a>
                <a href="blog">Blog</a>
                <a href="about-us">About</a>
                <a href="contact-us">Contact</a>
            </nav>
            <!-- /nav -->
        </header>
        <main id="main_content" class="main-height">
            <h2>About</h2>
        </main>
        <footer id="site_footer">
            <div class="container">
                <p>&copy; Copyright 2021</p>
            </div>
        </footer>
    </body>
</html>
