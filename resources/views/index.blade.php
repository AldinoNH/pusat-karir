<!DOCTYPE html>
<html>
<head>
  <title>Tutorial Parallax Scrolling</title>
  <style>
        .container {
        max-width: 960px;
        margin: 0 auto;
        }
        section.section:last-child {
        margin-bottom: 0;
        }
        section.section h2 {
        margin-bottom: 40px;
        font-family: "Roboto Slab", serif;
        font-size: 30px;
        }
        section.section p {
        margin-bottom: 40px;
        font-size: 16px;
        font-weight: 300;
        }
        section.section p:last-child {
        margin-bottom: 0;
        }
        section.section.content {
        padding: 40px 0;
        }
        section.section.parallax {
        height: 600px;
        background-position: 50% 50%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        }
        section.section.parallax h1 {
        color: rgba(255, 255, 255, 0.8);
        font-size: 48px;
        margin: 0 auto;
        line-height: 600px;
        font-weight: 700;
        text-align: center;
        text-transform: uppercase;
        text-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        section.section.parallax-1 {
        background-image: url("parallax.jpg");
        }
        section.section.parallax-2 {
        background-image: url("parallax.jpg");
        }
        section.section.parallax-3 {
        background-image: url("parallax.jpg");
        }
        
        @media all and (min-width: 600px) {
        section.section h2 {
            font-size: 42px;
        }
        section.section p {
            font-size: 20px;
        }
        section.section.parallax h1 {
            font-size: 96px;
        }
        }
        @media all and (min-width: 960px) {
        section.section.parallax h1 {
            font-size: 160px;
        }
        }
  </style>
</head>
<body style="margin:0 auto;">
  <section class="section parallax parallax-1">
  <div class="container">
    <h1>Section 1</h1>
  </div>
</section>
 
<section class="section content">
  <div class="container">
    <h2>Simple title 1</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus id nunc ut gravida. Vestibulum ac...</p>
    <p>...</p>
    <p>...</p>
    <p>...</p>
  </div>
</section>
 
<section class="section parallax parallax-2">
  <div class="container">
    <h1>Section 2</h1>
  </div>
</section>
 
<section class="section content">
  <div class="container">
    <h2>Simple title 2</h2>
    <p>Nam imperdiet posuere bibendum. Aliquam nec consectetur metus. Aliquam egestas a elit at malesuada...</p>
    <p>...</p>
    <p>...</p>
    <p>...</p>
  </div>
</section>
 
<section class="section parallax parallax-3">
  <div class="container">
    <h1>Section 3</h1>
  </div>
</section>
 
<section class="section content">
  <div class="container">
    <h2>Simple title 3</h2>
    <p>Proin tempor urna vitae tortor porttitor, ac malesuada elit lacinia. Nulla ac tellus nulla. Donec iaculis...</p>
    <p>...</p>
    <p>...</p>
    <p>...</p>
  </div>
</section>
</body>
</html>