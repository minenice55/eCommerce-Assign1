<?php require APPROOT . '/views/includes/header.php'; 
  // Devrin Aiden Tiongson, Theodore Tsimiklis
?>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <img src="https://miro.medium.com/max/720/1*p8SGPFKYcbRWKfdj50wNxQ.png" width="170" height="70">
    <a class="nav-link" style="cursor: pointer; color: hotpink;">Home</a>
    <a class="nav-link" style="cursor: pointer" onclick="location.href='Timeline'">Timeline</a>
    <a class="nav-link" style="cursor: pointer;" onclick="location.href='Aboutus'">About the project</a>
    <a class="nav-link" style="cursor: pointer" onclick="location.href='Contact'">Contact us</a>
  </div>
</nav>

<br>

    <h1 id="h1" style = "position:relative; right:70px;">Final Project (LIA): 420-411-VA</h1>
    <h2 id="h2" style = "position:relative; right:55px;">This Project is a PHP ECommmerce Web App</h2><br>

    <button type="button" class="btn btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#homeContent" aria-expanded="false" aria-controls="homeContent">Learn More</button>
    <div class="collapse" id="homeContent">
      <h3 id="h3" style = "position:relative; right:55px;">Project Proposal</h3>
      <p id="p1">A project proposal is a written document outlining everything stakeholders should know about a project, including the timeline, budget, objectives, and goals. 
                Your project proposal should summarize your project details and sell your idea, so stakeholders buy in to the initiative. For this specific project the stakeholders
              are your teacher and your team and the timeline is outlined below in the grading scheme. You have to define your budgeted work hours, as well as objectives and goals.
              In teams of 2 you will write a MarkDown document stored in your GitHub repository with the following contents. </p>
      <ul>
          <li style="margin-bottom: 0 0 15px 0;">Name of your team</li>
          <li>Name of the team members</li>
          <li>A description of the clientele, the general goal of the projectm and a list of all the features that will be supported by your final Web application. For each student
            in the team, there must be a total of 10 new features written. A new feature excludes the features that were completely coded in class with your teacher.
          </li>
          <li>An estimate of the number of hours you will spend implementing this Web app</li>
      </ul>
    </div>
<?php require APPROOT . '/views/includes/footer.php'; ?>