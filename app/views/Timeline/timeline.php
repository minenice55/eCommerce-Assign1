<?php require APPROOT . '/views/includes/header.php'; 
  // Devrin Aiden Tiongson, 
?>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <img src="https://miro.medium.com/max/720/1*p8SGPFKYcbRWKfdj50wNxQ.png" alt="Italian Trulli" width="170" height="70">
    <a class="nav-link" style="cursor: pointer;" onclick="location.href='Home'">Home</a>
    <a class="nav-link" style="cursor: pointer; color: hotpink;">Timeline</a>
    <a class="nav-link" style="cursor: pointer;" onclick="location.href='Aboutus'">About the project</a>  
    <a class="nav-link" style="cursor: pointer" onclick="location.href='Contact'">Contact us</a>
  </div>
</nav>

<br><br>
<table class="table">
  <thead>

    <tr>
      <th style="width: 150px;">Student Name</th>
      <th style="width: 150px;">Student ID</th>
      <th style="width: 150px;">Task</th>
      <th style="width: 200px;">Timeline</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>John</td>
      <td>123456</td>
      <td>Front-end Programming</td>
      <td>2 weeks</td>
    </tr>
    <tr>
      <td>Mary</td>
      <td>223456</td>
      <td>PHP Routing</td>
      <td>1 week</td>
    </tr>
    <tr>
      <td>July</td>
      <td>323456</td>
      <td>PHP MVC Application</td>
      <td>2 weeks</td>
    </tr>
  </tbody>
</table>

<?php require APPROOT . '/views/includes/footer.php'; ?>