<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>

	<style>
		.btn.active{
			background-color: aqua;
		}
		.green-border{
			border-color:green;
		}   
		.red-border{
			border-color:"red";
		}
		.firstclass {
			background-color: pink;
		}
	</style>


</head>

<body>

<!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima laboriosam earum at explicabo, ipsam odio laudantium modi tempora impedit dolorem praesentium autem esse, sequi, adipisci deserunt iusto quisquam dolorum repellendus?</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique incidunt omnis vel dolores ipsa, molestias placeat maxime nostrum enim pariatur minus delectus nam? Accusamus, est molestiae libero similique sequi nisi.</p>
<button>click here for hide and show</button> -->

	<form action="" id="form">

		<!-- NAME:<input type="text" class="name" id="name"><br><br>
		EMAIL:<input type="email" class="name" id="email"><br><br>
		PHONE NO.:<input type="tel" class="name" id="phone"><br><br>
		CLASS:<input type="text" class="name" id="class"><br><br>
		ADDRESS: <textarea class="name" id="address"></textarea><br><br> -->

		<!-- <button type="save">SUBMIT</button> -->
	</form>

	<script>

		// $(document).ready(function () {
		// 	$("input").focus(function () {
		// 		$(this).css({ "background-color": "yellow", "border": "red" });
		// 	});
		// 	$("input").blur(function () {
		// 		$(this).css("background-color", "green");
		// 	});
		// 	$("input").click(function () {
		// 		$(this).hide(); 
		// 	});
		// 	$("input").click(function(){
		// 		$(this).show();
		// 	});
		// });


		// $(document).ready(function(){
		// 	$("#phone").change(function(){
		// 		$(this).css({"background":"red"});
		// 	});

		// });



// 		$(document).ready(function(){
//   $("button").click(function(){
// 	$("p").toggle();
//   });
// });

		// $(document).ready(function(){

		// 	$("#form").submit(function(e){
		// 		form1=$("#name").val();
		// 		form2=$("#email").val();
		// 		form3=$("#phone").val();
		// 		form4=$("#class").val();
		// 		form5=$("#address").val();

		// 		iserror=false;

		// 		if(form1==""){
		// 			iserror=true;
		// 			$("#name").addClass("green-border");
		// 		}
			
		// 		if(form2==""){
		// 			iserror=true;
		// 			$("#email").addClass("green-border");
		// 		}
			
		// 		if(form3==""){
		// 			iserror=true;
		// 			$("#phone").addClass("green-border");
		// 		}
			
		// 		if(form4==""){
		// 			iserror=true;
		// 			$("#class").addClass("green-border");
		// 		}
			
		// 		if(form5==""){
		// 			iserror=true;
		// 			$("#address").addClass("green-border");
		// 		}if(iserror){
		// 			e.preventDefault();
		// 		}

		// 	});

			
		// });

		// $(document).ready(function () {

		// 	$("input").keypress(function () {
		// 		$(this).css({ "background": "red" });
		// 	});
		// 	$("input").keyup(function () {
		// 		$(this).css({"background":"green"})
		// 	});
		// });

	</script>




<table id="data" border="1" width="300" cellspacing="0">

<tr>
	</tr>
	<th>Name</th>
	<th>Email</th>
	<th>Phone</th>
	<th><button class="add_more">+</button></th>
</tr>
<tr>
	<td><input type="text" name="name"></td>
	<td><input type="email" name="email"></td>
	<td><input type="tel" name="phone"></td>

	<td><button class="remove">X</button></td>
</tr>
</table>
<br>

<div>
<button class="btn-info">Show/Hide</button>
<button class="btn-show">Show</button>
<button class="btn-hide">Hide</button>

</div>

<script>

$(document).ready(function(){

	$(".add_more").click(function(){
		let tableRow='<tr>\
		<td><input type="text" name="name"></td>\
		<td><input type="email" name="email"></td>\
		<td><input type="tel" name="phone"></td>\
		<td><button class="remove">X</button></td>\
		</tr>';

		$("#data").append(tableRow);
		// $("#data").html(tableRow);

	});

// $(".remove").click(function(){

// 	$(this).closest("tr").remove();
// });
$("#data").delegate(".remove","click",function(){
	$(this).closest("tr").remove();
});


});


 </script>

<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non aliquam nostrum sapiente deserunt soluta explicabo fuga ipsum sint asperiores, rerum ut maiores magni quod est amet veritatis nesciunt? Placeat, ipsam?</p>
<button id="add">addcolor</button>
<button id="add-sdf">add_color</button>
<button id="add_ckioll">add-color</button>

 <script>
	$(document).ready(function(){
		$("#add").click(function(){
			$("p").addClass("firstclass");
		});
		$("#add").dblclick(function(){
			$("p").removeClass("firstclass");
		});

	}); -->
 </script> 

</body>

</html> 

