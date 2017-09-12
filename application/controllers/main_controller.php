<?php
	class Main_controller extends CI_Controller
	{
		public function index()
		{
			// loads main model
			$this->load->model("main_model");

			// store database data into array var 
			$data["get_data"] = $this->main_model->get_data();

			// loads main view and pass data to it
			$this->load->view("main_view", $data);
		}

		public function form_validation()
		{
			/* sets the rules with 3 arguments:
			first arg is name of input
			second arg is label for error log
			third arg is validation rule 
			*/
			$this->form_validation->set_rules("first_name", "First Name", "required");
			$this->form_validation->set_rules("last_name", "Last Name", "required");
			$this->form_validation->set_rules("email", "Email", "required");
			$this->form_validation->set_rules("month", "Month", "required");
			$this->form_validation->set_rules("day", "Day", "required");
			$this->form_validation->set_rules("year", "Year", "required");
			$this->form_validation->set_rules("favcolor", "Color", "required");

			// check if form validation is true, if so load main model
			// else call index function of this controller 
			if($this->form_validation->run())
			{
				$this->load->model("main_model");

				// assigning the values for the table
				$data = array("first_name"=>$this->input->post("first_name"),
							"last_name"=>$this->input->post("last_name"),
							"email"=>$this->input->post("email"),
							"dob"=>$this->input->post("year")."/".$this->input->post("month")."/".$this->input->post("day"),
							"favcolor"=>$this->input->post("favcolor"),	
							);
				
				// passing the values into table
				$this->main_model->insert_data($data);

				redirect(base_url(). "main_controller/inserted");
			}
			else
			{
				$this->index();
			}
		}

		// re direct to main_view 
		public function inserted()
		{
			$this->index();
		}
	}
