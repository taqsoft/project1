<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<?php $this->load->view("users/dashboard_header"); ?>

<div class="timeline row" data-toggle="isotope" style="position: relative; height: 1967.74px;">
    <div class="col-xs-12 col-md-6 col-lg-3 item" style="position: absolute; left: 0px; top: 0px;">
        <div class="timeline-block">
            <div class="panel panel-default share clearfix-xs">
                <div class="panel-heading panel-heading-gray title">
                    Search Anything
                </div>
                <div class="panel-body">
                    <textarea name="status" class="form-control share-text" rows="3" placeholder="Search any thing..."></textarea>
                </div>
                <div class="panel-footer share-buttons">
                    <a href="#"><i class="fa fa-map-marker"></i></a>
                    <a href="#"><i class="fa fa-photo"></i></a>
                    <a href="#"><i class="fa fa-video-camera"></i></a>
                    <button type="submit" class="btn btn-primary btn-xs pull-right display-none" href="#">Post</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-8 item" style="position: absolute; left: 385px; top: 0px;background-color: white">
        <div class="timeline-block">
            <div class="">

                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Transit Type</th>
                        <th>Import/Export</th>
                        <th>Origin Pickup Point</th>
                        <th>Deliver Pickup Point</th>
                        <th>Commodity</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Transit Type</th>
                        <th>Import/Export</th>
                        <th>Origin Pickup Point</th>
                        <th>Deliver Pickup Point</th>
                        <th>Commodity</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>

                    <?php
                    foreach ($records->result() as $row)
                    {

                        ?>
                        <tr>
                            <td><?=ucwords(str_replace("_"," ",$row->transit_type))?></td>
                            <td><?=$row->import_export?></td>
                            <td><?=$row->origin_pickup_point?></td>
                            <td><?=$row->deliver_pickup_point?></td>
                            <td><?=$row->commodity?></td>
                            <td><a href="<?=base_url("home/project_detail/$row->id")?>"><img src="<?=base_url("assets/images/icons/black/32/single_document.png")?>" alt="details"/></a></td>

                        </tr>
                    <?php }?>
                    </tbody>
                </table>

            </div>
    </div>

</div>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>