<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		body, html {
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
    overflow-x: hidden;
    background-color: #f0f8ff;
  }

  .navbar {
      background-color: #333;
  }

  .menu {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 50px;
  }

  .leftmenu {
      display: flex;
      align-items: center;
  }

  .leftmenu .icon {
      width: 30px;
      height: auto; 
      margin-right: 10px; 
  }

  .leftmenu h4 {
      color: #fff;
      margin: 0;
      font-size: 24px;
  }


      
  .e-card {
    margin: 100px auto;
    background: transparent;
    box-shadow: 0px 8px 28px -9px rgba(0,0,0,0.45);
    position: relative;
    width: 700px;
    height: 400px;
    border-radius: 16px;
    overflow: hidden;
  }

  .wave {
    position: absolute;
    width: 1000px;
    height: 700px;
    opacity: 0.6;
    left: 0;
    top: 0;
    margin-left: -50%;
    margin-top: -70%;
    background: linear-gradient(744deg,#af40ff,#5b42f3 60%,#00ddeb);
  }


  .infotop {
    text-align: center;
    font-size: 20px;
    position: absolute;
    top: 5.6em;
    left: 0;
    right: 0;
    color: rgb(255, 255, 255);
    font-weight: 600;
  }


  .wave:nth-child(2),
  .wave:nth-child(3) {
    top: 210px;
  }

  .playing .wave {
    border-radius: 40%;
    animation: wave 3000ms infinite linear;
  }

  .wave {
    border-radius: 40%;
    animation: wave 55s infinite linear;
  }

  .playing .wave:nth-child(2) {
    animation-duration: 4000ms;
  }

  .wave:nth-child(2) {
    animation-duration: 50s;
  }

  .playing .wave:nth-child(3) {
    animation-duration: 5000ms;
  }

  .wave:nth-child(3) {
    animation-duration: 45s;
  }

  @keyframes wave {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }
      p {
        text-align: center;
        font-size: 25px;
      }
      
      button {
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 30px;
      }

      button:hover {
        background-color: #000;
      }

          .footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px;
      }
      .back {
        margin-bottom: 5px;
      }
      
      span {
        color: #fff;
      }

    </style
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Score</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="navbar">
        <div class="menu">
            <div class="leftmenu">
                <a style="text-decoration:none" href="index.html"><img src="icon.png" alt="Icon" class="icon"></a>
                <a style="text-decoration:none" href="index.html"><h4>CWL</h4></a>
            </div>
        </div>
    </div>
    <div class="e-card playing">
	  <div class="image"></div>
	  
	  <div class="wave"></div>
	  <div class="wave"></div>
	  <div class="wave"></div>
		  <div class="infotop">      
			<h1 style="text-align:center">Awesome!!!</h1>
			<?php
			// Get URL from form submission
			$url = $_POST['url'];

			// Generate a random score between 1 and 1000
			$score = rand(1, 1000);

			// Display the URL and its score
			echo "<p>Provided URL: $url</p>";
			echo "<p>Your URL Score is: <b>$score</b></p>";
			?>
			<a href="index.html"><button>
			  
			  <span class="back">Back</span>
			</button></a>
	      </div>
	</div>
	

    <div class="footer">
        <p>®CWL Visit our Cyber Security Course and Training Site <a href="https://cyberwarfare.live"><span>cyberwarfare.live</span></a></p>
    </div>
</body>
</html>
