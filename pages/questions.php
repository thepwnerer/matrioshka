<?php
  if($_SESSION['verified'] != 'yes')
  {
    header('Location: http://localhost/testPHPProject/pages/logIn.php?hack=yes');
  }
  if($_SESSION['user'] == 'user')
  {
    echo '<style type="text/css">
        .admin {
            display: none;
        }
        </style>';
  }
  elseif($_SESSION['user'] == 'admin')
  {

  }

?>
<div class='contentWrapper'>
  <p class='contentWritten'>	
  	Here are all the questions. Go crazy, my friends. I know you all have strong desires for knowledge sitting in your little heads!
 </p>
  <p class="center">If you want to post a question, It is as simple as <a href='layout.php?content=create'>asking!</a>
  	<?php
  	questionDB::getQuestions($mysqli);
  	?>
</div>


