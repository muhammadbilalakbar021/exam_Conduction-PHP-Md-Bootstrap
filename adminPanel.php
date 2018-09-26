<?php

require_once 'connectionDatabase.php';

    if(isset($_POST['categoryTable']))
    {
        $query="INSERT INTO categorytable(name,status) values('".$_POST['name']."','".$_POST['Status']."')";
        $result=$connect->query($query);
    }
    elseif (isset($_POST['questionTable']))
    {
        $question=$_POST['questionName'];
        $Category=$_POST['Category'];
        $SubCategory=$_POST['subCategory'];
        $Option1=$_POST['AnswerOption1'];
        $Option2=$_POST['AnswerOption2'];
        $Option3=$_POST['AnswerOption3'];
        $Option4=$_POST['AnswerOption4'];
        $correctOption=$_POST['correctOption'];
        $level=$_POST['Difficulty'];

        $query="INSERT INTO questiontable(questionName,Category,subCategory,AnswerOption1,AnswerOption2,AnswerOption3,AnswerOption4,correctOption,Difficulty) values('$question','$Category','$SubCategory','$Option1','$Option2','$Option3','$Option4','$correctOption','$level')";
        $result=$connect->query($query);
    }
    elseif (isset($_POST['categoryUpdate']))
    {
        require_once 'connectionDatabase.php';
        $id=$_POST['id'];
//        $query="UPDATE categorytable SET status=0 WHERE id='$id'";
        $test1="bilaltestinggg";
        $test2=0;
        $query="INSERT INTO categorytable(name,status) values('$test1','$test2')";
        $result=$connect->query($query);


    }
    elseif (isset($_POST['categoryDelete']))
    {
        require_once 'connectionDatabase.php';
        $id=$_POST['id'];
        $query="UPDATE categorytable SET status='' WHERE id='$id'";
        $result=$connect->query($query);

    }
    elseif (isset($_POST['questionDelete']))
    {
        $id=$_POST['id'];
        $query="DELETE from questiontable where id='$id'";
        $result=$connect->query($query);

    }
    elseif(isset($_POST["employee_id"]))
    {
        require_once 'connectionDatabase.php';
        $output = '';
        $query = "SELECT * FROM categorytable WHERE id = '".$_POST["employee_id"]."'";
        $result = $connect->query($query);
        $output .= '  
          <div class="table-responsive">  
               <table class="table table-bordered">';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '  
                    <tr>  
                         <td width="30%"><label>Name</label></td>  
                         <td width="70%"><input type="text" value=""></td>  
                    </tr>  
                    <tr>  
                         <td width="30%"><label>Address</label></td>  
                         <td width="70%">'.$row["status"].'</td>  
                    </tr>  
                      
                    ';
        }
        $output .= "</table></div>";
        echo $output;
    }


?>
<!--Html-->
<!doctype html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <import * as $ from 'jquery';></import>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="javascript" src="bootstrap.bundle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- Button trigger modal -->



    <title>Admin Panel</title>
    <style>

        * {box-sizing: border-box;}

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #B6BCBB;
        }

        .topnav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }


        .topnav .search-container {
            float: right;
        }

        .topnav input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
        }

        .topnav .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .topnav .search-container button:hover {
            background: #ccc;
        }

        @media screen and (max-width: 600px) {
            .topnav .search-container {
                float: none;
            }
            .topnav a, .topnav input[type=text], .topnav .search-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }
            .topnav input[type=text] {
                border: 1px solid #ccc;
            }
        }
        .sidebar {
            height: 100%;
            width: 160px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 16px;
        }

        .sidebar a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
        }

        .sidebar a:hover {
            color: #f1f1f1;

        }

        .main {
            margin-left: 160px; /* Same as the width of the sidenav */
            padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
            .sidebar {padding-top: 15px;}
            .sidebar a {font-size: 18px;}
        }
        .padding{padding-left: 150px}
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;

        }
        * {
            box-sizing: border-box;
        }
        .paddings{
            padding-left: 260px;
            padding-top: 100px;
            padding-right: 100px;
        }
        .containers {
            border-radius: 5px;
            background-color: #FFFFFF;

        }
        .input, .select, .textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
        }
        .labels {
            padding: 12px 12px 12px 0;
            display: inline-block;
            font-size: 20px;
            font-family: "Times New Roman", Times, serif;
        }
        input[type=submit] {
            background-color: #B6BCBB;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
        .TopBar{
            cursor: pointer;
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
        .rows:after {
            content: "";
            display: table;
            clear: both;
        }
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
        .paddingQuestionForm
        {
            padding-left: 320px;
            padding-right: 150px;
        }

        .paddingContactForm
        {

            padding-left: 180px;
            padding-right: 20px;
        }
        .body {font-family: Arial, Helvetica, sans-serif;}
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        .ahref
        {
            padding-left: 300px;
            cursor: pointer;
        }
        /*.table{*/
            /*background: #212529 !important;*/
            /*color: white !important;*/
        /*}*/
    </style>
</head>

<body style="background: white">
<div class=" topnav padding TopBar" style="background-color: #3F51B5;color: white">
    <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
    <a class="tablinks" onClick="tab(event, 'categoryForm')" ><i class="fa fa-fw fa-envelope"></i> Category Form</a>
    <a class="tablinks" onClick="tab(event, 'questionForm')" ><i class="fa fa-fw fa-user"></i> Question Form</a>
    <a class="tablinks" onClick="tab(event, 'T')" ><i class="fa fa-fw fa-cog"></i> Account</a>
    <a href="SessionEnd.php"><i class="fa fa-fw fa-sign-out"></i>Log out</a>
    <div class="search-container">
        <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>

<div class="sidebar">
    <h1 style="color: #818181 ;text-align: center ">CUI</h1>
    <hr>
    <a href="#" class="tablinks TopBar" onClick="tab(event, 'updateForm')"><i class="fa fa-fw fa-refresh"></i> Update</a>
    <a href="#" class="tablinks TopBar" onClick="tab(event, 'deleteForm')"><i class="fa fa-fw fa-trash"></i> Delete</a>
    <a href="#" class="tablinks TopBar" onClick="tab(event, 'fetchForm')"><i class="fa fa-fw fa-get-pocket"></i> Fetch</a>
    <a href="#" class="tablinks TopBar" onClick="tab(event, 'contactForm')" ><i class="fa fa-fw fa-phone"></i> Contact</a>
</div>
<div class="paddings ">
    <div class=" containers">
        <form action="adminPanel.php" method="POST">
            <input type="hidden" name="categoryTable" value="categoryTable">
            <div id="categoryForm" class="tabcontent ">
                <h3 align="center">Categories</h3>
                <div class="rows">
                    <div class="col-25">
                        <label for="category" class="labels">Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="input " id="name" name="name" placeholder="Category Name..">
                    </div>
                </div>
                <div class="rows">
                    <div class="col-25">
                        <label for="Status" class="labels">Status</label>
                    </div>
                    <div class="col-75">
                        <select id="status" class=" select " name="Status">
                            <option value="1">On</option>
                            <option value="">Off</option>
                        </select>
                    </div>
                </div>
                <div class="rows">
                    <input type="submit" name="submit" value="submit">
                </div>
            </div>
        </form>
    </div>

</div>

<div class="paddingQuestionForm !important">
    <div class=" containers">
        <form action="adminPanel.php" method="post">
            <input type="hidden" name="questionTable" value="questionTable">
            <div id="questionForm" class="tabcontent ">
                <h3 align="center">Categories</h3>
                <div class="rows">
                    <div class="col-25">
                        <label for="questionName" class="labels">Question</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="input " id="questionName" name="questionName" placeholder="Write down your question ?">
                    </div>
                </div>
                <div class="rows">
                    <div class="col-25">
                        <label for="Category" class="labels">Category</label>
                    </div>
                    <div class="col-75">
                        <select id="Category" class=" select " name="Category">
                            <option value="Computer Science">Computer Science</option>
                            <option value="Software Engineering">Software Engineering</option>
                            <option value="Computer Engineering">Computer Engineering</option>
                            <option value="Internet Technology">Internet Technology</option>
                        </select>
                    </div>
                </div>
                <div class="rows">
                    <div class="col-25">
                        <label for="subCategory" class="labels">Sub-Category</label>
                    </div>
                    <div class="col-75">
                        <select id="subCategory" class=" select " name="subCategory" >
                            <option value="JAVA">JAVA</option>
                            <option value="C programming">C programming</option>
                            <option value="Assembly">Assembly</option>
                            <option value="Data Structures">Data Structures</option>
                            <option value="Web Technology">Web Technology</option>
                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                            <option value="Digital Logic Design">Digital Logic Design</option>
                        </select>
                    </div>
                </div>
                <h3 align="center">Answer Options</h3>
                <div class="rows">
                    <div class="col-25">
                        <label for="AnswerOption1" class="labels">Option 1</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="input " id="AnswerOption1" name="AnswerOption1" placeholder="Write down your first option ">
                    </div>
                </div>
                <div class="rows">
                    <div class="col-25">
                        <label for="AnswerOption2" class="labels">Option 2</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="input " id="AnswerOption2" name="AnswerOption2" placeholder="Write down your second option ">
                    </div>
                </div>
                <div class="rows">
                    <div class="col-25">
                        <label for="AnswerOption3" class="labels">Option 3</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="input " id="AnswerOption3" name="AnswerOption3" placeholder="Write down your third option ">
                    </div>
                </div>
                <div class="rows">
                    <div class="col-25">
                        <label for="AnswerOption4" class="labels">Option 4</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="input " id="AnswerOption4" name="AnswerOption4" placeholder="Write down your fourth option ">
                    </div>
                </div>
                <div class="rows">
                    <div class="col-25">
                        <label for="Answer" class="label">Correct Option </label>
                    </div>
                    <div class="col-75">
                        <select id="correctOption" class=" select " name="correctOption">
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            <option value="4">Option 4</option>
                        </select>
                    </div>
                </div>
                <div class="rows">
                    <div class="col-25">
                        <label for="Difficulty" class="label">Difficulty</label>
                    </div>
                    <div class="col-75">
                        <select id="Difficulty" class=" select " name="Difficulty">
                            <option value="Very Easy">Very Easy</option>
                            <option value="Easy">Easy</option>
                                <option value="Moderate">Moderate</option>
                            <option value="Difficult">Difficult</option>
                            <option value="Very Difficult">Very Difficult</option>
                        </select>
                    </div>
                </div>
                <div class="rows">
                    <input type="submit"     value="Submit">
                </div>
            </div>
        </form>
    </div>

</div>

<div id="T" class="tabcontent">
    <h3>Tokyo</h3>
    <p>Tokyo is the capital of Japan.</p>
</div>

<div class="paddingContactForm body">
    <div class="containers">
        <div id="contactForm" class="tabcontent ">
        <h3 align="center">Contact Form</h3>
        <form action="/action_page.php">
                <div class="rows">
                    <div class="col-25">
                        <label for="fname" class="labels">First Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="input " id="name" name="name" placeholder="Your Name..">
                    </div>
                </div>
            <div class="rows">
                <div class="col-25">
                    <label for="lname" class="labels">Father Name</label>
                </div>
                <div class="col-75">
                    <input type="text" class="input " id="fname" name="fname" placeholder="Father Name..">
                </div>
            </div>
            <div class="rows">
                <div class="col-25">
                    <label for="email" class="labels">Email</label>
                </div>
                <div class="col-75">
                    <input type="text" class="input " id="email" name="email" placeholder="Email Address">
                </div>
            </div>
                <div class="rows">
                    <div class="col-25">
                        <label for="category" class="labels">Category</label>
                    </div>
                    <div class="col-75">
                        <select id="category" class=" select " name="category">
                            <option value="1">Computer Science</option>
                            <option value="2">Software Engineering</option>
                            <option value="3">Computer Engineering</option>
                            <option value="4">Internet Technology</option>
                        </select>
                    </div>
                </div>
            <div class="rows">
                <div class="col-25">
                    <label for="textarea" class="labels">Subject</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                </div>
            </div>
                <div class="rows">
                    <input type="submit" name="submit" value="submit">
                </div>

        </form>
        </div>
    </div>

</div>
<div class="paddingContactForm ">
        <div id="updateForm" class="tabcontent ahref">
            <a class=" btn btn-info btn-primary btn-lg" role="button" onClick="category(event, 'categoryUpdate')" >Category Update Form</a>
            <a class="btn btn-info btn-primary btn-lg" role="button" onClick="question(event, 'QuestionUpdate')" >Question Update Form</a>
        </div>

            <div id="categoryUpdate" style="display: none">
                <div class="containers">
                    <div >
                        <?php
                        require_once 'connectionDatabase.php';
                        $query="SELECT * FROM categorytable where status=1";
                        $result=$connect->query($query);
                        $rows=$result->num_rows;
                        ?>
<div>
    <table class='table  table-bordered ' width='100%'>
        <thead>
        <tr >
            <th width="20%">ID</th>
            <th width="50%">Category Name</th>
            <th width="10">Status</th>
            <th width="20%">Action</th>
        </tr>
        </thead>
    </table>
</div>
                        <?php

                        for($i=0;$i<$rows;$i++) {
                            $result->data_seek($i);
                            $rows = $result->fetch_array(MYSQLI_BOTH);


                            echo "<form action='adminPanel.php' method='GET'>";
                            echo "<div style='padding-bottom: -10px'>";
                            echo "<table class='table  table-bordered ' width='100%'>";
                            echo "<tbody>";
                            echo "<tr >";
                            echo "<td width='20%'>$rows[id]</td>";
                            echo "<td width='50%'>$rows[1]</td>";
                            echo "<td width='10%'>$rows[2]</td>";
                            echo "<input type='hidden' value='name=$rows[1]'>";
                            echo "<input type='hidden' value='$rows[1]'>";
                            echo "<td width='20%'><a class='btn btn-primary myBtn' id='$rows[id]' >Update</a></td>";
                            echo "</tr>";
                            echo "</tbody>";
                            echo "</table>";
                            echo "</div>";
                            echo "</form>";
                        }
                        ?>

<div class="modal fade" id="updateCategory" tabindex="-1" role="dialog" aria-labelledby="Category Update" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModel">Update</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

                <div class="modal-body" id="employee_detail">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

                    </div>
                </div>
            </div>
            <div id="QuestionUpdate" style="display: none">
                <div class="containers">

                    <h3 align="center">Contact Form</h3>
                    <div >
                        <?php
                        require_once 'connectionDatabase.php';

                        $query="SELECT * FROM questiontable ";
                        $result=$connect->query($query);
                        $rows=$result->num_rows;

                        echo <<<END
    <table class="table table-striped">
        <tbody>
        <tr >
            <th width="5%">ID</th>
            <th width="15%">Question</th>
            <th width="10%">Category</th>
            <th width="10%">Sub-Category</th>
            <th width="10%">Opt 1</th>
            <th width="10%">Opt 1</th>
            <th width="10%">Opt 1</th>
            <th width="10%">Opt 1</th>
            <th width="10%">Answer</th>
            <th width="10%">Difficulty</th>
            <th width="10%">Action</th>               
        </tr>
</tbody>
    </table>
END;
                        $i=0;
                        for($i;$i<$rows;$i++)
                        {
                            $result->data_seek($i);
                            $rows=$result->fetch_array(MYSQLI_BOTH);

                            echo <<<END
                    
                    <form action="adminPanel.php" method="post">
                        <table class="table table-striped">
                            <tbody>
                            <tr style="padding-bottom: -40px !important;">       
                                <td width="5%">$rows[0]</td>    
                                <td width="15%">$rows[1]</td>    
                                <td width="10%">$rows[2]</td>
                                <td width="10%">$rows[3]</td>    
                                <td width="10%">$rows[4]</td>    
                                <td width="10%">$rows[5]</td>
                                <td width="10%">$rows[6]</td>    
                                <td width="10%">$rows[7]</td>    
                                <td width="10%">$rows[8]</td>
                                <td width="10%">$rows[9]</td>
                                <td width="10%"><a class='btn btn-primary'  id="updateQuestion">Update</a></td>
                            </tr>           
</tbody>
                        </table>
                    </form>
END;
                            }

                        //<td><a href="adminPanel.php?id=$rows[0]"   data-toggle="modal" data-target="#questionUpdate">Update</a></td>
                        ?>
                    </div>
                </div>
            </div>
</div>







<div class="paddingContactForm ">
    <div id="deleteForm" class="tabcontent ahref">
        <a class=" btn btn-info btn-primary btn-lg" role="button" onClick="category(event, 'categoryDelete')" >Category Delete Form</a>
        <a class="btn btn-info btn-primary btn-lg" role="button" onClick="question(event, 'QuestionDelete')" >Question Delete Form</a>
    </div>

    <div id="categoryDelete" style="display: none">
        <div class="containers">

            <h3 align="center">Contact Form</h3>
            <div >
                <?php
                require_once 'connectionDatabase.php';

                $query="SELECT * FROM categorytable where status=1";
                $result=$connect->query($query);
                $rows=$result->num_rows;

                echo <<<END
    <table class='table table-dark width='100%'>
        <thead class="thead-dark">
        <tr >
            <th width="20%">ID</th>
            <th width="50%">Category Name</th>
            <th width="10">Status</th>
            <th width="20%">Action</th>
        </tr>
        </thead>
    </table>
END;
                for($i=0;$i<$rows;$i++)
                {
                    $result->data_seek($i);
                    $rows=$result->fetch_array(MYSQLI_BOTH);

                    echo <<<END
                    
                    <form action="adminPanel.php" method="post">
                        <input type="hidden" name="categoryDelete" value="categoryDelete">
                        <input type="hidden" name="id" value="$rows[id]">
                        <table class="table table-hover">
                            <tbody>
                            <tr >       
                                <td width="20%">$rows[0]</td>    
                                <td width="50%" >$rows[1]</td>    
                                <td width="10%">$rows[2]</td>
                                <td width="20%"><input type="submit" value="submit" style="float: left !important;"></td>
                                
                            </tr>           
</tbody>
                        </table>
                    </form>
END;

                }

                ?>

            </div>

        </div>
    </div>
    <div id="QuestionDelete" style="display: none">
        <div class="containers">

            <h3 align="center">Contact Form</h3>
            <div >
                <?php
                require_once 'connectionDatabase.php';

                $query="SELECT * FROM questiontable ";
                $result=$connect->query($query);
                $rows=$result->num_rows;

                echo <<<END
    <table class="table table-striped">
        <tbody>
        <tr >
            <th width="5%">ID</th>
            <th width="15%">Question</th>
            <th width="10%">Category</th>
            <th width="10%">Sub-Category</th>
            <th width="10%">Opt 1</th>
            <th width="10%">Opt 1</th>
            <th width="10%">Opt 1</th>
            <th width="10%">Opt 1</th>
            <th width="10%">Answer</th>
            <th width="10%">Difficulty</th>        
            <th width="10%">Action</th> 
        </tr>
</tbody>
    </table>
END;
                for($i=0;$i<$rows;$i++)
                {
                    $result->data_seek($i);
                    $rows=$result->fetch_array(MYSQLI_BOTH);

                    echo <<<END
                    
                    <form action="adminPanel.php" method="POST">
                    <input type="hidden" name="questionDelete" value="questionDelete">
                        <input type="hidden" name="id" value="$rows[0]">
                        <table class="table table-striped">
                            <tbody>
                           <tr style="padding-bottom: -40px !important;">       
                                <td width="5%">$rows[0]</td>    
                                <td width="15%">$rows[1]</td>    
                                <td width="10%">$rows[2]</td>
                                <td width="10%">$rows[3]</td>    
                                <td width="10%">$rows[4]</td>    
                                <td width="10%">$rows[5]</td>
                                <td width="10%">$rows[6]</td>    
                                <td width="10%">$rows[7]</td>    
                                <td width="10%">$rows[8]</td>
                                <td width="10%">$rows[9]</td>
                                <td><input type="submit" name="submit" value="Delete"></td>
                            </tr>           
</tbody>
                        </table>
                    </form>
END;

                }

                ?>

            </div>
            <
        </div>
    </div>


</div>
<div class="paddingContactForm ">
    <div id="fetchForm" class="tabcontent ahref">
        <a class=" btn btn-info btn-primary btn-lg" role="button" onClick="category(event, 'categoryFetch')" >Category Fetch</a>
        <a class="btn btn-info btn-primary btn-lg" role="button" onClick="question(event, 'questionFetch')" >Question Fetch</a>
    </div>

    <div id="categoryFetch" style="display: none">
        <div class="containers">

            <h3 align="center">Contact Form</h3>
            <div >
                <?php
                require_once 'connectionDatabase.php';

                $query="SELECT * FROM categorytable ";
                $result=$connect->query($query);
                $rows=$result->num_rows;

                echo <<<END
    <table class="table ">
        <thead>
        <tr >
            <th>ID</th>
            <th>Category Name</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
</thead>
    </table>
END;
                for($i=0;$i<$rows;$i++)
                {
                    $result->data_seek($i);
                    $rows=$result->fetch_array(MYSQLI_BOTH);

                    echo <<<END
                    
                    <form action="adminPanel.php" method="post">
                        <table class="table table-hover">
                            <tbody>
                            <tr class="Updatetrs">       
                                <td class="Updatetds">$rows[0]</td>    
                                <td class="Updatetds">$rows[1]</td>    
                                <td class="Updatetds" style="padding-left: 20px !important;">$rows[2]</td>
                            </tr>           
</tbody>
                        </table>
                    </form>
END;

                }

                ?>

            </div>

        </div>
    </div>
    <div id="questionFetch" style="display: none">
        <div class="containers">

            <h3 align="center">Contact Form</h3>
            <div >
                <?php
                require_once 'connectionDatabase.php';

                $query="SELECT * FROM questiontable ";
                $result=$connect->query($query);
                $rows=$result->num_rows;

                echo <<<END
    <table class="table table-striped">
        <tbody>
        <tr >
           <th width="5%">ID</th>
            <th width="15%">Question</th>
            <th width="10%">Category</th>
            <th width="10%">Sub-Category</th>
            <th width="10%">Opt 1</th>
            <th width="10%">Opt 1</th>
            <th width="10%">Opt 1</th>
            <th width="10%">Opt 1</th>
            <th width="10%">Answer</th>
            <th width="10%">Difficulty</th>    
        </tr>
</tbody>
    </table>
END;
                for($i=0;$i<$rows;$i++)
                {
                    $result->data_seek($i);
                    $rows=$result->fetch_array(MYSQLI_BOTH);

                    echo <<<END
                    
                    <form action="adminPanel.php" method="post">
                        <table class="table table-striped">
                            <tbody>
                            <tr style="padding-bottom: -40px !important;">       
                                <td width="5%">$rows[0]</td>    
                                <td width="15%">$rows[1]</td>    
                                <td width="10%">$rows[2]</td>
                                <td width="10%">$rows[3]</td>    
                                <td width="10%">$rows[4]</td>    
                                <td width="10%">$rows[5]</td>
                                <td width="10%">$rows[6]</td>    
                                <td width="10%">$rows[7]</td>    
                                <td width="10%">$rows[8]</td>
                                <td width="10%">$rows[9]</td>
                            </tr>           
</tbody>
                        </table>
                    </form>
END;

                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="questionUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModel">Update</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="adminPanel.php">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Question :</label>
                        <input type="text" class="form-control" id="recipient-name" value="<?php if(isset($_GET["name"])) echo $_GET["name"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Category:</label>
                        <select id="Category" class=" select " name="Category">
                            <option value="Computer Science">Computer Science</option>
                            <option value="Software Engineering">Software Engineering</option>
                            <option value="Computer Engineering">Computer Engineering</option>
                            <option value="Internet Technology">Internet Technology</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Sub-Category:</label>
                        <select id="subCategory" class=" select " name="subCategory" >
                            <option value="JAVA">JAVA</option>
                            <option value="C programming">C programming</option>
                            <option value="Assembly">Assembly</option>
                            <option value="Data Structures">Data Structures</option>
                            <option value="Web Technology">Web Technology</option>
                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                            <option value="Digital Logic Design">Digital Logic Design</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Answer 1:</label>
                        <input type="text" class="form-control" id="recipient-name" value="<?php if(isset($_GET["name"])) echo $_GET["name"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Answer 2:</label>
                        <input type="text" class="form-control" id="recipient-name" value="<?php if(isset($_GET["name"])) echo $_GET["name"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Answer 3:</label>
                        <input type="text" class="form-control" id="recipient-name" value="<?php if(isset($_GET["name"])) echo $_GET["name"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Answer 4:</label>
                        <input type="text" class="form-control" id="recipient-name" value="<?php if(isset($_GET["name"])) echo $_GET["name"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Correct Answer:</label>
                        <select id="correctOption" class=" select " name="correctOption">
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            <option value="4">Option 4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Difficulty:</label>
                        <select id="subCategory" class=" select " name="subCategory" >
                            <option value="JAVA">JAVA</option>
                            <option value="C programming">C programming</option>
                            <option value="Assembly">Assembly</option>
                            <option value="Data Structures">Data Structures</option>
                            <option value="Web Technology">Web Technology</option>
                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                            <option value="Digital Logic Design">Digital Logic Design</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


</body>
<script>
    function tab(evt, cityName)
    {
        document.getElementById('categoryUpdate').style.display = 'none';
        document.getElementById('QuestionUpdate').style.display = 'none';
        document.getElementById('QuestionDelete').style.display = 'none';
        document.getElementById('categoryDelete').style.display = 'none';
        document.getElementById('questionFetch').style.display = 'none';
        document.getElementById('categoryFetch').style.display = 'none';
        var i,tabContent,tabLink;
        tabContent=document.getElementsByClassName("tabcontent");
        for(i=0;i<tabContent.length;i++)
        {
            tabContent[i].style.display="none";
        }
        tabLink=document.getElementsByClassName("tablink");
        for(i=0;i<tabLink.length;i++)
        {
            tabLink[i].className=tabLink[i].className.replace("active","");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className
    }
    function category(evt, cityName)
    {
        document.getElementById('categoryUpdate').style.display = 'none';
        document.getElementById('QuestionUpdate').style.display = 'none';
        document.getElementById('QuestionDelete').style.display = 'none';
        document.getElementById('categoryDelete').style.display = 'none';
        document.getElementById('questionFetch').style.display = 'none';
        document.getElementById('categoryFetch').style.display = 'none';
        document.getElementById(cityName).style.display = "block";

    }
    function question(evt, cityName)
    {
        document.getElementById('categoryUpdate').style.display = 'none';
        document.getElementById('QuestionUpdate').style.display = 'none';
        document.getElementById('QuestionDelete').style.display = 'none';
        document.getElementById('categoryDelete').style.display = 'none';
        document.getElementById('questionFetch').style.display = 'none';
        document.getElementById('categoryFetch').style.display = 'none';
        document.getElementById(cityName).style.display = "block";
    }

</script>


<script>
    $(document).on("ready" ,function () {
        $('.myBtn').on('click',function () {
            var employee_id=$(this).attr("id");

            $.ajax({
                url:'adminPanel.php',
                method:"POST",
                data :{employee_id:employee_id},
                success:function (data) {
                  $('employee_detail').html(data);
                  $('#updateCategory').modal('show');
                }
            })

        });
    });

</script>
<script>
    $(document).ready(function(){
        $("#updateQuestion").click(function(){

            $("#questionUpdate").modal();
        });
    });

</script>

</html>