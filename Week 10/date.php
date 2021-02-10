<?php
class Date{
  public $day, $month, $year;

  public function displayDate($format = 0){
    if($this->day > 0 && $this->day < 10){
      $this->day = '0'.$this->day;
    }

    if($this->month > 0 && $this->month < 10){
      $this->month = '0'.$this->month;
    }

    // Year
    if($format == 'y') echo $this->year;

    //Day Month Year Format in -
    if($format == 'd-m-y') echo "$this->day-$this->month-$this->year";

    //Full Format
    if($format == 0 || $format == 'd/m/y') echo "$this->day/$this->month/$this->year";
  }



  public function displayMonth(){
    $month = ["Jan", "Feb",
              "Mar", "Apr", "May",
              "Jun", "Jul", "Aug",
              "Sep", "Oct", "Nov",
              "Dec"];
    $month_no = $this->month - 1;
    echo "$month[$month_no]";
  }
}

$date = new Date;
$date->day = 5;
$date->month = 1;
$date->year = 2020;

$date->displayDate();
echo "<br>";
$date->displayMonth();
?>
