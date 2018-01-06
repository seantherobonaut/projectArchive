<?php
	class TimeStamp
	{
		private $millisecond;
		private $second;
		private $minute;
		private $hour;
		private $day;
		private $month;
		private $year;

		public function __construct()
		{
			$this->setTime();
		}

		private function setTime()
		{
			$this->millisecond = sprintf('%02d', round(microtime()*100));
			$this->second = date('s');
			$this->minute = date('i');
			$this->hour = date('G');
			$this->day = date('n');
			$this->month = date('d');
			$this->year = date('Y');
		}

		public function updateTime()
		{
			$this->setTime();
		}

		public function getStamp()
		{
			$date = $this->day.'-'.$this->month.'-'.$this->year;
			$time = $this->hour.':'.$this->minute.':'.$this->second.':'.$this->millisecond;
			return '['.$date.']'.'['.$time.']';
		}
	}
?>
