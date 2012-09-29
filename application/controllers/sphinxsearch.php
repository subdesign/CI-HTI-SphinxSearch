<?php 

class Sphinxsearch extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();

		$this->load->spark('sphinx/0.0.4');
	}

	public function search()
	{
		if($this->input->post()) 
		{
			$phrase = $this->input->post('search');

			$val = $this->form_validation;
			$val->set_rules('search', 'Search phrase', 'required|trim|xss_clean');
			$val->set_error_delimiters('<div class="error">','</div>');
			
			if($val->run()) 
			{				
				$res_datas = array(
					'search' => $val->set_value('search')
				);

				$this->session->set_userdata($res_datas);
				redirect('sphinxsearch/result');
			} 			
		} 			
		
		redirect(base_url());			
	}
	
	public function result()
	{
		// get the search phrase from session
		$data['search'] = $this->session->userdata('search');

		// select the match mode
		$this->sphinxsearch->set_match_mode(SPH_MATCH_EXTENDED2);	

		// format the sentence for Sphinx
		$sentence = '"' . $data['search'] . '"/1';

		// set result type to array
		$this->sphinxsearch->set_array_result(TRUE);

		// sort mode by relevance
		$this->sphinxsearch->set_sort_mode(SPH_SORT_RELEVANCE);

		// $result contains the found articles
		$result = $this->sphinxsearch->query($sentence);

		// initialize $ids array
		$ids = array();

		// collects the ids of articles that contain the searched phrase or words of phrase
		foreach($result['matches'] as $m)
		{
			$ids[] = $m['id'];
		}	

		// query the articles with the result ids
		$results = $this->db->where_in('id', $ids)->get('articles')->result();

		$data['results'] = $results;
		$this->load->vars($data);
		$this->load->view('results');
	}

}