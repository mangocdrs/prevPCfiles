<?php


class Blog extends CI_Controller {

    public function index()
	{
		echo "welcome to my controller";
	}
	public function comment()
	{

		echo "Welcome to controller 2nd method";
	}

	public function shoes($sandals,$id)
	{
		echo "$sandals <br>" ;
		echo "$id <br>";

	}

	public function _output($output)
{
        echo $output;
}

public function loadanchor()
{
	$this->load->view('testinganchor.php');
}

// 	public function _remap($method)
// {
//         if ($method === 'index')
//         {
//                 $this->shoes();
//         }
//         else
//         {
//                $this->comment();
//         }
//}
	
	public function common()
	{

		if(is_php('5.6'))
		{

			echo "Yes";
		}
		else
		{
			echo "You have another version";
		}
	}

	public function checkfile()
	{
		if (is_really_writable('file.txt'))
      {
        echo "I could write to this if I wanted to";
      }
    else
     {
        echo "File is not writable";
      }
        set_status_header(401);

	}

}