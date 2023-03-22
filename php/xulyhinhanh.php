<?php
    if(!isset($_POST['request']) && !isset($_GET['request'])) die(null);
 

    switch ($_POST['request']) {
    	// lấy tất cả hình ảnh banners
    	case 'getallbanners':
				$directory = "../img/banners";
                // lấy file ảnh định dạng png hoặc gif
                $images = glob($directory . "/*.{png,gif}", GLOB_BRACE); 
                die (json_encode($images));
    		break;

        case 'getsmallbanner':
                $directory = "../img/smallBanners";
                $images = glob($directory . "/*.{gif}", GLOB_BRACE); 
                die (json_encode($images));
            break;
    	
    	default:
    		# code...
    		break;
    }
?>