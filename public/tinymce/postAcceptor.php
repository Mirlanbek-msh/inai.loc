<?php
  /*******************************************************
   * Only these origins will be allowed to upload images *
   ******************************************************/
  $accepted_origins = array("http://localhost:8000", "http://192.168.1.1", "https://beta.centr.asia", "https://centr.asia");

  /*********************************************
   * Change this line to set the upload folder *
   *********************************************/
  $imageFolder = "../uploads/posts/tinymce/";

  function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
}

  reset ($_FILES);
  $temp = current($_FILES);
  if (is_uploaded_file($temp['tmp_name'])){
    if (isset($_SERVER['HTTP_ORIGIN'])) {
      // same-origin requests won't set an origin. If the origin is set, it must be valid.
      if (in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)) {
        header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
      } else {
        header("HTTP/1.1 403 Origin Denied");
        return;
      }
    }

    /*
      If your script needs to receive cookies, set images_upload_credentials : true in
      the configuration and enable the following two headers.
    */
    // header('Access-Control-Allow-Credentials: true');
    // header('P3P: CP="There is no P3P policy."');
    
    $extension = strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION));
    
    // Verify extension
    if (!in_array($extension, array("gif", "jpg", "png"))) {
        header("HTTP/1.1 400 Invalid extension.");
        return;
    }
    
    $name = "img_". random_str(10) ."_".date('d-m-Y');

    // Accept upload if there was no origin, or if it is an accepted origin
    $filetowrite = $imageFolder . $name . '.'. $extension;
    move_uploaded_file($temp['tmp_name'], $filetowrite);

    $filetowrite = '/uploads/posts/tinymce/' . $name . '.'. $extension;

    // Respond to the successful upload with JSON.
    // Use a location key to specify the path to the saved image resource.
    // { location : '/your/uploaded/image/file'}
    echo json_encode(array('location' => $filetowrite));
  } else {
    // Notify editor that the upload failed
    header("HTTP/1.1 500 Server Error");
  }
?>
