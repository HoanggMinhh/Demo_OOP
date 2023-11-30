<?php
// Tạo một interface "Resizable" (Có thể điều chỉnh kích thước) với một phương thức là "resize". 
// Tạo một lớp "Rectangle" (Hình chữ nhật) và triển khai interface Resizable để thay đổi kích thước của hình chữ nhật.
interface Resizable{
    public function resize($percentage);
}

//lop trien khai interface
class Rectangle implements Resizable
{
    private $width;
    private $length;

    public function __construct($length, $width)
    {
        $this->length=$length;
        $this->width=$width;
    }

    public function resize($percentage)
    {
        $this->length *= 1 + $percentage/100;
        $this->width *= 1 + $percentage/100; 
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getLength()
    {
        return $this->length;
    }
}

$rectangle = new Rectangle(4,8);
echo "Chiều rộng hình chữ nhật trước khi thay đổi là: ". $rectangle->getWidth(). "<br>";

$rectangle->resize(50);
echo "Chiều rộng hình chữ nhật sau khi thay đổi là: ". $rectangle->getWidth(). "<br>";
