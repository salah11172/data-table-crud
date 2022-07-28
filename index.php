<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap model</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
</head>

<body>

    <!--Insert Modal -->

    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="insert.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label> First Name </label>
                            <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                        </div>

                        <div class="form-group">
                            <label> Last Name </label>
                            <input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
                        </div>

                        <div class="form-group">
                            <label> Course </label>
                            <input type="text" name="course" class="form-control" placeholder="Enter Course">
                        </div>

                        <div class="form-group">
                            <label> Phone Number </label>
                            <input type="number" name="contact" class="form-control" placeholder="Enter Phone Number">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <!-- Edit Model) -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="update.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
                            <label> First Name </label>
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name">
                        </div>

                        <div class="form-group">
                            <label> Last Name </label>
                            <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name">
                        </div>

                        <div class="form-group">
                            <label> Course </label>
                            <input type="text" name="course" id="course" class="form-control" placeholder="Enter Course">
                        </div>

                        <div class="form-group">
                            <label> Phone Number </label>
                            <input type="text" name="contact" id="contact" class="form-control" placeholder="Enter Phone Number">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- Delete  Model -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delete.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- View Model -->
    <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> View Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body">
                <table id="datatableid" class="table table-bordered table-dark">

                <!-- <h4 class="id_view"></h4> -->
               <tr><td> First Name </td><td> <h4>    <span class="fname_view fs-1 fw-bold"></span></h4></td></tr>
               <tr> <td>Last Name  </td><td> <h4>    <span class="lname_view fs-1 fw-bold"></span></h4></td></tr>
               <tr><td>Course </td><td> <h4>    <span class="course_view fs-1 fw-bold"></span></h4></td></tr>
               <tr> <td> Contact </td><td> <h4>    <span class="contact_view fs-1 fw-bold"></span></h4></td></tr>


                
                </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> CLOSE </button>
            </div>
            </form>

        </div>
    </div>
    </div>


    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <h2> PHP CRUD Bootstrap MODAL (POP UP Modal) </h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        ADD DATA
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">

                    <?php
                    $connection = mysqli_connect("localhost", "root", "");
                    $db = mysqli_select_db($connection, 'php_bootstrap_model');

                    $query = "SELECT * FROM student";
                    $query_run = mysqli_query($connection, $query);
                    ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name </th>
                                <th scope="col"> Course </th>
                                <th scope="col"> Contact </th>
                                <th scope="col" class="text-center"> Actions </th>

                            </tr>
                        </thead>
                        <?php
                        if ($query_run) {
                            foreach ($query_run as $row) {
                        ?>
                                <tbody>
                                    <tr>
                                        <td class="student_id"> <?php echo $row['id']; ?> </td>
                                        <td> <?php echo $row['fname']; ?> </td>
                                        <td> <?php echo $row['lname']; ?> </td>
                                        <td> <?php echo $row['course']; ?> </td>
                                        <td> <?php echo $row['contact']; ?> </td>
                                        <td>
                                            <button type="button" class="btn btn-info viewbtn"> VIEW </button>

                                            <button type="button" class="btn btn-success editbtn"> EDIT </button>

                                            <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                        </td>
                                    </tr>
                                </tbody>
                        <?php
                            }
                        } else {
                            echo "No Record Found";
                        }
                        ?>
                    </table>
                </div>
            </div>

            <div>

            </div>








            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
            <script>
                $(document).ready(function() {

                    $(document).on("click", ".viewbtn", function() {

                        var student_id = $(this).closest('tr').find('.student_id').text();
                        //  alert(student_id);

                        $.ajax({
                            type: "POST",
                            url: "../crud_php_boot_model/show.php",
                            data: {
                                'check_view': true,
                                'student_id': student_id,
                            },
                            success: function(response) {
                                     console.log(response);

                                $.each(response, function(key, studview) {
                                    // console.log(studview['fname']);
                                    $('.id_view').text(studview['id']);
                                    $('.fname_view').text(studview['fname']);
                                    $('.lname_view').text(studview['lname']);
                                    $('.course_view').text(studview['course']);
                                    $('.contact_view').text(studview['contact']);
                                });
                                $('#viewmodal').modal('show');
                            }
                        });

                    });

                });
            </script>


            <script>
                $(document).ready(function() {

                    $('#datatableid').DataTable({
                        pagingType: 'full_numbers',
                        "lengthMenu": [
                            [5, 10, 50, -1],
                            [5, 10, 50, "All"]
                        ]


                    });
                });
            </script>
            <script>
                $(document).ready(function() {

                    $('.deletebtn').on('click', function() {

                        $('#deletemodal').modal('show');

                        $tr = $(this).closest('tr');

                        var data = $tr.children("td").map(function() {
                            return $(this).text();
                        }).get();

                        console.log(data);

                        $('#delete_id').val(data[0]);

                    });
                });
            </script>

            <script>
                $(document).ready(function() {

                    $('.editbtn').on('click', function() {

                        $('#editmodal').modal('show');

                        $tr = $(this).closest('tr');

                        var data = $tr.children("td").map(function() {
                            return $(this).text();
                        }).get();

                        console.log(data);

                        $('#update_id').val(data[0]);
                        $('#fname').val(data[1]);
                        $('#lname').val(data[2]);
                        $('#course').val(data[3]);
                        $('#contact').val(data[4]);
                    });
                });
            </script>
</body>

</html>