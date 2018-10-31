<?php
class Stats extends CI_Controller {


        public function getstat()
        {
            /*if ( ! file_exists(APPPATH.'views/stats/getstats'.'.php'))
            {
                // Whoops, we don't have a page for that!
                show_404();
            }*/
            $this->load->model('Stats_model');
            $batbowlstats=$this->input->post('stattype');
            $team=$this->input->post('team');
            $prof='';
            if($batbowlstats=='Average' || $batbowlstats=='Econ' || $batbowlstats=='Wkts')
            {
            $records=$this->Stats_model->getbowlstats($batbowlstats,$team);
            $prof='Bowling';
            }
            else
            {
            $records=$this->Stats_model->get_stats($batbowlstats,$team);
            $prof='Batting';
            }
            $this->load->view('stats/getstats',['records'=>$records,'type'=>$prof]);
        }
}