<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="t2.css">
    <script type="text/javascript" src="script.js"></script>
    <title>ProCV</title>
</head>
<body>
  <form id="form">
    <div class="container">
      <h1>RESUME GENERATOR</h1>
      <p>by ProCV</p>
  
      <h3>PERSONAL INFORMATION</h3>
      <div class="form-group">
        <label>YOUR NAME</label>
        <br>
        <input type="text" id="nameField" placeholder="Enter here" class="form-control" required/>
      </div>

      <div class="form-group"></div>
    <label for="fbfield">PROFESSION</label><br>
    <input type="text" id="prField" placeholder="Enter here" class="form-control" required/>
  
      <div class="form-group">
        <label for="contactField">YOUR CONTACT</label><br>
        <input type="number" id="contactField" placeholder="Enter here" class="form-control" required/>
      </div>
  
      <div class="form-group"></div>
      <label for="addressField">YOUR ADDRESS</label><br>
      <input type="text" id="AddressField" placeholder="Enter here" class="form-control" required/>
    </div>

    <div class="form-group"></div>
    <label for="aboutField">INTRODUCTION</label><br>
    <textarea type="text" id="aboutField" placeholder="Enter here" class="form-control" rows="3"></textarea>
  </div>
    <hr>
    <hr>
  
    <a class="secondary-text">IMPORTANT LINKS</a>
    <hr>
    <hr>
    <div class="form-group"></div>
    <label for="fbfield">FACEBOOK</label><br>
    <input type="url" id="fbField" placeholder="Enter here" class="form-control" rows="5"/>
  
    <div class="form-group"></div>
    <label for="instafield">INSTAGRAM</label><br>
    <input type="url" id="instaField" placeholder="Enter here" class="form-control" rows="5"/>
  
    <div class="form-group"></div>
    <label for="lifield">LINKEDIN</label><br>
    <input type="url" id="liField" placeholder="Enter here" class="form-control" rows="5"/>
    <hr>
    <hr>
    <div class="form-group" id="sk">
      <label>SKILLS</label><br>
      <p class="demo"></p>
      <input type="text" id="skill" placeholder="Enter here" class="form-control skField" rows="3"/>
      <br>
      <div id="we">
        <input type="button" name="add" onclick="addnew()" value="add"/>
      </div>
    </div>
  
    <hr>
    <hr>
  
    <h3>PROFESSIONAL INFORMATION</h3>
  
    <div class="form-group" id="bd">
    <label>WORK EXPERIENCE</label><br><br>
    <input type="text" placeholder="Enter here" class="form-control bgField" rows="1"/>
    <br>
    <div id="begin">
    <input type="button" name="add" onclick="insert()" value="add"/>
  </div>
    </div>
    <br>
    <hr>
    <hr>
  
    <div class="form-group" id="bg">
      <label>EDUCATION</label><br><br>
      <input type="text" placeholder="Enter here" class="form-control bdField" rows="1"/>
      <br>
      <div id="be">
      <input type="button" name="add" onclick="insert1()" value="add"/>
    </div>
      </div>
      <br>
    <hr>
    <hr>
  
    <div class="form-group" id="cr">
      <label>CERTIFICATION</label><br>
      <p class="demo"></p>
      <input type="text" placeholder="Enter here" class="form-control crField" rows="3"/>
      <br>
      <div id="crname">
        <input type="button" name="add" onclick="insert2()" value="add"/>
      </div>
    </div>
    <hr>
    <hr>
      <input type="button" name="generateCV" onclick="genCV()" value="generateCV"/>
  </form>
  <br>
  <div class="full">
    <h1 id="name">ATHARVA AMLE</h1>
    <p id="prof">Profession</p>
    <br>
    <p style="margin-left: 10px;">phone number:</p>
    <p id="phone" style="margin-left: 10px;"></p>
    <br>
    <p style="margin-left: 10px;">address:</p>
    <p id="addr"></p>
    <br>
    <div class="lnk" style="margin-left: 10px;">
      <p>Facebook:</p>
      <a href="#" id="fcb"></a>
      <br>
      <p>Instagram:</p>
      <a href="#" id="ist"></a>
      <br>
      <p>Linkedin:</p>
      <a href="#" id="lkd"></a>
      <br>
  </div>
    <p id="about">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum minus dolorum voluptates unde? Officia quidem enim maiores, hic accusantium nulla voluptatibus cumque eligendi quibusdam rem minima veniam est ex laborum.
      Nemo tempora provident dolorum? Aliquam a, quo vel assumenda ut excepturi amet cumque beatae, sapiente enim magnam sint tenetur deleniti inventore architecto qui voluptatibus! Blanditiis similique neque consectetur exercitationem tenetur!
      Amet sed ea id quod, ab distinctio voluptas obcaecati doloribus pariatur enim saepe est adipisci non eum voluptatem placeat nostrum magnam. Ratione fugiat facilis ipsam tenetur iste quam dolorum a.</p>
      <br>
      <hr>
    <img src="images/skills.jpg" class="skimg" alt="">
    <h2 id="skills">Skills</h2>
    <hr>
    <span>
      <ul id="skilist">
        <li></li>
        <li></li>
      </ul>
    </span>
    <br>
    <hr>
    <img src="images/nootbook.jpg" class="bag" alt="">
    <h2 class="edu">Education</h2>
    <hr>
        <ul id="educ">
        <li></li>
        <li></li>
         </ul>
         <br>
         <hr>
    <img src="images/nootpad.jpg" class="bag" alt="">
    <h2 class="exp">Experience</h2>
    <hr>
    <ul id="expr">
      <li></li>
      <li></li>
  </ul>
  <br>
  <hr>
    <img src="images/CERTI.jpg" alt="" class="bag">
    <h2 class="cert">Certification</h2>
    <hr>
    <span>
      <ul id="certlist">
        <li></li>
        <li></li>
      </ul>
    </span>
  </div>
  <input type="button" name="print" onclick="printCV()" value="print" class="print">
</body>
</html>
