<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                            <div class="col-md-2">
                                <strong class="card-title ">Hotel</strong>
                            </div>    
                            <div class="col-md-10">
                                <a href="<?php echo site_url('Hotel/Add') ?>"><button type="button" class="btn btn-outline-success pull-right"><i class="fa fa-plus"></i>&nbsp; Add</button></a>
                                
                            </div>
                            <div class="col-md-12">
                                <br>
                                 <table class="table-striped" id="adminUserTable">
                                    <thead>

                                      <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($data['hotel'] as $item){ ?>
                                      <tr>
                                        <td><?php echo $item->name; ?></td>
                                        <td><?php echo $item->email; ?></td>
                                        <td><?php echo $item->contact; ?></td>
                                        <td>
                                            <a href="<?php echo site_url('Hotel/delete?id='.$item->id); ?>"><span><i class="fa fa-trash"></i></span></a></td>                                        
                                      </tr>
                                        <?php } ?>
                                     
                                    </tbody>
                                  </table>                                
                            </div>

                        </div>
                       
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    
$(document).ready(function() {
    $('#adminUserTable').DataTable();
} );

</script>        