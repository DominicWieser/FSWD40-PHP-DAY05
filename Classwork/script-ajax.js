$("#sub").click( function() { // when submit button is clicked
$.post( $("#myForm").attr("action"), // fetch the URL from myForm
        $("#myForm :input").serializeArray(), // serialize the data from the input fields, creating an array of objects (name and value pairs)
        function(info){ $("#message").html(info); // append the response to element with id of message
  });
clearInput(); // Call the customized clearInput()
});

$("#myForm").submit( function() {
	$(".output").html("Sucsessfully inserted the data to database");
 return false;        // do not redirect after submit is clicked
});

function clearInput() { // clear all input fields from #myForm
       $("#myForm :input").each( function() {
              $(this).val('');
       });
}
//$.post($(".output"). 'pass_data_to_this_url', 'data', 'callback_function' );

$(document).ready(function () {

    $("#sub").click(function(event){
        event.preventDefault();
        var link = $(this).attr("href");
        // Ajax here
        $.ajax({
            url: link,
            type: 'GET',
            success: function (response){
                $("#search_results").html(response);
            }
        });
     });
});