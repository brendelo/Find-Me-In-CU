<?php
    require '../connection.php';
    session_start();
    // $current_user=$_SESSION['user_username'];
    if($_POST){
        $q=$_POST['searchword'];
        $sql_res=mysqli_query($conn,"select * from findmeincu where first_name like '%$q%' or last_name like '%$q%' or title like '%$q%' order by id LIMIT 10");
        //$result=  mysql_query($sql_res) or die(mysql_errno());
        $trws= mysqli_num_rows($sql_res);
        if($trws>0){
            while($row=mysqli_fetch_array($sql_res)){
            $title=$row['title'];
            $fname=$row['first_name'];
            $lname=$row['last_name'];
            $user_username=$row['title'];
            $re_title='<b>'.$q.'</b>';
            $re_fname='<b>'.$q.'</b>';
            $re_lname='<b>'.$q.'</b>';
            $final_title = str_ireplace($q, $re_title, $title);
            $final_fname = str_ireplace($q, $re_fname, $fname);
            $final_lname = str_ireplace($q, $re_lname, $lname);
?>  
<a href="Profile.php?title=<?php echo $title ?>&&firstname=<?php echo $fname ?>&&lastname=<?php echo $lname ?>">    
    <div class="display_box" align="left">
        <i class="fa fa-user"></i>
<?php echo $final_title; ?>&nbsp;<?php echo $final_fname; ?>&nbsp;<?php echo $final_lname; ?>    
    </div>    
</a>
<?php
            }
        }
        else{
?>        
<div class="display_box" align="left" style="color:black;">    
<?php echo "No results to show"; ?>
</div>
<?php   
        }
    }
    else{
    }
?>