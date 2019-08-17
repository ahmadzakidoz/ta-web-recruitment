<?php

class M_pengunjung extends CI_Model
{
    public function count_visitor()
    {
        $ip = $this->input->server('REMOTE_ADDR');
    }
}
