
<div class='contentWrapper'>
	<p class='contentWritten'>
        Pictures are <b>fun</b>!
		This is where your pictures go.
	   To use this properly you should give the photos to me so I can make sure they are upright and 
       an appropriate size, but all you have to do is CHOOSE the file and then upload it. 
       Make sure it is appropriate, because if I don't like it I will delete it!
    </p>
<br>

<form action="../scripts/UPLOAD.php" id="uploadForm" method="post" enctype="multipart/form-data">
    upload image here!    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php

$files = glob("../images/*.*");

for ($i=0; $i<count($files); $i++)
{

$image = $files[$i];
$supported_file = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);
$unsupported_file = array(
    '../images/loading.gif',
    '../images/prev.png',
    '../images/next.png',
    '../images/close.png'
    );

$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
if (in_array($ext, $supported_file)) {
    
if (!(in_array($image, $unsupported_file)))
{
    echo '<a href="'. $image . '" data-lightbox="cool"><img id="image' . $i . '" src="'.$image .'" alt="Random image" height="225" width="225" /></a>';
}

} else {
    continue;
 }

}

?>

</div>