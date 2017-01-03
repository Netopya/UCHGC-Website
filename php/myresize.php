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
    elseif ($this->height > $this->width)
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
            $dimensionsArray = $this->getSizeByFixedWidth($newWidth, $newHeight);
            $optimalWidth = $dimensionsArray['optimalWidth'];
            $optimalHeight = $dimensionsArray['optimalHeight'];
        } else if ($newHeight > $newWidth) {
            $dimensionsArray = $this->getSizeByFixedHeight($newWidth, $newHeight);
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



?>