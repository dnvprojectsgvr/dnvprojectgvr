<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $this->session->portal_config['short_name']; ?> | <?php echo $title; ?></title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/fonts/ionicons/css/ionicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>">
  
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/timepicker/bootstrap-timepicker.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/selectpicker/select.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/datepicker3.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">
  <link rel="icon" href="<?php echo base_url('assets/dist/img/favicon.ico'); ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/custom.css'); ?>">

</head>

<?php $this->load->view('admin/left_aside'); ?>
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-body">
          <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form action="" method="post">
              <div class="col-md-4">
                <label>From Date</label>
                <input type="text" class="form-control datepicker" name="from_date" required="required" value="<?php echo $from_date; ?>" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
              </div>
              <div class="col-md-4">
                <label>To Date</label>
                <input type="text" class="form-control datepicker" name="to_date" required="required" value="<?php echo $to_date; ?>" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
              </div>
              <div class="col-md-4 form-group">
                <label>Status</label>
                <select class="form-control selectpicker" name="status">
                  <option <?php if($status == 'all') { echo'selected'; } ?>>all</option>
                  <option <?php if($status == 'pending') { echo'selected'; } ?>>pending</option>
                  <option <?php if($status == 'approved') { echo'selected'; } ?>>approved</option>
                  <option <?php if($status == 'rejected') { echo'selected'; } ?>>rejected</option>
                </select>
              </div>
              <div class="col-md-12 form-group">
                <button type="submit" name="submit" value="submit" class="btn btn-primary pull-right">
                  Filter Data
                </button>
              </div>
            </form>
          </div> -->
          <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th> ID <?php $this->general_m->sort_link($url, $sort_column, $sort_order, 'employee_leaveid'); ?></span></a></th>
                  <th> Semester Name <?php $this->general_m->sort_link($url, $sort_column, $sort_order, 'leave_fromdate'); ?></span></a></th>
                  <th>Course Name <?php $this->general_m->sort_link($url, $sort_column, $sort_order, 'leave_todate'); ?></span></a></th>
                  <th>Action</th>     
                </tr>
              </thead>
              <tbody>
                <?php for($i=0; $i<count($semester); $i++) { ?>
                <tr>
                  <td><?php echo $semester[$i]['sd_id']; ?></td>
                  <td><?php echo $semester[$i]['sd_semname']; ?></td>
                  <td><?php echo $semester[$i]['cd_cname']; ?></td>
                  <td align="center">
                    <a href="<?php echo site_url('admin/semester/edit/'.$semester[$i]['sd_id']); ?>" title="Edit" class="btn btn-primary btn-xs">
                      <i class="fa fa-pencil-square-o"></i>
                    </a> 
                    <a href="<?php echo site_url('admin/semester/delete/'.$semester[$i]['sd_id']); ?>" title="Delete" class="btn btn-danger btn-xs" onclick="return confirm('are you sure you want to delete?'); ">
                      <i class="fa fa-trash-o"></i>
                    </a> 
                  </td>
                </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="3">Showing <?php echo $from_result; ?> to <?php echo $to_result; ?> of <?php echo $num_rows; ?> entries</td>
                  <td colspan="4">
                    <?php echo $this->pagination->create_links(); ?>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
</div>

<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Developed by</b><a href="<?php echo $this->session->portal_config['developer_web']; ?>"> <?php echo $this->session->portal_config['developer_name']; ?></a>
  </div>
  <strong>Copyright &copy; <?php echo date('Y'); ?>
    <a href="<?php echo $this->session->portal_config['url']; ?>"><?php echo $this->session->portal_config['club_name']; ?></a>.
  </strong> All rights
  reserved.
</footer>

<div class="control-sidebar-bg"></div>

</div>

<script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/fastclick/fastclick.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/app.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/sparkline/jquery.sparkline.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>

<script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/selectpicker/select.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
<script type="text/javascript">
  $("[data-mask]").inputmask();
</script>
</body>
</html>
