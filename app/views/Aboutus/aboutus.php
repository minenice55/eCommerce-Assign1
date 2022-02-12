<?php require APPROOT . '/views/includes/header.php'; 
    // Devrin Aiden Tiongson, Theodore Tsimiklis 
?>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <img src="https://miro.medium.com/max/720/1*p8SGPFKYcbRWKfdj50wNxQ.png" width="170" height="70">
    <a class="nav-link" style="cursor: pointer;" onclick="location.href='Home'">Home</a>
    <a class="nav-link" style="cursor: pointer" onclick="location.href='Timeline'">Timeline</a>
    <a class="nav-link" style="cursor: pointer; color: hotpink;">About the project</a>
    <a class="nav-link" style="cursor: pointer" onclick="location.href='Contact'">Contact us</a>
  </div>
</nav>

<br>

<div class="accordion" id="aboutUsContent">
    <div class="accordion-item">
        <h2 class="accordion-header" id="firstFeature">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Feature #1
        </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="firstFeature" data-bs-parent="#aboutUsContent">
        <div class="accordion-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="secondFeature">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Feature #2
        </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="secondFeature" data-bs-parent="#aboutUsContent">
        <div class="accordion-body">
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="thirdFeature">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Feature #3
        </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="thirdFeature" data-bs-parent="#aboutUsContent">
        <div class="accordion-body">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>