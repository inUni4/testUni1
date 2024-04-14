<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width-device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <style>
      body{
        background-color: purple;
        font-family: Arial;
        padding: 0;
        margin: 0;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 5%;
        left: 0;
        right: 0;
        
      }
      .all-uni-wrappers{
        background-color: white;
        padding: 10px;
        width: 90%;
        max-width: 600px;
        height: 300px;
        justify-content: space-around;
        border: none;
        border-radius: 6px;
        box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.15);
        display: flex;
        flex-direction: 1 1;
        margin: 20px;
      }
      .header-wrapper{
        background-color: white;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        padding: 1px;
        display: flex;
        flex-direction: 1 2;
      }
      .header-tag{
        color: purple;
        font-size: 14px;
        font-weight: bold;
        align-items: center;
        text-align: center;
        margin-bottom: 2px;
      }
      .header-tagg{
        color: purple;
        font-size: 12px;
        font-weight: bold;
        align-items: center;
        text-align: center;
        margin-top: 2px;
      }
      button{
        background-color: purple;
        padding: 6px 12px;
        border: none;
        border-radius: 3px;
        color: white;
      }
      .back-button{
        margin: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
      }
      .back-button:hover{
        transform: scale(0.9);
      }
      .open-wrapper{
        width: 90%;
      }
      .uni-wrappers{
        width: 90%;
        max-width: 300px;
        padding: 5px;
        border: none;
        border-radius: 6px;
        box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.15);
        background-color: white;
        display: grid;
        grid-template-columns: 20% 80%;
        align-items: center;
        margin: 10px;
      }
      .uni-wrappers1{
        width: 90%;
        max-width: 300px;
        padding: 5px;
        border: none;
        border-radius: 6px;
        box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.15);
        background-color: white;
        display: grid;
        grid-template-columns: 20% 80%;
        align-items: center;
        margin: 10px;
      }
      .uni-wrappers2{
        width: 90%;
        max-width: 300px;
        padding: 10px;
        border: none;
        border-radius: 6px;
        box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.15);
        background-color: white;
        display: grid;
        grid-template-columns: 20% 80%;
        align-items: center;
        margin: 10px;
      }
      .uni-wrappers3{
        width: 90%;
        max-width: 300px;
        padding: 10px;
        border: none;
        border-radius: 6px;
        box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.15);
        background-color: white;
        display: grid;
        grid-template-columns: 20% 80%;
        align-items: center;
        margin: 10px;
      }
      .uni-pic{
        width: 50%;
        margin-left: 5px;
      }
      .closed-uni{
        font-size: 12px;
        color: rgb(205, 2, 2);
        font-weight: bold;
        width: 90%;
      }
      .open-uni{
        font-size: 12px;
        color: rgb(5, 176, 5);
        font-weight: bold;
        width: 100%;
      }
      
      .uni-wrappers4{
        width: 90%;
        max-width: 300px;
        padding: 5px;
        border: none;
        border-radius: 6px;
        box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.15);
        background-color: white;
        display: grid;
        grid-template-columns: 20% 80%;
        align-items: center;
        margin: 10px;
      }
      .uni-wrappers5{
        width: 90%;
        max-width: 300px;
        padding: 5px;
        border: none;
        border-radius: 6px;
        box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.15);
        background-color: white;
        display: grid;
        grid-template-columns: 20% 80%;
        align-items: center;
        margin: 10px;
      }
      .uni-wrappers6{
        width: 90%;
        max-width: 300px;
        padding: 4px;
        border: none;
        border-radius: 6px;
        box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.15);
        background-color: white;
        display: grid;
        grid-template-columns: 20% 80%;
        align-items: center;
        margin: 10px;
      }
      .page1{
        margin: 10px;
      }
      .page2{
        margin: 10px;
      }
      
      
      
    </style>
  </head>
  <body>
    <div class="header-wrapper">
      <div>
        <a href="file:///C:/xampp/htdocs/js-basics/index.html"><button class="back-button"><</button></a>
      </div>
      <div class="open-wrapper">
        <p class="header-tag">Open Universities 2025!!!</p>
        <p class="header-tagg">(Gauteng)</p>
      </div>
    </div>
    <div class="all-uni-wrappers">
      <div class="page1">
        <div class="uni-wrappers">
          <img src="Unisa.png" class="uni-pic">
          <p class="closed-uni">Unisa: Closed</p>
        </div>
      <div class="uni-wrappers1">
        <img src="tut.png" class="uni-pic">
        <p class="open-uni">Tshwane University Of Technology: Open</p>
      </div>
      <div class="uni-wrappers2">
        <img src="wits.jpg" class="uni-pic">
        <p class="open-uni">Wits: Open</p>
      </div>
      <div class="uni-wrappers3">
        <img src="uj.jpg" class="uni-pic">
        <p class="open-uni">University Of Johannesburg: Open</p>
      </div>
      </div>
      <div class="page2">
        <div class="uni-wrappers4">
          <img src="vut.jpg" class="uni-pic">
          <p class="open-uni">Vaal University Of Tech: Open</p>
        </div>
        <div class="uni-wrappers5">
          <img src="unip.jpg" class="uni-pic">
          <p class="open-uni">University Of Pretoria: Open</p>
        </div>
        <div class="uni-wrappers6">
          <img src="smu.png" class="uni-pic">
          <p class="closed-uni">Sefako Makgatho Health Sciences University: Closed</p>
        </div>
      </div>
      <!--
      -->
    </div>
    
  </body>
</html>