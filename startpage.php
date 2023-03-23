<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aahara Meals</title>
    <link rel="stylesheet" href="./style.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap");

      /* body{
     background-image: url(backpic2.jpeg);
       background-size: cover;
       background: #bde7f4;
        opacity: 0.7;
       margin-top:120px } */
      .backpic {
        background-color: rgba(189, 231, 244, 0.8);

        position: ab;
        margin-top: 150px;
        margin-right: 55px;
        background: #bde7f4;
        opacity: 0.7;
      }
      .backpic img {
        width: 1050px;
        background-size: cover;
        background-position: center;
      }
      body::before {
        display: block;
        position: fixed;
        background-color: rgba(240, 240, 240, 0.8);
        content: "";
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: -1;
      }
      header {
        display: flex;
        justify-content: space-between;
      }
      .display {
        display: flex;
        align-items: center;
        width: 30px;
        height: 30px;
      }
      ul {
        background-color: #0e738a;
        margin: 0;
        padding: 0;
        overflow: hidden;
        list-style-type: none;
      }
      li {
        font-family: "Roboto", sans-serif;
        font-size: 16px;
        font-weight: 500;
        color: rgb(8, 8, 8);
      }
      .title {
        font-family: "Oswald", sans-serif;
        font-size: 19px;
        font-weight: 500;
        color: white;
      }
      li {
        float: right;
        margin: 20px;
      }
      header {
        display: flex;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 100px;
        background-color: #0e738a;
      }
      li a {
        display: block;
        color: rgb(9, 8, 8);
        text-align: center;
        padding: 16px;
        text-decoration: none;
      }
      #box {
        position: absolute;
        height: 545px;
        width: 800px;
        right: 82px;
        background: #bde7f4;
        opacity: 0.6;
      }
      #textbox h1 {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      #textbox p {
        font-size: 80px;
        color: #0e738a;
      }
      .container {
        height: 60vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .container p {
        font-size: 3rem;
        padding: 0.5rem;
        font-weight: bold;
        letter-spacing: 0.1rem;
        text-align: center;
        overflow: hidden;
      }
      .container p span.typed-text {
        font-weight: normal;
        color: #0e738a;
      }
      .container p span.cursor {
        display: inline-block;
        background-color: #ccc;
        margin-left: 0.1rem;
        width: 3px;
        animation: blink 1s infinite;
      }
      .container p span.cursor.typing {
        animation: none;
      }
      @keyframes blink {
        0% {
          background-color: #ccc;
        }
        49% {
          background-color: #ccc;
        }
        50% {
          background-color: transparent;
        }
        99% {
          background-color: transparent;
        }
        100% {
          background-color: #ccc;
        }
      }

      /* #textbox {
  position: absolute;
  width: 630px;
  height: 350px;
  left:5%;
  top: 230px;
  background: #bde7f4;
  opacity: 0.8;
  text-align: justify;
  color: #ffffff;
} */

      #textbox h1 {
        display: flex;
        justify-content: center;
        align-items: center;
      }
    </style>
  </head>

  <body>
    <header>
      <div class="display">
        <img
          class="logo"
          src="logo.png"
          alt="logo"
          height="90px"
          width="100px"
        />
        <a class="title">AAHARA MEALS</a>
      </div>
      <nav background-color="#0E738A">
        <ul>
          <li>
            <b
              ><button><a href="login.php">Sign In</a></button></b
            >
          </li>
          <li>
            <b
              ><button><a href="userreg.php">Create User Account</a></button></b
            >
          </li>
          <li>
            <b
              ><button><a href="ngoreg.php">Create NGO Account</a></button></b
            >
          </li>
        </ul>
      </nav>
    </header>

    <div class="backpic">
      <img src="backpic2.jpg" alt="background" align="right" />
      <!-- <div id="box"></div> -->
    </div>
    <div class="container">
      <p>
        Your change can <span class="typed-text"></span
        ><span class="cursor">&nbsp;</span>
      </p>
    </div>
    <!-- <div id="textbox">
      <p style="font-size: 80px">
        Your change<br />
        can make <br />a difference
      </p>
    </div> -->
    <script>
      const typedTextSpan = document.querySelector(".typed-text");
      const cursorSpan = document.querySelector(".cursor");

      const textArray = ["make a difference."];
      const typingDelay = 200;
      const erasingDelay = 100;
      const newTextDelay = 2000; // Delay between current and next text
      let textArrayIndex = 0;
      let charIndex = 0;

      function type() {
        if (charIndex < textArray[textArrayIndex].length) {
          if (!cursorSpan.classList.contains("typing"))
            cursorSpan.classList.add("typing");
          typedTextSpan.textContent +=
            textArray[textArrayIndex].charAt(charIndex);
          charIndex++;
          setTimeout(type, typingDelay);
        } else {
          cursorSpan.classList.remove("typing");
          setTimeout(erase, newTextDelay);
        }
      }

      function erase() {
        if (charIndex > 0) {
          if (!cursorSpan.classList.contains("typing"))
            cursorSpan.classList.add("typing");
          typedTextSpan.textContent = textArray[textArrayIndex].substring(
            0,
            charIndex - 1
          );
          charIndex--;
          setTimeout(erase, erasingDelay);
        } else {
          cursorSpan.classList.remove("typing");
          textArrayIndex++;
          if (textArrayIndex >= textArray.length) textArrayIndex = 0;
          setTimeout(type, typingDelay + 1100);
        }
      }

      document.addEventListener("DOMContentLoaded", function () {
        // On DOM Load initiate the effect
        if (textArray.length) setTimeout(type, newTextDelay + 250);
      });
    </script>
  </body>
</html>
