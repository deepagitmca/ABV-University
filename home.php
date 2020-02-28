<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Welcome </title>
        <link rel="stylesheet" type="text/css" href="nav2.css"/>
         <link rel="stylesheet" href="style.css">
         <link rel="stylesheet" href="css.css">
    </head>
   
    <body class="body">
        
        <table width="1000" border="0" cellspacing="0" cellpadding="0" align="center">
         <tbody>
           <tr>
              <td height="140" bgcolor="#070707" align="left">  <?php include("header.php"); ?> </td>
            </tr>
            <tr>
              <td bgcolor="#6E6E6E"> <?php include("nav.php"); ?> </td>
           </tr>
            <tr bgcolor="#F8F8F8">
                <td colspan="2">   <div class="galleryContainer">
            <div class="slideShowContainer">
        <div id="playPause" onclick="playPauseSlides()"></div>
        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
        <div class="imageHolder" align="center">
            <img src="pic1.jpg">
            <p class="captionText"> Good Infrastructure </p>
        </div>
        <div class="imageHolder" align="center">
            <img src="pic.jpg">
            <p class="captionText"> Good educational environment </p>
        </div>
        <div class="imageHolder" align="center">
            <img src="pic2.jpg" >
            <p class="captionText"> Best library in the state </p>
        </div>
        <div class="imageHolder" align="center">
            <img src="pic3.jpg">
            <p class="captionText"> Cafeteria with delecious yummmy food </p>
        </div>
        <div class="imageHolder" align="center">
            <img src="pic4.jpg">
            <p class="captionText"> High-tech computer lab </p>
        </div>
    </div>
    <div id="dotsContainer"></div>
</div></td>
            </tr>
            
            <script src="myScript.js"></script>
            
            <tr>
               <td bgcolor="#070707" align="center" height="2"> <?php include("footer.php"); ?></td>
            </tr>
        </tbody>
      </table>
    </body>
</html>
