<?php
session_start();
if(!isset($_SESSION["login_user"]))
{
    header("location:mainPage.php");
}
require_once 'connectionDatabase.php';
$answers=array(9);
$very_Easy=1;
$easy=3;
$medium=5;
$difficult=7;
$very_difficult=9;
$quest_Length;

if(isset($_POST['Category']))
{

    $_SESSION['myVariable'] = 0;
    $random=rand(1,10);
    echo $random;
    $query="SELECT * from questiontable WHERE id=$random and Category='".$_POST['examCategory']."'";
    $result=$connect->query($query);
    if(!$result)
    {
        echo "Failed";
    }

    $row = mysqli_fetch_array($result);

    if(isset($_SESSION['answer_Array']))
    {
        $_SESSION['answer_Array'] = $_SESSION['answer_Array'] + 1;
    }
    else
    {
        $_SESSION['answer_Array']=1;
    }

    if(isset($_SESSION['quest_Length']))
    {
        $_SESSION['quest_Length'] = $_SESSION['quest_Length'] + 1;
    }
    else
    {
        $_SESSION['quest_Length']=1;
    }

    if(isset($_SESSION['counter']))
    {
        $_SESSION['counter'] = $_SESSION['counter'] + 1;


    }
    else
    {
        if($row[9]=="Very Easy")
        {
            $_SESSION['counter']=1;
            echo  " very easy";
            echo $_SESSION['counter'];
        }
        elseif($row[9]=="Easy")
        {
            $_SESSION['counter']=3;
            echo  "easy";
            echo $_SESSION['counter'];
        }
        elseif($row[9]=="Moderate")
        {
            $_SESSION['counter']=5;
            echo  "moderate";
            echo $_SESSION['counter'];
        }
        else
            echo "There is nothing";
    }
}
if(isset($_POST['correctOption']))
{
    $query="SELECT * from questiontable WHERE id='".$_POST['id']."' ";
    $result=$connect->query($query);
    $row = mysqli_fetch_array($result);
    $correctOption=$_POST['correctOption1'];
    $quest_Length=$_SESSION['quest_Length'];

    if($quest_Length>=10)
    {
        header('location: ./studentAccount.php');
    }


    if(isset($_SESSION['quest_Length']))
    {
        $_SESSION['quest_Length'] = $_SESSION['quest_Length'] + 1;
        echo $_SESSION['quest_Length'];
    }
    else
    {
        $_SESSION['quest_Length']=1;
    }


    if($correctOption==$row[8])
    {
        if(isset($_SESSION['answer_Array']))
        {
            $_SESSION['answer_Array'] = $_SESSION['answer_Array'] + 1;
        }
        else
        {
            $_SESSION['answer_Array']=1;
        }

        if(isset($_SESSION['counter']))
        {
            $_SESSION['counter'] = $_SESSION['counter'] + 1;
            echo "counter".$_SESSION['counter'];


        }
        else
        {
            $_SESSION['counter']=1;

        }

        if($_SESSION['counter']==1 || $_SESSION['counter']==2)
        {
            $answers[$counter]=$_POST['correctOption'];
            $random=rand(1,3);
            $query="SELECT * from questiontable WHERE id=$random ";
            $result=$connect->query($query);
            $row = mysqli_fetch_array($result);

        }
        elseif ($_SESSION['counter']==3 || $_SESSION['counter']==4)
        {
            $answers[$counter]=$_POST['correctOption'];
            $random=rand(4,6);
            $query="SELECT * from questiontable WHERE id=$random ";
            $result=$connect->query($query);
            $row = mysqli_fetch_array($result);

        }
        elseif ($_SESSION['counter']>=4)
        {
            $answers[$counter]=$_POST['correctOption'];
            $random=rand(7,10);
            $query="SELECT * from questiontable WHERE id=$random ";
            $result=$connect->query($query);
            $row = mysqli_fetch_array($result);



        }else
        {
            echo "not";
        }

    }
    else
    {


        if(isset($_SESSION['counter']))
        {
            $_SESSION['counter'] = $_SESSION['counter'] - 1;
            echo "counter".$_SESSION['counter'];

        }
        elseif ($_SESSION['counter']==10)
        {
            header("location:studentAccount.php");
        }
        else
        {
            $_SESSION['counter']=1;
        }


        if($_SESSION['counter']==1 || $_SESSION['counter']==2)
        {
            $answers[$counter]=$_POST['correctOption'];
            $random=rand(1,3);
            $query="SELECT * from questiontable WHERE id=$random ";
            $result=$connect->query($query);
            $row = mysqli_fetch_array($result);

        }
        elseif ($_SESSION['counter']==3 || $_SESSION['counter']==4)
        {
            $answers[$counter]=$_POST['correctOption'];
            $random=rand(4,6);
            $query="SELECT * from questiontable WHERE id=$random ";
            $result=$connect->query($query);
            $row = mysqli_fetch_array($result);

        }
        elseif ($_SESSION['counter']>4)
        {
            $answers[$counter]=$_POST['correctOption'];
            $random=rand(7,10);
            $query="SELECT * from questiontable WHERE id=$random ";
            $result=$connect->query($query);
            $row = mysqli_fetch_array($result);



        }else
        {
            echo "not";
        }

    }
}
?>
<head>


</head>
<style>

    input[type=text] {

        font-size: 17px;
        border: none;
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;

    }
    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
        font-size: 20px;
        font-family:Arial;
    }
    input[type=submit] {
        background-color: #80827F;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }
    .col-25  {
        float: left;
        width: 25%;
        margin-top: 6px;

    }

    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }
    select {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
    }
</style>
<body bgcolor="white">
<div id="clockdiv"></div>
<div>
    <form action="examConduction.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row[0] ?>">
        <input type="hidden" name="correctOption" value="correctOption">
        <div class="row">
            <div class="col-25">
                <label>Question</label>
            </div>
            <div class="col-75">
                <input type="text" value="<?php echo $row[1]; ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>Answer 1</label>
            </div>
            <div class="col-75">
                <input type="radio" name="correctOption1" value="1" id="radio1" />
                <label for="1"><?php echo $row[4]; ?></label>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>Answer 2</label>
            </div>
            <div class="col-75">
                <input type="radio" name="correctOption1" value="2" id="radio1" />
                <label for="2"><?php echo $row[5]; ?></label>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>Answer 3</label>
            </div>
            <div class="col-75">
                <input type="radio" name="correctOption1" value="3" id="radio1" />
                <label for="3"><?php echo $row[6]; ?></label>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>Answer 4</label>
            </div>
            <div class="col-75">
                <input type="radio" name="correctOption1" value="4" id="radio1" />
                <label for="4"><?php echo $row[7]; ?></label>
            </div>
        </div>

        <div class="row">
            <div class="col-75">
                <input type="submit" value="Next">
            </div>
        </div>
    </form>
</div>
<script>
    var t;
    // 10 minutes from now
    var time_in_minutes = 1;
    var current_time = Date.parse(new Date());
    var deadline = new Date(current_time + time_in_minutes*60*1000);


    function time_remaining(endtime){
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor( (t/1000) % 60 );
        var minutes = Math.floor( (t/1000/60) % 60 );
        var hours = Math.floor( (t/(1000*60*60)) % 24 );
        var days = Math.floor( t/(1000*60*60*24) );
        return {'total':t, 'days':days, 'hours':hours, 'minutes':minutes, 'seconds':seconds};
    }
    function run_clock(id,endtime){
        var clock = document.getElementById(id);
        function update_clock(){
            t= time_remaining(endtime);
            clock.innerHTML = 'minutes: '+t.minutes+'<br>seconds: '+t.seconds;
            if(t.total<=0){ clearInterval(timeinterval); }
        }
        update_clock(); // run function once at first to avoid delay
        var timeinterval = setInterval(update_clock,1000);
        if(t<0 || t==0)
        {
            window.location="mainPage.php";

            <!--        --><?php //header("location:StudentLogin.php")  ?>

        }
    }
    run_clock('clockdiv',deadline);

    if(t<0 || t==0)
    {
        window.location.href="mainPage.php";

        <!--        --><?php //header("location:StudentLogin.php")  ?>

    }
</script>
</body>