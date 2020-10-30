<div class="modal fade" id="samstrover<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Employee Information</h4></center>
                </div>
             <?php
					$pro=mysqli_query($mysqli,"select * from employees where id='".$row['id']."'");
					$prow=mysqli_fetch_array($pro);
                    $tmp = $prow['tmp'];
				?>
				<div class="row">
                     <p class="text-center">Employee Id: <?php echo $prow['employee_id'];?></p>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="#"  class="img-thumbnail">
                           <?php require('propic.php');?> 
                        </a>
                        </div>
                     <div class="col-md-4"></div>
                </div>
                <form >
                <div class="modal-body">
	 
                    
                    <div class="row">
                    <div class="col-md-6">
                    <label>Name</label> 
                    <input name="name" type="text" class="form-control" value="<?php echo $prow['name'];?>" readonly>    
                    </div>
                    <div class="col-md-6">
                    <label>Surname</label> 
                    <input name="surname" type="text" class="form-control" value="<?php echo $prow['surname'];?>" readonly>        
                    </div>    
                    </div>
                     <div class="row">
                    <div class="col-md-6">
                    <label>Email</label> 
                    <input name="email" type="text" class="form-control" value="<?php echo $prow['email'];?>" readonly>    
                    </div>
                    <div class="col-md-6">
                    <label>Phone</label> 
                    <input name="phone" type="text" class="form-control" value="<?php echo $prow['phone'];?>" readonly>        
                    </div>    
                    </div>   
                     <div class="row">
                   <div class="col-md-6">
                    <label>Gender</label> 
                    <input name="gender" type="text" class="form-control" value="<?php echo $prow['gender'];?>" readonly>        
                    </div>
                    <div class="col-md-6">
                    <label>Joined Date</label> 
                    <input name="province" type="text" class="form-control" value="<?php echo $prow['joined'];?>" readonly>    
                    </div>
                    </div> 
                 <div class="line"></div>
				</div>
               
				 </form>
            </div>
        </div>
    </div>
