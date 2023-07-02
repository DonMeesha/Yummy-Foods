<?php
include("include/menu.php");
?>


        <!--Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1 style="color:#FEE715FF;">MANAGE FOOD</h1>

                <br><br>
                <!--button to add admin-->
                <a href="" class="btn-primary"> Add Food</a>
                <br><br><br><br>

                <table class="tbl-full">
                    <tr>
                        <th>ID</th>
                        <th>full Name</th>
                        <th>User Name</th>
                        <th>Acctions</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>kaushi rameesha</td>
                        <td>krameesha</td>
                        <td>
                            <a href="#" class="btn-secondary">Update Admin</a>
                            <a href="#" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>kaushi rameesha</td>
                        <td>krameesha</td>
                        <td>
                            <a href="#" class="btn-secondary">Update Admin</a>
                            <a href="#" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>kaushi rameesha</td>
                        <td>krameesha</td>
                        <td>
                            <a href="#" class="btn-secondary">Update Admin</a>
                            <a href="#" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!--Main Content Section Ends -->


<?php
include("include/footer.php");
?>