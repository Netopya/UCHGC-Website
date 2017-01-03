<?php 

function autoResize($oldWidth, $oldHeight, $newWidth, $newHeight)
{
    if ($oldHeight < $oldWidth)
    {
        // *** Image to be resized is wider (landscape)
        $dimensionsArray = getSizeByFixedWidth($oldWidth, $oldHeight, $newWidth, $newHeight);
        $optimalWidth = $dimensionsArray['optimalWidth'];
        $optimalHeight = $dimensionsArray['optimalHeight'];
    }
    elseif ($oldHeight > $oldWidth)
    {
        // *** Image to be resized is taller (portrait)
        $dimensionsArray = $this->getSizeByFixedHeight($oldWidth, $oldHeight,$newWidth, $newHeight);
        $optimalWidth = $dimensionsArray['optimalWidth'];
        $optimalHeight = $dimensionsArray['optimalHeight'];
    }
    else
    {
        // *** Image to be resizerd is a square
        if ($newHeight < $newWidth) {
            $dimensionsArray = $this->getSizeByFixedWidth($oldWidth, $oldHeight, $newWidth, $newHeight);
            $optimalWidth = $dimensionsArray['optimalWidth'];
            $optimalHeight = $dimensionsArray['optimalHeight'];
        } else if ($newHeight > $newWidth) {
            $dimensionsArray = $this->getSizeByFixedHeight($oldWidth, $oldHeight, $newWidth, $newHeight);
            $optimalWidth = $dimensionsArray['optimalWidth'];
            $optimalHeight = $dimensionsArray['optimalHeight'];
        } else {
            // *** Square being resized to a square
            $optimalWidth = $newWidth;
            $optimalHeight= $newHeight;
        }
    }
    
    return array('optimalWidth' => $optimalWidth, 'optimalHeight' => $optimalHeight);
}

function getSizeByFixedWidth($oldWidth, $oldHeight, $newWidth, $newHeight)
{
    $ratio = $oldHeight / $oldWidth;
    $newHeight = $newWidth * $ratio;

    return array('optimalWidth' => $newWidth, 'optimalHeight' => $newHeight);
}

function getSizeByFixedHeight($oldWidth, $oldHeight, $newWidth, $newHeight)
{
    $ratio = $oldHeight / $oldWidth;
    $newWidth = $newHeight * $ratio;
    return array('optimalWidth' => $newWidth, 'optimalHeight' => $newHeight);
}

function resizeImage($originalImage, $outputImage, $quality, $desiredHeight, $desiredWidth)
{
    // jpg, png, gif or bmp?
    $exploded = explode('.',$originalImage);
    $ext = $exploded[count($exploded) - 1]; 

    if (preg_match('/jpg|jpeg/i',$ext))
        $imageTmp=imagecreatefromjpeg($originalImage);
    else if (preg_match('/png/i',$ext))
        $imageTmp=imagecreatefrompng($originalImage);
    else if (preg_match('/gif/i',$ext))
        $imageTmp=imagecreatefromgif($originalImage);
    else if (preg_match('/bmp/i',$ext))
        $imageTmp=imagecreatefrombmp($originalImage);
    else
        return 0;

    $x = getimagesize($originalImage);            
    $width  = $x['0'];
    $height = $x['1'];
    $optimalDimensions = autoResize($width, $height, $desiredWidth, $desiredHeight);
    $rs_width = $optimalDimensions['optimalWidth'];
    $rs_height = $optimalDimensions['optimalHeight'];
    
    $img_base = imagecreatetruecolor($rs_width, $rs_height);
    imagecopyresized($img_base, $imageTmp, 0, 0, 0, 0, $rs_width, $rs_height, $width, $height);

    // quality is a value from 0 (worst) to 100 (best)
    imagejpeg($img_base, $outputImage, $quality);
    imagedestroy($imageTmp);

    return 1;
}

?>