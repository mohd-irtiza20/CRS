<?php
   ob_start();
   ?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body style='background: linear-gradient(to right, #1488cc, #2b32b2);'>
    <?php
         include 'menu.php';
         include 'header.php';
         ?>
    <div style="width:1030px;height: 1000px; margin-left: 230px">
        <div style="padding: 70px;">
            <h1 style="text-align: center; color:#fff; margin-top:40px">Add New Job </h1>
            <form method="post" class='job'>
                <h4 style=" color: red; font-size: 16pt; text-align: center; margin-bottom: 16px">Please Fill Job
                    Details
                </h4>
                <table>
                    <tr>
                        <td> <label>Job Title <span class='must'>* </span></label> </td>
                        <td><input type="text" required name="title" placeholder="Job Title" id='inputTextBox'></td>
                    </tr>
                    <tr>
                        <td> <label>Job Location <span class='must'>* </span></label> </td>
                        <td><input type="text" required name="location" placeholder="Job Location"></td>
                    </tr>
                    <tr>
                        <td> <label>Employment type <span class='must'>* </span></label> </td>
                        <td>
                            <select name='job_type'>
                                <option>---Select---</option>
                                <option>Full Time</option>
                                <option>Part Time</option>
                                <option>Intern</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td> <label> Key Skills</label> <span class='must'> * </span> </td>
                        <td><input type="text" required name="skills" placeholder='Key skills'></td>
                    </tr>
                    <tr>
                        <td> <label>Salary <span class='must'>* </span></label> </td>
                        <td><input type="text" id='city' required name="salary" placeholder="Salary"></td>
                    </tr>
                    <tr>
                        <td> <label>Industry <span class='must'>* </span></label> </td>
                        <td>
                            <select name='industry'>
                                <?php
                           include('../db.php');
                           $res = mysqli_query($con, "select * from category ");
                           echo "<option>Select Industry</option>";
                           while ($record = mysqli_fetch_assoc($res)) 
                           {
                           echo "<option value='{$record['id']}'>" . $record["name"] . "</option>";
                           }
                           ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td> <label> Role </span></label> <span class='must'>* </span></td>
                        <td><input type="text" required name="role" placeholder="Role"> </td>
                    </tr>
                    <tr>
                        <td> <label>Qualification Requirement <span class='must'>* </span></label> </td>
                        <td><input type="text" required name="qualification" placeholder="Qualification Requirement">
                        </td>
                    </tr>
                    <tr>
                        <td> <label>Min % in Graduation <span class='must'>* </span></label> </td>
                        <td><input type="text" required name="grd_marks" placeholder="%" maxlength="2" minlength="2"
                                id=''> </td>
                    </tr>
                    <tr>
                        <td> <label>Experience Requirement <span class='must'>* </span></label> </td>
                        <td>
                            <select name='experience'>
                                <option>---Select---</option>
                                <option>Fresher</option>
                                <option>1 yrs</option>
                                <option>2 yrs</option>
                                <option>3 yrs</option>
                                <option>4 yrs</option>
                                <option>4 or above yrs</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td> <label>Job Description <span class='must'>* </span></label> </td>
                        <td><textarea style='height:100px;' name="description" required
                                placeholder="Job Description"></textarea> </td>
                    </tr>
                    <tr>
                        <td> <label> Number of posts</label> <span class='must'> * </span> </td>
                        <td><input type="text" required name="posts" placeholder='Post' id='Number'></td>
                    </tr>
                </table>
                <input type="submit" class='add' name="btn_sbmt" value="POST JOB" id='submit_address'>
            </form>
        </div>
    </div>
</body>

</html>
<?php
   if (isset($_POST['btn_sbmt'])) {
      include('../db.php');
      mysqli_query($con, "insert into jobs(company_id,title,location,job_type,skills,salary,industry,role,qualification,experience,description,posts, grd_marks) values ('" . $_SESSION['company'] . "','" . $_POST['title'] . "','" . $_POST['location'] . "','" . $_POST['job_type'] . "','" . $_POST['skills'] . "','" . $_POST['salary'] . "','" . $_POST['industry'] . "','" . $_POST['role'] . "','" . $_POST['qualification'] . "','" . $_POST['experience'] . "','" . $_POST['description'] . "','" . $_POST['posts'] . "', '" . $_POST['grd_marks'] . "')");
   
      header('location:my-jobs.php');
   }
   ?>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

h1,
h4 {
    color: #333;
    margin: 0;
}

.must {
    color: #c60;
}

form {
    margin-top: 30px;
}

input[type="text"],
select,
textarea {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 12px 20px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

.job {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.job table {
    width: 100%;
}

.job label {
    font-weight: bold;
}

/* Animations */
.fade-in {
    animation: fadeIn 1s ease-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>