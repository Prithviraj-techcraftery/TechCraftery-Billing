<?php
include('header.php');
include('functions.php');
include('response.php');
?>
<h2>Add Product Category</h2>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <div class="message"></div>
</div>

<div class="row">
    <div class="col-xs-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Create New Category</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Create New Category</h4>
                            </div>
                            <div class="panel-body">
                                <form method="post" id="add_category">
                                    <input type="hidden" name="action" value="add_category">
                                    <div class="row">
                                    <input type="text" class="form-control" name="category" placeholder="Enter New Category">
                                    </div>
                                    <div class="row">
                                    <input type="submit" id="action_add_category" class="btn btn-success float-right"
                                        value="Add Category" data-loading-text="Adding...">
                                    </div>


                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<?php
include('footer.php');
?>