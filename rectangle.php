<?php
// Bài tập Tạo lớp Hình chữ nhật:
// Tạo một lớp HìnhChuNhat với các thuộc tính chiều dài và chiều rộng.
// Tạo các phương thức để tính diện tích và chu vi của hình chữ nhật.
class rectangle{
    private $length;
    private $width;

    //phuong thuc khoi tao
    public function __construct($length, $width)
    {
        $this -> length = $length;
        $this -> width = $width;
    }

    //phuong thuc dien tich
    public function calculateArea()
    {
        return $this->length * $this->width;
    }

    //phuong thuc tinh chu vi
    public function calculatePeimeter()
    {
        return 2 * ($this->length + $this->width);
    }
}

//khoi tao doi tuong HCN
$rectangle = new rectangle(5, 3);

//goi phuong thuc tinh dien tich va chu vi
$area = $rectangle->calculateArea();
$peimeter = $rectangle->calculatePeimeter();

echo "Diện tích hình chữ nhật: ".$area;
echo "<br>Chu vi hình chữ nhật: ".$peimeter;
echo "<hr>";
?>