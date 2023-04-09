<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="T3.css">
    <script src="scr.js"></script>
    <title>temp3</title>
</head>
<body>
    <form id="form">       
        <div class="container">
            <h1>RESUME GENERATOR</h1>
            <p>by ProCV</p>
        
            <h3>PERSONAL INFORMATION</h3>
               <div class="form-group">
               <label for ="nameField">YOUR NAME</label>
               <br>
                <input  type="text" id="nameField" placeholder="Enter here" class="form-control" required/>
              </div>
        
            
              <div class="form-group">
                <label for ="contactField">YOUR CONTACT</label><br>
                <input type="number" id="contactField" placeholder="Enter here"  class="form-control" required/>
                </div>
        
                <div class="form-group"></div>   
                <label for ="addressField">YOUR ADDRESS</label><br>
                <input type="text" id="AddressField" placeholder="Enter here" class="form-control" rows="3" required/>
                 </div>
                 <hr>
                 <hr>

                 <div class="form-group"></div>   
                 <label for ="emailField">YOUR EMAIL</label><br>
                 <input type="text" id="emailField" placeholder="Enter here" class="form-control" rows="3" required/>
                  </div>
                  <hr>
                  <hr>
                  
                 
        
                <a class="secondary-text">IMPORTANT LINKS</a><hr><hr>
                <div class="form-group"></div>   
                <label for ="fbfield">FACEBOOK</label><br>
                <input type="url" id="fbField" placeholder="Enter here" class="form-control" rows="5"/>
        
                
                <div class="form-group"></div>   
                <label for ="instafield">INSTAGRAM</label><br>
                <input  type="url"  id="instaField"  placeholder="Enter here"  class="form-control"  rows="5"/>
        
             
                <div class="form-group"></div>   
                <label for ="lifield">LINKEDIN</label><br>
                <input type="url" id="liField" placeholder="Enter here" class="form-control" rows="5"/>
        <hr>
        <hr>

        <div class="form-group"> 
            <label>INTRODUCTION</label><br>   
            <textarea type="text" id="intr" placeholder="Enter here" class="form-control" rows="2"></textarea>
           <br>
         </div> 
     <hr>
     <hr>

     <div class="form-group" id="sf">    
        <label for>SOFTWARE</label><br>
        <input  type="text"  placeholder="Enter here"  class="form-control sfField"  rows="2"/>
       <br>
       <div id="ss">
        <input type="button" name="add" onclick="insert()" value="add"/>
       </div>
     </div> 
 <hr>
 <hr>

               <div class="form-group" id="sk">    
               <label for>SKILLS</label><br>
               <input type="text" placeholder="Enter here" class="form-control skField" rows="2"/>
              <br>
              <div id="we">
                <input type="button" name="add" onclick="insert1()" value="add"/>
              </div>
            </div> 
        <hr>
        <hr>
        
                <h3>PROFESSIONAL INFORMATION</h3>
        
                <div class="form-group" id="wf">
                <label >WORK EXPERIENCE</label><br>
                <label class="org_name">ORGANIZATION NAME</label><br>
                <input  type="text" placeholder="Enter here" class="form-control weField" rows="3"/>
                <br>
                <div id="wk">
                    <input type="button" name="add" onclick="insert2()" value="add"/>
            </div>
                </div> 
                <hr>
                <hr>
        
                <div class="form-group" id="ef">  
                <label for>EDUCATION</label><br>
                <label class="org_name">SCHOOL/COLLEGE NAME</label><br>
                <input type="text" placeholder="Enter here" class="form-control edField" rows="3"/>
                <br>
                <div id="ek">
                    <input type="button" name="add" onclick="insert3()" value="add"/>
            </div>
        </div> 
                <hr>
                <hr>
        
                <div class="form-group" id="cf">  
                <label for>CERTIFICATION</label><br>
                <input type="text" placeholder="Enter here" class="form-control ccField" rows="3"/>
                <br>
                <div id="cr">
                    <input type="button" name="add" onclick="insert4()" value="add"/>
            </div>
            </div> 
                <hr>
                <hr>
                <input type="button" name="generateCV" onclick="genCV()" value="generateCV"/>
        </form>
        <br>
    <div class="full">
    <div class="side">
        <div class="first">
            <p id="name">ATHARVA AMLE</p>
            <p>Phone:</p>
            <p id="phone"></p>
            <p>address:</p>
            <p id="address"></p>
            <p>email:</p>
            <p id="email"></p>
        </div>
        <div class="second">
            <p>SKILL</p>
            <ul id="skillist">
                <li>Your skills</li>
                <li>Your skills</li>
                <li>Your skills</li>
            </ul>
        </div>
        <div class="soft">
            <p>SOFTWARE</p>
            <ul id="softl">
                <li>software knowledge</li>
                <li>software knowledge</li>
                <li>software knowledge</li>
            </ul>
        </div>
        <div class="cer">
            <P>CERTIFICATION</P>
            <ul id="certl">
                <li>certification</li>
                <li>certification</li>
                <li>certification</li>
            </ul>
        </div>
        <div class="lnk">
            <p>FACEBOOK:</p>
            <p id="fcb"></p>
            <p>INSTAGRAM:</p>
            <p id="ist"></p>
            <p>LINKEDIN:</p>
            <p id="lkd"></p>
        </div>
    </div>
    <div class="main">
            <p id="intro">
                Highly motivated Sales Associate with extensive customer service and sales experience. Outgoing sales professional with track record of driving increased sales, improving buying experience and elevating company profile with target market.
              </p>
        <br>
        <hr>
        <span class="work">
         <p>WORK EXPERIENCE</p>
         <hr>
           <ul id="work">
               <li></li>
               <li></li>
           </ul>
        </span>
        <hr>
        <span class="edu">
            <p class="educ">EDUCATION</p>
            <hr>
            <ul id="education">
                <li></li>
                <li></li>
            </ul>
        </span>
        
</div>
</div>
<input type = "button" name="print" onclick="printCV()" value="print" id="print">
</body>
</html>
