 <html>
	<body>
	<?php
		include("newclass.php");
		include("Person.php");
		$object = new NewClass;
		$object->getProperty();
		$per = new Person("fname", "lname", 23);
		$per->setFirst("Ram");
		echo Person::$drink_age;
		echo Person::getDA();
	?>              
	</body>
 </html>