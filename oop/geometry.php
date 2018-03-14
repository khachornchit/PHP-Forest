<?php
	class Geometry_Rectangle
	{
		var	$width;
		var $length;

		function Geometry_Rectangle($width,$length)
		{
			$this->width = $width;
			$this->length = $length;
		}

		function Calculate_Area()
		{
			echo "Area of rectangle width=$this->width,  length=$this->length"."<br>";
			$this->area = $this->width * $this->length;
		}

		function Print_Area()
		{
			echo "Area = $this->area <p>";
		}
	}

	class Geometry_Circle extends Geometry_Rectangle
	{
		var $radius;

		function Geometry_Circle($radius)
		{
			$this->radius = $radius;
		}

		function Calculate_Area()
		{
			echo "Area of circle radius=$this->radius<br>";
			$this->area = 3.14 * $this->radius * $this->radius;
		}
	}
?>

<?php
	$rectangle = new Geometry_Rectangle(5,3);
	echo "Calculate area of rectangle <br>";
	$rectangle->Calculate_Area();
	$rectangle->Print_Area();
?>
<hr />
<?php
	$circle = new Geometry_Circle(10);
	echo "Calculate area of circle <br>";
	$circle->Calculate_Area();
	$circle->Print_Area();
?>