<?php
// Tạo một class trừu tượng "Shape" (Hình dạng) có một phương thức trừu tượng là "calculateArea". 
// Tạo các lớp con "Circle" (Hình tròn) và "Rectangle" (Hình chữ nhật) kế thừa từ lớp Shape và triển khai phương thức calculateArea cho từng hình.
//khai bao lop truu tuong
abstract class Shape{
    abstract public function calculateArea();
}

//lop con ke thua tu lop shape
class Circle extends Shape{
    //thuoc tinh
    private $radius;

    //ham khoi tao
    public function __construct($radius)
    {
        $this->radius=$radius;
    }

    //trien khai phuong thuc calculateArea cua hinh tron
    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}

$circle = new Circle(5);
$areaCircle = $circle->calculateArea();
echo "Diện tích hình tròn: ".$areaCircle . "<br>";
?>