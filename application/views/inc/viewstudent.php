  <H2>View Student</h2>
			<hr/>
		 
  <style>
      
.dep{
  border: 1px solid #ddd;
  padding: 5px;
  width: 450px;  
}

  </style>

        <div class="panel-body" style="width:600px;">
             
                <div class="form-group">
                    <label>Student Name</label>
           <input type="text" readonly="" value="<?php echo $stubyReg->name; ?>" class="form-control span12">
                </div>
                <div class="form-group">
                    <label>Department</label>
                  <?php 

                        $sdepid = $stubyReg->dep;
                        $getdep = $this->dep_model->getAllDepartment($sdepid);
                        if (isset($getdep)) {  ?>

     <input type="text" readonly="" value="<?php  echo $getdep->depname; ?>" class="form-control span12">          <?php }    ?> 
                 
                </div>
                <div class="form-group">
                    <label>Roll No.</label>
             <input type="text" readonly="" value="<?php echo $stubyReg->roll; ?>" class="form-control span12">
                </div>
				<div class="form-group">
                    <label>Reg. No.</label>
                 <input type="text" readonly="" value="<?php echo $stubyReg->reg; ?>" class="form-control span12">
                </div>
                <div class="form-group">
                    <label>Phone </label>
                <input type="text" readonly="" value="<?php echo $stubyReg->phone; ?>" class="form-control span12">
                </div>
                 
                
           
        </div>	