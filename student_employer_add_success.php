<!--Success page for adding an employer from the add student page-->
<?php
    $title = 'IDCP - Success';
    $page = 'student';
    $page_name = 'edit_stu_emp';
    require('includes/header.php');
    $page = 'add_student.php';
	header("Refresh: 3;url=$page");
?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="dropdown">
                    <h1>Success!</h1>
                    <p>You will be automatically redirected in 3 seconds...</p>
                    <div class = "butspan" style = "width: 300px;">
                        <button type="button" class="btn btn-primary btn-block" style = "margin-right: 50px;" onclick="location.href='add_student.php';">Continue</button>
                    </div>
                </div>
            </div>
        <!-- /#page-content-wrapper -->
        </div>
        <!--Footer-->
        <?php require('includes/footer.php'); ?>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
