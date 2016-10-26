<?php
class task {
	protected $description;
	protected $completed=true;
	public function __construct($description)
	{
		$this->description=$description;
	}
	public function complete()
	{
		$this->completed=true;
	}
	public function iscomplete()
	{
		return $this->completed;
	}
}
$task=new task('go to the store');
$task->complete();
var_dump($task->iscomplete());
?>