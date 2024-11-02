

<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href = "css/style.css" rel="stylesheet">
  <title>Soki Webdevelopment gallery</title>
</head>
<body>
  <div id="wrapper">
    <header>
      <img src="img/profile.png" alt="soki's profile logo">
      <nav>
        <ul>
          <li><a href=index.html>Home</a></li>
          <li><a href=aboutme.html>About me</a></li>
          <li><a href=work.html>Work</a></li>
          <li><a href=contact.html>Contact</a></li>
          
        </ul>
      </nav>
      
    </header>

  <main>

    <form action="contacts/mail.php" method="POST">
  
    <div class="name_mail">
      <div class="space">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
      </div>
      <div class="space">
        <label for="email">Your Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>

        <!-- Email -->
      
    </div>
    

        <!-- Subject -->
        <div class="space">
          <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" placeholder="Subject of your message" required>
        </div>
        

        <!-- Message -->
        <div class="space">
          <label for="message">Message</label>
        <textarea id="message" name="message" rows="7" placeholder="Write your message" required></textarea>
        </div>
        

        <!-- Type of Project -->
        <div class="project_budget">
          <div class="space">
            <label for="project-type">What is your Project</label>
            <select id="project-type" name="project_type" required>
                <option value="website-development">Website Development</option>
                <option value="SEO">SEO</option>
                <option value="website-redesign">Website Redesign</option>
                <option value="other">Other</option>
            </select>
          </div>
          <div class="space">
            <label for="budget">Budget Range</label>
            <select id="budget" name="budget" required>
                <option value="less-than-500">$500 or less</option>
                <option value="500-1000">$500 - $1,000</option>
                <option value="1000-5000">$1,000 - $5,000</option>
                <option value="more-than-5000">More than $5,000</option>
            </select>
          </div>
        </div>
        
       

        

        <!-- Deadline -->
        <div class="space">
        <label for="deadline">Desired Deadline</label>
        <input type="date" id="deadline" name="deadline">
        </div>
        

        <!-- Privacy Policy -->
        <div class="checkbox">
            <input type="checkbox" id="privacy-policy" name="privacy_policy" required>
            <label for="privacy-policy">I agree to the privacy policy</label>
        </div>

        <!-- Submit Button -->

        <div class="submit">
          <button type="submit" name="submit">Submit</button>
        </div>
        
      
    </form>
  </main>
  <footer>
    <ul>
  
      <li>
        <a href="https://www.facebook.com/profile.php?id=100035585494952">
          
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50">
            <path fill="currentColor" d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"></path>
        </svg>
        </a>
      </li>
  
      <li>
        <a href="https://www.linkedin.com/in/soki-iwae-0031652b3/">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50">
            <path fill="currentColor" d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M37,19h-2c-2.14,0-3,0.5-3,2 v3h5l-1,5h-4v15h-5V29h-4v-5h4v-3c0-4,2-7,6-7c2.9,0,4,1,4,1V19z"></path>
        </svg>
          
        </a>
      
      </li>
       
    </ul>
     
  </footer>
  