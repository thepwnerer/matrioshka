
<div class='contentWrapper'>
	<p class='contentWritten'>
		This is where your pictures go, brother. Here you are and this is why they are a good time. I want all y'all to have an okay time with this.
	</p>
<br>

<form action="../scripts/UPLOAD.php" id="uploadForm" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
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