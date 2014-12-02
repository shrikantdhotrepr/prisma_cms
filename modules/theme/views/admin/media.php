<?php 
echo tag( 'meta' , array('charset' => 'UTF-8') , null , FALSE);

echo tag( 'meta' , array('content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' , 'name' => 'viewport' ) , null , FALSE);

echo head_title( ADMIN );

echo html_comment('HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries');

echo html_comment( "WARNING: Respond.js doesn't work if you view the page via file://");

$scripts = scripts( null , 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js' , TRUE);

$scripts .= scripts( null , 'https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js' , TRUE);

echo html_comment_if( 'if lt IE 9' , $scripts );

$files = array(
    'bootstrap.min.css',
    'font-awesome.min.css',
    'ionicons.min.css',
    'AdminLTE.css',
);
echo stylesheets($asset_path . 'css', $files);

$files = array(
    'jquery.min.js',
    'jquery-ui-1.10.3.min.js',
    'bootstrap.min.js',
//    'plugins/sparkline/jquery.sparkline.min.js',
//    'plugins/jqueryKnob/jquery.knob.js',
    'plugins/iCheck/icheck.min.js',
    'AdminLTE/app.js', /* 'AdminLTE/dashboard.js', */
//    'plugins/morris/morris.min.js',
    );

echo scripts($asset_path . 'js', $files );

?>
<script>
    var BASE_URL = "<?php echo web('admin'); ?>";
</script>