<?php
  if($_SESSION['user'] == 'user')
  {
    echo '<style type="text/css">
        .admin {
            display: none;
        }
        </style>';
  }
  // elseif($_SESSION['user'] == 'admin')
  // {

  // }

?>
<div class='contentWrapper'>
  <p class='contentWritten'>	
  	Here are all the questions. Go crazy, my friends. I know you all have strong desires for knowledge sitting in your little heads! <br>
    Please take note that the questions are in the <span class="lightBlue">light blue boxes</span> while the answers are in the <span class="yellow">yellow boxes</span>.
 </p>
  <p class="center">If you want to post a question, It is as simple as <a href='layout.php?content=create'>asking!</a>
  	<?php
  	questionDB::getQuestions($mysqli);
  	?>
</div>


