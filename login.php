<?php
include_once 'header.php';
?>
<div class="cover">
        <div class="heroImage">
          <div class="promo">
            
            <h1>Committed to</h1><br/><h1 class="blue">Qulity Education</h1>
            <h3>All of our courses and student support services have been created and designed around adult learning principals, engaging course designs, hands-on learning techniques.</h3>
          </div>
          <form action="includes/login.inc.php" method="post">
              <?php
              //checking for login erorrs
              $url = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if(strpos($url,"emptyinput") == true){
                        echo '<p class="erorr"> Please fill in all fields</p>';

                    }else if(strpos($url,"wronglogin") == true){
                        echo '<p class="erorr">Password or username/email is wrong</p>';
                    
                    }
                
                ?>
             <input class="type" type="text" name="uid" placeholder="Username/Email">
             <input class="type" type="password" name="pwd" placeholder="Password">
             <div class="remember">
              <input type="checkbox" name="password" value="password"><p>Remember password</p>
             </div>
             <button  class="cta2" name="submit" type="submit" value="Request" role="button">Login</button>
            </form>
        </div>
     </div>
     <article>
        <h1>Welcome to Computer Coach!</h1>
        <p> Thank you for your interest and for taking the time to read about our training programs, classes and what sets us apart - our learning philosophy. Our guiding mission is "helping change lives for the better".</p>
     </article>
     <section class="one">
       <div class="path">
         <img src="img/diploma.png" >
           <h3 class="titlePath">Certification Courses</h3>
           <p class="textPath">Validate your experience & show employers you know the skills the way the certification vendors intended them to be used.</p>
           <button>Sign Up</button>
       </div>
       <div class="path">
         <img src="img/career.png" >
         <h3 class="titlePath">Career Training</h3>
         <p class="textPath">Let us help you launch your career in a successful and short-term fashion. Check out our career programs as an alternative to college.</p>
         <button>Sign Up</button>
       </div>
       <div class="path">
         <img src="img/online-education.png" >
         <h3 class="titlePath">Continuing Education</h3>
         <p class="textPath">Study after study shows life long learning leads to success & happiness. Let us help you achieve your goals in our short-term, hands-on classes.</p>
         <button>Sign Up</button>
       </div>
       
    </section>
    <section class="two">
      <div class="infoImg right">
          <img src="img/award-removebg-preview (1).png">
        </div>
        <div class="infoP">
         <h2 class="infoHH2">Award-winning programs</h2>
         <p class="infoPP">
          We received the 2019 and 2021 Academic Circle of Excellence Award by EC Council for our contributions to education in secure computing, network defense, ethical hacking, and CISO level leadership.<button>read more</button></p>
       </div>
      </section>

     <section class="three">     
        <div class="infoP">
         <h2 class="infoHH2">Why earn your technology degree with us?</h2>
         <p class="infoPP">
            From Information technology to Cybersecurity, we offer a wide range of degrees. Many of our programs align with industry certification exams being offered by leading organizations, such as the International Council of E-commerce Consultants.<button>read more</button></p>
       </div>
        <div class="infoImg left">
          <img src="img/edu-removebg-preview.png">
        </div>
      </section>
      <article>
        <h1>Career Training</h1>
        <p> Let us help you launch your career in a successful and short-term fashion. Check out our career programs as an alternative to college.</p>
     </article>

     <section class="four">

         <div class="infoImg right">
           <img src="img/big-computer.png">
         </div>
         
       <div class="infoP">
         <h2 class="infoHH2">Committed to Quality Education</h2>
         <p class="infoPP">
           All of our courses and student support services have been created and designed around adult learning principals, engaging course designs, hands-on learning techniques, and interactive support services designed to give you what you need to help you obtain the realistic career goals you set for yourself. Regardless if you are changing careers.<button>read more</button></p>
       </div>
     </div>

     </section>
    
<?php
include_once 'footer.php';
?>