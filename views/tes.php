<form action="<?php echo base_url();?>rp/action" method="post" name="form1" enctype="multipart/form-data">
					<div class="form-row">
						<input class="form-control mb-3" type="text" placeholder="Nama" name="namereg">
						<input class="form-control mb-3" type="email" placeholder="Email" name="emailreg">
						<select class="form-group form-control mb-3" name="agamareg">
							<option selected>Islam</option>
							<option>Kristen Protestan</option>
							<option>Kristen Katolik</option>
							<option>Hindu</option>
							<option>Buddha</option>
							<option>Kong Hu Cu</option>
						</select>
						<input class="form-control mb-3" type="password" placeholder="Password" name="passreg">
						<div class="row align-items-center">
							<div class="col text-left">
							</div>
							<div class="col text-right">
								<button class="btn-block btn btn-primary" type="submit">Daftar</button>
							</div>
						</div>
					</div>
				</form>