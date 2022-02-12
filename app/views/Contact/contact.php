<?php require APPROOT . '/views/includes/header.php'; 
    // Devrin Aiden Tiongson, Theodore Tsimiklis
?>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <img src="https://miro.medium.com/max/720/1*p8SGPFKYcbRWKfdj50wNxQ.png" width="170" height="70">
    <a class="nav-link" style="cursor: pointer;" onclick="location.href='Home'">Home</a>
    <a class="nav-link" style="cursor: pointer" onclick="location.href='Timeline'">Timeline</a>
    <a class="nav-link" style="cursor: pointer" onclick="location.href='Aboutus'">About the project</a>
    <a class="nav-link" style="cursor: pointer, color: hotpink;">Contact us</a>
  </div>
</nav>

<br>

<div class="container">
    <form action="#">
        <input type="text" class="form-control" id="fname" name="firstname" placeholder="">
        <label for="fname" class="form-label">Your Name</label>

        <input type="email" class="form-control" id="mail" name="email" placeholder="">
        <label for="mail" class="form-label">Your Email</label>

        <input type="text" class="form-control" id="subj" name="subject" placeholder="">
        <label for="subj" class="form-label">Subject</label>

        <textarea id="msg" class="form-control" name="message" placeholder="Write something.." style="height:200px"></textarea>
        <label for="msg" class="form-label">Your Message</label>

        <input type="submit" class="btn btn-primary mb-3" value="Submit">

    </form>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>