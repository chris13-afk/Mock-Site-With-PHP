<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    include_once 'header.php';
    include_once 'signup.inc.php';
    ?>

    <div class="cover">
        <div class="heroImage">
          <div class="promo">
            
            <h1>Committed to</h1><br/><h1 class="blue">Qulity Education</h1>
            <h3>All of our courses and student support services have been created and designed around adult learning principals, engaging course designs, hands-on learning techniques.</h3>
          </div>
          <form action="includes/signup.inc.php" method="post">
              <p class="signUp">Sign Up Today!</p>

                                <!--erorr messages-->
              <?php
                  $url = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                  if(strpos($url,"emptyinput") == true){
                    echo '<p class="erorr"> Please fill in all fields</p>';
                  }
                    if(strpos($url,"invaliduid") == true){
                        echo '<p class="erorr"> Please fill in username</p>';
                    
                    }else if(strpos($url,"invalidEmail") == true ){
                        echo '<p class="erorr"> Please fill in email</p>';
                    
                    }else if(strpos($url,"passwordsdontmatch") == true){
                        echo '<p class="erorr">passwords do not match</p>';
                    
                    }else if(strpos($url,"usernametaken") == true){
                        echo '<p class="erorr"> username is taken</p>';
                    
                    }else if(strpos($url,"stmtfailed") == true){
                        echo '<p class="erorr">Something went worng, please try again</p>';
                    
                    }else if(strpos($url,"invalidUid") == true){
                        echo '<p class="erorr">Username can only contain letters and numbers</p>';
                    }
                     if(strpos($url,"none") == true){
                      echo '<p class="success">Sign Up Completed!</p>';
                    }else{
                      echo'<input class="type" type="text" name="name" placeholder="Full Name">
                      <input class="type" type="text" name="email" placeholder="Email">
                      <input class="type" type="text" name="uid" placeholder="Username">
                      <input class="type" type="password" name="pwd" placeholder="Password">
                      <input class="type" type="password" name="pwdrepeat" placeholder="Confirm Password">
                      <div class="remember">
                       <input type="checkbox" name="password" value="password"><p>Remember password</p>
                      </div>
                      <button  class="cta2" name="submit" type="submit" value="Request" role="button">Submit</button>
                      <a>Already have an account?</a>';
                    }
                  
                  ?>
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
</body>
</html>