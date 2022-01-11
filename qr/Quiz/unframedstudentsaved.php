<?php

if (isset($_POST['final'])){

    echo "No. of Questions:".$_POST['squesno'];
    echo "<br><br>";
    $qz=$_POST['squiznameforsave'];
    $quesno=$_POST['squesno'];
    $sname=$_POST['sname'];
    $semail=$_POST['semail'];
    $sroll=$_POST['sroll'];
    echo "Quiz Name:$qz<br>";
    echo "Name:$sname<br>";
    echo "Email:$semail<br>";
    echo "Roll:$sroll<br><br>";

    $tmarks=0;
    $marks=0;

    $server_name="localhost";
    $username="root";
    $password="Sarvesh@Anand@Mankar";
    $database_name="db1";

    $conn=mysqli_connect($server_name,$username,$password,$database_name);

    $sql_query = "SELECT done from student where quizname='$qz' and email=\"$semail\"";
    $records = mysqli_query($conn,$sql_query);
    while($data = mysqli_fetch_array($records)){
        $status=$data['done'];
    }

    if ($status="no"){
        for ($i=0;$i<$quesno;$i++){
            $w="text".$i;
            $w1="radio".$i;
            $ques=$_POST[$w];
    
            $w11="opt".$i."1";
            $w12="opt".$i."2";
            $w13="opt".$i."3";
            $w14="opt".$i."4";
            
            $opt1=$_POST[$w11];
            $opt2=$_POST[$w12];
            $opt3=$_POST[$w13];
            $opt4=$_POST[$w14];
    
            if (isset($_POST[$w1])){
                $ans=$_POST[$w1];
            }
            else{
                $ans=' ';
            }
            
            $sql_query = "SELECT ans from questions where quizname='$qz' and question='$ques' and opt1='$opt1' and opt2='$opt2' and opt3='$opt3' and opt4='$opt4'";
            $records = mysqli_query($conn,$sql_query);
            while($data = mysqli_fetch_array($records)){
                $ca=$data['ans'];
                echo "here---------------->".$ca;
            }
    
            echo "Question:".$ques;
            echo "<br>";
            echo "Opt1:".$opt1;
            echo "<br>";
            echo "Opt2:".$opt2;
            echo "<br>";
            echo "Opt3:".$opt3;
            echo "<br>";
            echo "Opt4:".$opt4;
            echo "<br>";
            echo "Answer given:".$ans;
            echo "<br>";
            echo "Correct Answer:".$ca;
            echo "<br>";
    
            $tmarks+=1;
            if ($ca==$ans){
                $marks+=1;
                $cw="correct";
                echo "<h4>Correct!</h4>";
            }
            else{
                $cw="wrong";
                echo "<h4>Wrong!</h4>";
            }
    
            echo "<hr>";
            $sql_query = "INSERT INTO submission (rollno,email,quizname,ques,opt1,opt2,opt3,opt4,cans,gans,cw)
            VALUES ('$sroll','$semail','$qz','$ques','$opt1','$opt2','$opt3','$opt4','$ca','$ans','$cw')";
            mysqli_query($conn, $sql_query);
        }
    }
    echo "<h3>";
    echo "Scored=".$marks."/".$tmarks;
    echo "</h3>";



    $sql_query = "UPDATE student SET done='yes',marks=$marks WHERE email='$semail' and roll='$sroll' and quizname='$qz'";
    mysqli_query($conn, $sql_query);

    mysqli_close($conn);
}

?>