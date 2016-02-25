<?php require_once('header.php');
$newlink='';
if(isset($_REQUEST['user_id']) && trim($_REQUEST['user_id'])>0)
{
	$uid=$_REQUEST['user_id'];
	$skey=$user->Userdetail($uid,'keyid', true);
	$newlink='user_id='.$uid.'&amp;';
	if($user_type=='user')
	{
		$_SESSION['message']='You do not have access this page.';
		echo"<script type='text/javascript'>window.location='uploadfiles.php';</script>";
		exit();
	}
}
$totalrec=15;
if(isset($_REQUEST['pagedid']) && $_REQUEST['pagedid']>1)
{
	$pageid=$_REQUEST['pagedid'];
	$limitstart=$totalrec*($pageid-1);
}
else
{
	$pageid=1;
	$limitstart=0;
	$limitsend=$totalrec;
}
$filelist=$user->userFilelist($uid, " and keyid='$skey' order by id desc limit $limitstart, $totalrec");
$totalrecords=$user->userFilelist($uid, " and keyid='$skey' order by id desc");
 

?>

<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
    <!--<div class="row">
      <div class="col-lg-12 brdcum">
        <ol class="breadcrumb">
          <li class="active"> <i class="fa fa-eye"></i> View Files </li>
        </ol>
      </div>
    </div>-->
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
	<?php if(!empty($filelist)){ ?>
      <div class="viewfilebox">
	 
        <ul class="fileheading col-md-12">
          <li class="f_name col-md-6">Name</li>
          <li class="f_size col-md-1">Size</li>
          <li class="f_type col-md-2">Type</li>
          <?php /*?><li class="f_date col-md-2">Date Modified</li><?php */?>
          <li class="f_action col-md-3">Action</li>
        </ul>
		<?php foreach($filelist as $file){ 
				if (is_dir('uploads/'.$uid.'/'.date('Y-m-d H-i-s',strtotime($file['udate'])))) {
				$inputfile='javascript:;';
				if(file_exists('input/'.$uid.'/'.$file['filename']))
				{
					$inputfile='viewfiles.php?fileid=input/'.$uid.'/'.$file['filename'];
				}
				$ourputfile='javascript:;';
				if(file_exists('output/'.$uid.'/'.$file['filename']))
				{
					$ourputfile='viewfiles.php?fileid=output/'.$uid.'/'.$file['filename'];
				}
				$size=$user->dirSize('uploads/'.$uid.'/'.date('Y-m-d H-i-s',strtotime($file['udate'])));
			?>
		 <div class="viewfileblocks">
		 
        <ul class="main_folder col-md-12">
          <li class="f_name col-md-6"><a href="javascript:;" coords="<?php echo $file['ID']; ?>" class="maindir"><b class="upcaret"></b> <img src="img/f.png"/> <?php echo $file['udate']; ?></a></li>
          <li class="f_size col-md-1"><?php echo $size; ?></li>
          <li class="f_type col-md-2">Directory</li>
          <?php /*?><li class="f_date col-md-2"><?php echo date('Y-m-d',strtotime($file['udate'])); ?></li><?php */?>
          <li class="f_action actionblock col-md-3">
            <select>
              <option value="volvo">Run Churn</option>
              <option value="saab">Run Loyalty</option>
            </select>
			<input type="button" value="Submit" class="upload_submit btn-primary" style="margin:5px;" />
          </li>
        </ul>
		</div>
		<?php }} ?>
		
		
      </div>
	  <?php 
			if(count($totalrecords)>count($filelist))
			{
				$url='viewfiles.php?'.$newlink.'pagedid=';
				echo $user->pagination($totalrec,$pageid,$url,count($totalrecords));
			}
			}else{ $filelist=$user->userFilelist($uid);
				if(!empty($filelist)){echo'Please upload files again.';}
				else{echo'There is no file.';}
			?>
			
			<?php } ?>
    </div>
    
    
    </div>
    
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function(){
			var h=parseInt(jQuery(window).height())-parseInt(jQuery('.navbar-fixed-top').height())-parseInt(jQuery('footer.text-center').height());
			jQuery('#page-wrapper').css({'min-height':h+'px'});
			jQuery('a.maindir').live('click', function(){
				
				var ID=jQuery(this).attr('coords');
				$this=jQuery(this);
				var $this2=jQuery($this).parent('li');
				var $this3=jQuery($this).parents('ul');
				if(jQuery($this).hasClass('opened'))
				{
					jQuery('b',$this).removeClass('caret');
					jQuery('b',$this).addClass('upcaret');
					jQuery($this3).nextAll('ul.subfolder_'+ID).remove();
					jQuery($this3).nextAll('ul.files_'+ID).remove();
					jQuery($this).removeClass('opened');
					return false;
				}
				else
				{
					jQuery($this).addClass('opened')
				}
				jQuery.ajax({
				url: './viewdirs.php?showdir=maindir',
				type: 'post',
				data: {dir:ID, skey:'<?php echo $skey; ?>', uid:'<?php echo $uid; ?>'},
				dataType: 'json',
				beforeSend: function() {
					jQuery('img.preloading',$this2).remove();
					jQuery($this2).append('<img src="img/loading.gif" alt="Loading..." class="preloading" />');
				},	
				complete: function() {
					jQuery('img.preloading',$this2).remove();
				},			
				success: function(json) {		
						if (json['error']) {				
							alert(json['error']);	
						}
						else if (json['data']) {
							jQuery('b',$this).removeClass('upcaret');
							jQuery('b',$this).addClass('caret');
							jQuery($this3).nextAll('ul.subfolder_'+ID).remove();
							jQuery($this3).nextAll('ul.files_'+ID).remove();
							
							jQuery(json['data']).insertAfter(jQuery($this3));
						}
				   }	
				});
				return false;
				
			});
			jQuery('a.getfiles').live('click', function(){
				var ID=jQuery(this).attr('coords');
				var filetype=jQuery(this).attr('filetype');
				$this=jQuery(this);
				var $this2=jQuery($this).parent('li');
				var $this3=jQuery($this).parents('ul');
				if(jQuery($this).hasClass('opened'))
				{
					jQuery('b',$this).removeClass('caret');
					jQuery('b',$this).addClass('upcaret');
					jQuery($this3).next('ul.'+filetype+'_'+ID).remove();
					jQuery($this).removeClass('opened');
					return false;
				}
				else
				{
					jQuery($this).addClass('opened');
				}
				jQuery.ajax({
				url: './viewdirs.php?showdir=files',
				type: 'post',
				data: {dir:ID, skey:'<?php echo $skey; ?>', uid:'<?php echo $uid; ?>',filetype:filetype},
				dataType: 'json',
				beforeSend: function() {
					jQuery('img.preloading',$this2).remove();
					jQuery($this2).append('<img src="img/loading.gif" alt="Loading..." class="preloading" />');
				},	
				complete: function() {
					jQuery('img.preloading',$this2).remove();
				},			
				success: function(json) {		
						if (json['error']) {				
							alert(json['error']);	
						}
						else if (json['data']) {
							jQuery('b',$this).removeClass('upcaret');
							jQuery('b',$this).addClass('caret');
							jQuery($this3).next('ul.'+filetype+'_'+ID).remove();
							jQuery(json['data']).insertAfter(jQuery($this3));
						}
				   }	
				});
				return false;
				
			});
		});
	</script>
<?php require_once('footer.php'); ?>
