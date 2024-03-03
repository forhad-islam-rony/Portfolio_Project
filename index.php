<?php
 include 'include/config.php' ;

$sql = "SELECT * FROM `user` WHERE `user`.`id` = 1";
$result = mysqli_query($con, $sql);
 $data = mysqli_fetch_assoc($result);
 $sql1 = "SELECT * FROM `personal_informatioon` WHERE `personal_informatioon`.`id` = 1";
$result1 = mysqli_query($con, $sql1);
 $data1 = mysqli_fetch_assoc($result1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- .........Style-Switcher......... -->
    <link rel="stylesheet" href="color-1.css" class="alternate-style" title="color-1" >
    <link rel="stylesheet" href="color-2.css" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="color-3.css" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="color-4.css" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="color-5.css" class="alternate-style" title="color-5" disabled>
    <link rel="stylesheet" href="style-switcher.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link  href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <title>Forhad Islam Rony</title>
</head>

<body>
    <div class="homepage" id="homepage">
        <div class="header">
            <div class="navbar">
                <div class="logo">
                    Portfolio
                </div>
                <ul class="navlist" id="navlist">
                    <li><a href="#homepage" class="active">HOME</a></li>
                    <li><a href="#secondpage">ABOUT</a></li>
                    <li><a href="#thirdpage">SERVICES</a></li>
                    <li><a href="#project">Projects</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
                <div class="hamburger">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
            <div class="dropdown-menu">
                <li><a href="#homepage" class="active">HOME</a></li>
                <li><a href="#secondpage">ABOUT</a></li>
                <li><a href="#thirdpage">SERVICES</a></li>
                <li><a href="#project">Projects</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </div>
        </div>
        <div class="main">
            <div class="left">
                <div class="icons">
                    <a href="<?php echo $data['facebook']?>" target="_blank" class="icons">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="<?php echo $data['github']?>" target="_blank" class="icons">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    
                    <a href="<?php echo $data['instagram']?>" target="_blank" class="icons">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="<?php echo $data['linkediin']?>" target="_blank" class="icons">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="<?php echo $data['whatsapp']?>" target="_blank" class="icons">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            <div class="middle">
                <div class="contents about-intro">
                    <h5><span class="emoji">&#128075;</span> Hello!</h5>
                            <h1 class="name"><div class="s1">I'm</div><div class="s2"><?php echo $data['name']?></div></h1>
                            <h4 class="intro"><div class="s3">And I'm a </div><div class="typing"></div></h4>
                            <p class="details"><?php echo $data['details']?></p>
                            <div class="buton">
                                <a href="My_Resume.pdf" Download>
                                <button class="button-89">Download CV</button>
                                </a>
                            </div>
                       </div>
            </div>
            <div class="right">
            </div>
        </div>
    </div>

    <div class="secondpage" id="secondpage">
     <div class="upper">
        <div class="left">
                <div class="img"></div>
        </div>
        <div class="right">
            <div class="section-title">
                <h2>About Me</h2>
            </div>
            <div class="about-text">
                <p>Hello, This is Rony. A passionate web developer. I have strong knowledge of frontend development and have basic knowledge of the <span id="markable">backend like RESTful API</span>. I really enjoy learning new technologies. I have solved several web application problems with <span id="markable">Reactjs, Expressjs, and MongoDB</span>.I am well-versed in front-end technologies like <span id="markable">HTML5, CSS3,</span> and <span id="markable">JavaScript,</span> and have hands-on experience with popular libraries and frameworks such as <span id="markable">Bootstrap</span> and <span id="markable">Tailwind CSS.</span></p>
                <br/>
                <p>Throughout my career, I have demonstrated a keen eye for detail, <span id="markable">problem-solving abilities</span> , and a commitment to delivering <span id="markable">high-quality code.</span> I enjoy working in a collaborative environment, where I can contribute my skills and learn from experienced professionals.</p>
             <br/>
             <p>Thank you for giving me some valuable time.</p>
             </div>
        </div>
     </div>
     <div class="lower">
            <div class="left">
                <div class="title">
                    <h2>Personal Information</h2>
                </div>
                <div class="info-item">
                    <p>Birthday : <span><?php echo $data1['birthday']?></span></p>
                </div>
                <div class="info-item">
                    <p>Age : <span><?php echo $data1['age']?></span></p>
                </div>
                <div class="info-item">
                    <p>Gender : <span><?php echo $data1['gender']?></span></p>
                </div>
                
                <div class="info-item email">
                    <p>Email : <span><?php echo $data1['email']?></span></p>
                </div>
                <div class="info-item">
                    <p>Degree : <span><?php echo $data1['degree']?></span></p>
                </div>
                <div class="info-item phone">
                    <p>Phone : <span><?php echo $data1['phone']?></span></p>
                </div>
                <div class="info-item">
                    <p>City : <span><?php echo $data1['city']?></span></p>
                </div>
                <div class="info-item">
                    <p>Country : <span><?php echo $data1['country']?></span></p>
                </div>
            </div>
            <div class="right">
                <div class="qulification-title">
                    <h2>Qualification</h2>
                </div>
                   <div class="tab-titles">
                    <div class="tablink active" type="title" data-id="education">Education</div>
                    <div class="tablink" type="title" data-id="skills">Skills</div>
                   </div>
  
                   <div class="tab-content active" id="education">
                    <?php
                   $sql = "SELECT course, institution, start_year, end_year FROM education ORDER BY start_year DESC";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $years = $row["start_year"] . "-" . ($row["end_year"] ? $row["end_year"] : "Present");
        echo '<div class="qulification-content">
                <h4 class="course">' . htmlspecialchars($row["course"]) . '</h4>
                <h6 class="institution">' . htmlspecialchars($row["institution"]) . '</h6>
                <span class="years">' . htmlspecialchars($years) . '</span>
              </div>';
    }
} else {
    echo "0 results";
}
?>
                   </div>

                   <div class="tab-content" id="skills">
                   <?php

$sql2 = "SELECT skill_name, percentage FROM skills ORDER BY id ASC";
 $result = mysqli_query($con, $sql2);

 if (mysqli_num_rows($result) > 0) {
while ($skill = mysqli_fetch_assoc($result)) {
   echo '<div class="s-content">
 <div class="s-heading">
     <div class="s-title">
         <h5>' . htmlspecialchars($skill['skill_name']) . '</h5>
     </div>
     <div class="s-percentage">' . htmlspecialchars($skill['percentage']) . '%</div>
 </div>
 <div class="s-progress">
     <div class="progress-bar" style="width: ' . htmlspecialchars($skill['percentage']) . '%;"></div>
 </div>
</div>';
}
} else {
 echo "No skills found.";
  }
?>


                   </div>

     </div>
    </div>


    <!-- ................Third Page........... -->
  <div class="thirdpage" id="thirdpage">
    <div class="separated"></div>
    <div class="title">
        <h3>What I do ?</h3>
    </div><br/><br/><br/>
    <?php 

// Fetch services from the database
$query = "SELECT * FROM services";
$result = mysqli_query($con, $query);
?>

<div class="row">
    <?php if ($result->num_rows > 0): ?>
        <?php while ($service = $result->fetch_assoc()): ?>
            <div class="col">
                <div class="box1">
                    <i class="icon <?= htmlspecialchars($service['icon']); ?>"></i>
                    <div class="content">
                        <br/>
                        <h5><?= htmlspecialchars($service['title']); ?></h5>
                        <p><?= htmlspecialchars($service['description']); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No services found.</p>
    <?php endif; ?>
</div>


    </div>
    <div class="separated"></div>
  </div>
  </div>






<!-- ...........Project Section.............. -->
<div class="project" id="project">
    <div class="project-title"><h2>My Projects</h2></div>
    <div class="project-row row1">
        <div class="project1 project-left">
            <a href="https://github.com/forhad-islam-rony/E-Commerce" target="_blank">
                <div class="p-img">
                    <img src="ecommerce3.jpg" alt="">
                   </div>
                   <div class="p-details">
                       <div class="content">
                          <div class="heading">
                           <h2>E-commerce Application</h2>
                          </div>
                          <div class="p-list">
                           <ul style="list-style: circle;">
                               <li>Java</li>
                               <li>Android Framework</li>
                           </ul>
                           <ul style="list-style: circle;">
                               <li>(UI) Design</li>
                               <li>Firebase</li>
                           </ul>
                          </div>
                       </div>
                       <div class="icon">
                           <i class="fa-brands fa-github"></i>
                           <i class="fa-solid fa-eye"></i>
                       </div>
                   </div>
            </a>
           
        </div>
        <div class="project1 project-right">
            <div class="p-img">
             <img src="tutoring.jpg" alt="">
            </div>
            <div class="p-details">
                <div class="content">
                   <div class="heading">
                    <h2>Online Tutoring Platform</h2>
                   </div>
                   <div class="p-list">
                    <ul style="list-style: circle;">
                        <li>Oracle Database</li>
                        <li>SQL</li>
                    </ul>
                    <ul style="list-style: circle;">
                        <li>Python</li>
                        <li>Data Modeling</li>
                    </ul>
                   </div>
                </div>
                <div class="icon">
                    <i class="fa-brands fa-github"></i>
                    <i class="fa-solid fa-eye"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="project-row row2">
        <div class="project1 project-left">
            <a href="https://github.com/forhad-islam-rony/Security_System" target="_blank">
                <div class="p-img">
                    <img src="security.png" alt="">
                   </div>
                   <div class="p-details">
                       <div class="content">
                          <div class="heading">
                           <h2>Security System</h2>
                          </div>
                          <div class="p-list">
                           <ul style="list-style: circle;">
                               <li>C++</li>
                               <li>Console User Interface</li>
                           </ul>
                           <ul style="list-style: circle;">
                               <li>Password Encryption</li>
                               <li>File Operation</li>
                           </ul>
                          </div>
                       </div>
                       <div class="icon">
                           <i class="fa-brands fa-github"></i>
                           <i class="fa-solid fa-eye"></i>
                       </div>
                   </div>
            </a>
           
        </div>
        <div class="project1 project-right">
            <div class="p-img">
             <img src="website.png" alt="">
            </div>
            <div class="p-details">
                <div class="content">
                   <div class="heading">
                    <h2>Minimatic Solutions</h2>
                   </div>
                   <div class="p-list">
                    <ul style="list-style: circle;">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                    </ul>
                    <ul style="list-style: circle;">
                        <li>Laravel</li>
                        <li>Bootstrap</li>
                    </ul>
                   </div>
                </div>
                <div class="icon">
                    <i class="fa-brands fa-github"></i>
                    <i class="fa-solid fa-eye"></i>
                </div>
            </div>
        </div>
    </div>
  </div>



        
   <div class="contact" id="contact">
    <div class="nothing"></div>
    <div class="contact_container">
        <div class="contact_data">
          <h2 class="section_title">
            <span>Contact Me.</span>
          </h2>
          <p class="contact_description1">
            I will read all emails. Send me any
            message you want and I'll get back to you.
          </p>
          <p class="contact_description2">
            I need your <b>Name</b> and <b>Email Address</b>, but you won't receive anything other than your reply.
          </p>

               <div class="contact_social_link">
                   <a href="#" target="_blank" class="soical_link">
                    <i class="ri-mail-send-line"></i><span> forhadrony161@gmail.com</spna>
                   </a>
                   <a href="#" target="_blank" class="soical_link">
                    <i class="ri-phone-fill"></i> 01783226830
                   </a>
               </div>
        </div>
        <div class="contact_mail">
            <h2 class="contact_title">
                Send Me A Message
            </h2>
            <form action="contact.php" class="contact_form" method = "POST">
                <div class="contact_group">
                    <div class="contact_box">
                        <input type="text" name="user_name" class="contact_input" id="name" required placeholder="First Name">
                        <label for="name" class="contact_label">First Name</label>
                    </div>

                    <div class="contact_box">
                        <input type="email" name="user_email" class="contact_input" id="email" required placeholder="Email Address">
                        <label for="email" class="contact_label">Email Address</label>
                    </div>
                </div>

                <div class="contact_box">
                    <input type="text" name="user_subject" class="contact_input" id="subject" required placeholder="Subject">
                    <label for="subject" class="contact_label">Subject</label>
                </div>

                <div class="contact_box contact_area">
                    <textarea name="user_nessage" id="message"class="contact_input" required placeholder="Message"></textarea>
                    <label for="message" class="contact_label">Message</label>
                </div>

                <button type="submit" class="button-85">
                    <i class="ri-send-plane-line"></i> Send Message
                </button> 
            </form>
        </div>
        <!-- <div class="contact_social">
             <img src="arrow.jpg" alt="" class="social_arrow">
             <div class="contact_social_data">
                <div>
                    <p class="contact_social_discription1">
                        Does not send emails
                    </p>
                    <p class="contact_social_discription1">
                        Write me on my social networks
                    </p>
                </div>

                <div class="contact_social_link">
                    <a href="#" target="_blank" class="soical_link">
                        <i class="ri-facebook-circle-line"></i>
                    </a>
                    <a href="#" target="_blank" class="soical_link">
                        <i class="ri-instagram-line"></i>
                    </a>
                    <a href="#" target="_blank" class="soical_link">
                        <i class="ri-linkedin-box-line"></i>
                    </a>
                </div>
             </div> -->
        <!-- </div> -->
    </div>
   </div>
<!-- 
    <div class="copyright">
        <div class="name">
            <h3>Designed & Built by <span>Forhad Islam Rony</span></h3>
        </div>
    </div> -->
 <div class="style-switchers">
    <div class="style-switcher-toggler s-icon">
        <i class="fas fa-cog fa-spin"></i>
    </div>
    <div class="day-night s-icon">
        <i class="fa-solid "></i>
    </div>
    <h4>Theme Colors</h4>
    <div class="colors">
        <span class="color-1" onclick="setActiveStyle('color-1')"></span>
        <span class="color-2" onclick="setActiveStyle('color-2')"></span>
        <span class="color-3" onclick="setActiveStyle('color-3')"></span>
        <span class="color-4" onclick="setActiveStyle('color-4')"></span>
        <span class="color-5" onclick="setActiveStyle('color-5')"></span>
    </div>
 </div>

 <a href="#" class="scrollTop">
    <i class="fa-solid fa-angles-up"></i>
   </a>

  
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="javascript.js"></script>
    <script src="style-switcher.js"></script>
</body>
</html>